# Paging Actions for FusionPBX

Paging Actions adds dial codes that page a set of phones. An action is either a **live page** (a Tannoy: the caller speaks through every selected phone) or a **recorded announcement** (a Lockdown: a recording is played through every selected phone, on a loop if you want, and carries on after the caller hangs up until someone dials the cancel code).

Each action is created in the FusionPBX GUI: pick a start code, tick the extensions, choose a recording from the Recordings app, save. The app writes the dialplans for you and a small Lua engine does the work on FreeSWITCH.

It was written to replace hand-maintained per-tenant dialplans and scripts for an emergency lockdown message and paging groups, so the design goal throughout is that it works every time and can always be stopped.


## Requirements

FusionPBX 5.6 or newer (tested on 5.6.8 and master; older releases are untested and may lack framework features the pages use), FreeSWITCH 1.10 or newer with mod_conference and mod_lua, and mod_hash, which FusionPBX loads by default. If mod_hash is missing the engine still works, using global variables instead, but the "only one run at a time" lock is then no longer atomic.

Phones must be set to auto-answer a page. By default the app sends `Call-Info: <sip:domain>;answer-after=0` and `Alert-Info: Ring Answer`, the same headers FusionPBX's own paging uses. Whether a phone that is already on a call lets a page through is decided by the phone (on Yealink, the intercom barge setting).

## Installing

Put the repository in the FusionPBX `app` directory. The folder must be called `paging_actions`.

```sh
cd /var/www/fusionpbx/app
git clone <this repository> paging_actions
chown -R www-data:www-data paging_actions
```

Then run the usual upgrade steps, either in the GUI (Advanced > Upgrade, ticking Schema, App Defaults and Permission Defaults) or from the shell:

```sh
cd /var/www/fusionpbx
php core/upgrade/upgrade.php --schema
php core/upgrade/upgrade.php --defaults
php core/upgrade/upgrade.php --permissions
```

Schema creates the `v_paging_actions` table. App Defaults copies the Lua scripts into the switch scripts directory, adds a `paging_actions` conference profile and adds the default settings. Permission Defaults gives the `superadmin` and `admin` groups access.

To add the menu entry, either run Menu Defaults (`php core/upgrade/upgrade.php --menu`), or, if you have customised your menu and do not want it restored, add an item by hand in Advanced > Menu Manager pointing at `/app/paging_actions/paging_actions.php`. Log out and back in to pick up the new permissions.

Check that the scripts arrived:

```sh
ls /usr/share/freeswitch/scripts/app/paging_actions/
# index.lua  resources
```

If they did not (the web user could not write to the scripts directory), copy them yourself with `cp -r /var/www/fusionpbx/app/paging_actions/resources/scripts/app/paging_actions /usr/share/freeswitch/scripts/app/`.

To update later, `git pull` in the app folder and run App Defaults again. That re-copies the scripts and regenerates every action's dialplan, so nothing has to be re-saved by hand.


## Licence

Mozilla Public License 1.1, the same licence as FusionPBX. See `LICENSE`.
