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

        //application details
                $apps[$x]['name'] = "Paging Actions";
                $apps[$x]['uuid'] = "6c9dfa95-6d8f-4b24-83a2-af8c1ee4e1c1";
                $apps[$x]['category'] = "Switch";
                $apps[$x]['subcategory'] = "";
                $apps[$x]['version'] = "1.0.0";
                $apps[$x]['license'] = "Mozilla Public License 1.1";
                $apps[$x]['url'] = "";
                $apps[$x]['description']['en-us'] = "Dial codes that page a set of phones: live announcements (Tannoy) and recorded, looping emergency broadcasts (Lockdown) with a cancel code.";
                $apps[$x]['description']['en-gb'] = "Dial codes that page a set of phones: live announcements (Tannoy) and recorded, looping emergency broadcasts (Lockdown) with a cancel code.";

        //default settings
                $y = 0;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "813e4847-f7a7-4b85-ba0a-1f53ef868aa1";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "auto_answer";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "call_info";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "How paged phones are told to answer automatically: call_info (Call-Info: answer-after=0), sip_auto_answer, or none.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5b0d2011-0edc-4c1a-8532-e40df6abb41e";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "alert_info";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "Ring Answer";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Value of the Alert-Info header sent to paged phones. Leave empty to send no Alert-Info header.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6fcb9380-2d86-43b6-94e4-d34bfbba7c0a";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "start_delay";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "2";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Seconds to wait after the first phone answers before a recorded announcement starts, so that the other phones have time to answer.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e8463ee5-aa14-40de-81df-cec039d41c6d";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "retry_interval";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "15";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Seconds before a phone that hung up, was busy or was unreachable is called again by a persistent announcement.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7634624a-6567-49ee-b81f-fb57f33eab6e";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "originate_timeout";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "20";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Seconds a paged phone is given to answer.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c70eec66-e55d-45b5-983b-7f1ec54a4dc2";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "originate_rate";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "20";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Maximum number of phones called per second. Keep this below the sessions-per-second limit of the switch.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9d9a4e18-e228-4f67-853d-a5d141872e46";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dialplan_order";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "200";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Order of the dialplans created for start and cancel codes. Lower numbers are matched first.";
                $y++;
                $apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2e9beb5c-5557-4058-859c-0f731fbb4d31";
                $apps[$x]['default_settings'][$y]['default_setting_category'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "conference_profile";
                $apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
                $apps[$x]['default_settings'][$y]['default_setting_value'] = "paging_actions";
                $apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
                $apps[$x]['default_settings'][$y]['default_setting_description'] = "Conference profile used for recorded announcements. Live pages use the standard page profile.";
                $y++;

        //permission details
                $y = 0;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_view";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_add";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_edit";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_delete";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_control";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_all";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_file";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $y++;
                $apps[$x]['permissions'][$y]['name'] = "paging_action_caller_id";
                $apps[$x]['permissions'][$y]['groups'][] = "superadmin";
                $apps[$x]['permissions'][$y]['groups'][] = "admin";
                $y++;

        //schema details
                $y = 0;
                $apps[$x]['db'][$y]['table']['name'] = "v_paging_actions";
                $apps[$x]['db'][$y]['table']['parent'] = "";
                $z = 0;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
                $apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
                $apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
                $apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
                $apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Dialplan for the start code.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "cancel_dialplan_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Dialplan for the cancel code.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_name";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['search_by'] = "1";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Name of the action.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_type";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "broadcast (recorded announcement) or page (live).";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_extension";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['search_by'] = "1";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Code dialled to start the action.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_cancel_extension";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['search_by'] = "1";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Code dialled to stop a recorded announcement.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_pin_number";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Optional PIN numbers, comma separated.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_destination_mode";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "selected or all (every registered extension).";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_destinations";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Comma separated extensions and ranges.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_audio_source";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "recording or file.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_recording_uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Recording played by a recorded announcement.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_file";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Full path of the audio file played when the source is file.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_loops";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Times the recording is played. 0 plays until cancelled.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_timeout";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Maximum duration in seconds. 0 for no limit.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_persistent";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "boolean";
                $apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Call phones again when they hang up or were unreachable.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_skip_busy";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "boolean";
                $apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Do not page phones that are on a call.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_caller_id_name";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['search_by'] = "1";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID name shown on paged phones.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_caller_id_number";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID number shown on paged phones.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_enabled";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "boolean";
                $apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Set the status of this action.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "paging_action_description";
                $apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['search_by'] = "1";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Description.";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_date";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamptz";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "date";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_user";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "update_date";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "timestamptz";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "date";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "date";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
                $z++;
                $apps[$x]['db'][$y]['fields'][$z]['name'] = "update_user";
                $apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
                $apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
                $apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
                $apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

?>
