<?php
/*
        Paging Actions for FusionPBX
        Version: MPL 1.1

        The contents of this file are subject to the Mozilla Public License Version
        1.1 (the "License"); you may not use this file except in compliance with
        the License. You may obtain a copy of the License at
        http://www.mozilla.org/MPL/

        Software distributed under the License is distributed on an "AS IS" basis,
        WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
        for the specific language governing rights and limitations under the
        License.

        The Original Code is Paging Actions for FusionPBX.

        The Initial Developer of the Original Code is
        Henry Dobinson
        Portions created by the Initial Developer are Copyright (C) 2026
        the Initial Developer. All Rights Reserved.
*/

        if ($domains_processed == 1) {
                        $source_directory = __DIR__.'/resources/scripts';
                        $destination_directory = $settings->get('switch', 'scripts', '');
                        if (empty($destination_directory) || !is_dir($destination_directory)) {
                                foreach (['/usr/share/freeswitch/scripts', '/usr/local/share/freeswitch/scripts', '/usr/local/freeswitch/scripts'] as $directory) {
                                        if (is_dir($directory)) { $destination_directory = $directory; break; }
                                }
                        }
                        if (is_dir($source_directory) && !empty($destination_directory) && is_dir($destination_directory) && is_writable($destination_directory)) {
                                recursive_copy($source_directory, $destination_directory);
                        }
                        else {
                                $paging_actions_message = "Paging Actions: could not copy the Lua scripts from '".$source_directory."' to the switch scripts directory '".$destination_directory."'. Copy them by hand, see README.md.";
                                if (function_exists('is_cli') && is_cli()) {
                                        echo $paging_actions_message."\n";
                                }
                                else {
                                        message::add($paging_actions_message, 'negative');
                                }
                                unset($paging_actions_message);
                        }
                        unset($source_directory, $destination_directory, $directory);

                        $conference_profile_name = preg_replace('/[^A-Za-z0-9_-]/', '', (string) $settings->get('paging_actions', 'conference_profile', 'paging_actions'));
                        if (empty($conference_profile_name)) { $conference_profile_name = 'paging_actions'; }
                        $sql = "select count(*) from v_conference_profiles ";
                        $sql .= "where profile_name = :profile_name ";
                        $parameters['profile_name'] = $conference_profile_name;
                        $num_rows = $database->select($sql, $parameters, 'column');
                        unset($sql, $parameters);
                        if (empty($num_rows)) {
                                $conference_profile_uuid = uuid();
                                $array['conference_profiles'][0]['conference_profile_uuid'] = $conference_profile_uuid;
                                $array['conference_profiles'][0]['profile_name'] = $conference_profile_name;
                                $array['conference_profiles'][0]['profile_enabled'] = 'true';
                                $array['conference_profiles'][0]['profile_description'] = 'Recorded announcements (Paging Actions)';
                                $conference_profile_params = [
                                        'rate' => '8000',
                                        'interval' => '20',
                                        'energy-level' => '300',
                                        'comfort-noise' => 'false',
                                        'caller-controls' => 'none',
                                        'member-flags' => 'mute',
                                ];
                                $y = 0;
                                foreach ($conference_profile_params as $param_name => $param_value) {
                                        $array['conference_profile_params'][$y]['conference_profile_param_uuid'] = uuid();
                                        $array['conference_profile_params'][$y]['conference_profile_uuid'] = $conference_profile_uuid;
                                        $array['conference_profile_params'][$y]['profile_param_name'] = $param_name;
                                        $array['conference_profile_params'][$y]['profile_param_value'] = $param_value;
                                        $array['conference_profile_params'][$y]['profile_param_enabled'] = 'true';
                                        $y++;
                                }
                                $p = permissions::new();
                                $p->add('conference_profile_add', 'temp');
                                $p->add('conference_profile_param_add', 'temp');
                                $database->save($array, false);
                                unset($array);
                                $p->delete('conference_profile_add', 'temp');
                                $p->delete('conference_profile_param_add', 'temp');
                                unset($conference_profile_uuid, $conference_profile_params, $param_name, $param_value, $y);
                        }
                        unset($num_rows, $conference_profile_name);

                //regenerate the dialplans so they pick up changed default settings and the current dialplan format
                        $sql = "select count(*) from v_paging_actions ";
                        $num_rows = $database->select($sql, null, 'column');
                        unset($sql);
                        if (!empty($num_rows)) {
                                $paging_actions = new paging_actions(['database' => $database, 'settings' => $settings]);
                                $paging_actions->rebuild();
                                unset($paging_actions);
                        }
                        unset($num_rows);

        }

