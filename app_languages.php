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

$text['title-paging_actions']['en-us'] = "Paging Actions";
$text['title-paging_actions']['en-gb'] = "Paging Actions";

$text['title-paging_action']['en-us'] = "Paging Action";
$text['title-paging_action']['en-gb'] = "Paging Action";

$text['title_description-paging_actions']['en-us'] = "A paging action is a code dialled from any phone. A live page (Tannoy) lets the caller speak through the selected phones. A recorded announcement (Lockdown) plays a recording through them, on a loop if needed, and keeps playing after the caller hangs up until its cancel code is dialled.";
$text['title_description-paging_actions']['en-gb'] = "A paging action is a code dialled from any phone. A live page (Tannoy) lets the caller speak through the selected phones. A recorded announcement (Lockdown) plays a recording through them, on a loop if needed, and keeps playing after the caller hangs up until its cancel code is dialled.";

$text['label-paging_action_name']['en-us'] = "Name";
$text['label-paging_action_name']['en-gb'] = "Name";

$text['description-paging_action_name']['en-us'] = "Shown on the paged phones unless a caller ID name is set.";
$text['description-paging_action_name']['en-gb'] = "Shown on the paged phones unless a caller ID name is set.";

$text['label-paging_action_type']['en-us'] = "Type";
$text['label-paging_action_type']['en-gb'] = "Type";

$text['description-paging_action_type']['en-us'] = "Live page: the caller speaks and the page ends when they hang up. Recorded announcement: a recording is played and carries on without the caller.";
$text['description-paging_action_type']['en-gb'] = "Live page: the caller speaks and the page ends when they hang up. Recorded announcement: a recording is played and carries on without the caller.";

$text['option-broadcast']['en-us'] = "Recorded announcement";
$text['option-broadcast']['en-gb'] = "Recorded announcement";

$text['option-page']['en-us'] = "Live page";
$text['option-page']['en-gb'] = "Live page";

$text['label-paging_action_extension']['en-us'] = "Start code";
$text['label-paging_action_extension']['en-gb'] = "Start code";

$text['description-paging_action_extension']['en-us'] = "Code dialled to start this action, for example *90. Digits, * and # only.";
$text['description-paging_action_extension']['en-gb'] = "Code dialled to start this action, for example *90. Digits, * and # only.";

$text['label-paging_action_cancel_extension']['en-us'] = "Cancel code";
$text['label-paging_action_cancel_extension']['en-gb'] = "Cancel code";

$text['description-paging_action_cancel_extension']['en-us'] = "Code dialled from any phone to stop the announcement, for example *91. Strongly recommended when the recording loops.";
$text['description-paging_action_cancel_extension']['en-gb'] = "Code dialled from any phone to stop the announcement, for example *91. Strongly recommended when the recording loops.";

$text['label-paging_action_pin_number']['en-us'] = "PIN";
$text['label-paging_action_pin_number']['en-gb'] = "PIN";

$text['description-paging_action_pin_number']['en-us'] = "Optional. When set, callers must enter the PIN to start or cancel. Separate several PINs with commas.";
$text['description-paging_action_pin_number']['en-gb'] = "Optional. When set, callers must enter the PIN to start or cancel. Separate several PINs with commas.";

$text['label-destinations']['en-us'] = "Phones";
$text['label-destinations']['en-gb'] = "Phones";

$text['description-destinations']['en-us'] = "The phones that are paged.";
$text['description-destinations']['en-gb'] = "The phones that are paged.";

$text['option-selected']['en-us'] = "Selected extensions";
$text['option-selected']['en-gb'] = "Selected extensions";

$text['option-all_registered']['en-us'] = "Every registered extension";
$text['option-all_registered']['en-gb'] = "Every registered extension";

$text['description-all_registered']['en-us'] = "Every phone registered to this domain at the moment the code is dialled, including extensions added later.";
$text['description-all_registered']['en-gb'] = "Every phone registered to this domain at the moment the code is dialled, including extensions added later.";

$text['label-filter']['en-us'] = "Filter";
$text['label-filter']['en-gb'] = "Filter";

$text['button-select_all']['en-us'] = "All";
$text['button-select_all']['en-gb'] = "All";

$text['button-select_none']['en-us'] = "None";
$text['button-select_none']['en-gb'] = "None";

$text['label-additional_destinations']['en-us'] = "Other numbers or ranges";
$text['label-additional_destinations']['en-gb'] = "Other numbers or ranges";

$text['description-additional_destinations']['en-us'] = "Optional. Extra extensions or ranges separated by commas, for example 2000-2049.";
$text['description-additional_destinations']['en-gb'] = "Optional. Extra extensions or ranges separated by commas, for example 2000-2049.";

$text['label-selected_count']['en-us'] = "selected";
$text['label-selected_count']['en-gb'] = "selected";

$text['label-audio']['en-us'] = "Recording";
$text['label-audio']['en-gb'] = "Recording";

$text['description-audio']['en-us'] = "The recording that is played. Upload it under Recordings first.";
$text['description-audio']['en-gb'] = "The recording that is played. Upload it under Recordings first.";

$text['option-recording']['en-us'] = "From Recordings";
$text['option-recording']['en-gb'] = "From Recordings";

$text['option-file']['en-us'] = "File path";
$text['option-file']['en-gb'] = "File path";

$text['label-paging_action_file']['en-us'] = "File path";
$text['label-paging_action_file']['en-gb'] = "File path";

$text['description-paging_action_file']['en-us'] = "Full path of an audio file on the switch. No spaces.";
$text['description-paging_action_file']['en-gb'] = "Full path of an audio file on the switch. No spaces.";

$text['label-paging_action_loops']['en-us'] = "Loops";
$text['label-paging_action_loops']['en-gb'] = "Loops";

$text['description-paging_action_loops']['en-us'] = "How many times the recording is played. 0 repeats it until the cancel code is dialled or the time limit is reached.";
$text['description-paging_action_loops']['en-gb'] = "How many times the recording is played. 0 repeats it until the cancel code is dialled or the time limit is reached.";

$text['label-paging_action_timeout']['en-us'] = "Time limit";
$text['label-paging_action_timeout']['en-gb'] = "Time limit";

$text['description-paging_action_timeout']['en-us'] = "Seconds after which the action is stopped whatever else happens. 0 for no limit.";
$text['description-paging_action_timeout']['en-gb'] = "Seconds after which the action is stopped whatever else happens. 0 for no limit.";

$text['label-paging_action_persistent']['en-us'] = "Call back";
$text['label-paging_action_persistent']['en-gb'] = "Call back";

$text['description-paging_action_persistent']['en-us'] = "Keep calling phones that hang up, were busy or were not reachable, until the announcement ends.";
$text['description-paging_action_persistent']['en-gb'] = "Keep calling phones that hang up, were busy or were not reachable, until the announcement ends.";

$text['label-paging_action_skip_busy']['en-us'] = "Skip busy phones";
$text['label-paging_action_skip_busy']['en-gb'] = "Skip busy phones";

$text['description-paging_action_skip_busy']['en-us'] = "Leave phones that are on a call alone. When off, the phone decides what to do with the page.";
$text['description-paging_action_skip_busy']['en-gb'] = "Leave phones that are on a call alone. When off, the phone decides what to do with the page.";

$text['label-paging_action_caller_id_name']['en-us'] = "Caller ID Name";
$text['label-paging_action_caller_id_name']['en-gb'] = "Caller ID Name";

$text['description-paging_action_caller_id_name']['en-us'] = "Name shown on the paged phones. Defaults to the name of the action.";
$text['description-paging_action_caller_id_name']['en-gb'] = "Name shown on the paged phones. Defaults to the name of the action.";

$text['label-paging_action_caller_id_number']['en-us'] = "Caller ID Number";
$text['label-paging_action_caller_id_number']['en-gb'] = "Caller ID Number";

$text['description-paging_action_caller_id_number']['en-us'] = "Number shown on the paged phones. Leave empty so that a missed page cannot be called back.";
$text['description-paging_action_caller_id_number']['en-gb'] = "Number shown on the paged phones. Leave empty so that a missed page cannot be called back.";

$text['label-paging_action_enabled']['en-us'] = "Enabled";
$text['label-paging_action_enabled']['en-gb'] = "Enabled";

$text['description-paging_action_enabled']['en-us'] = "When disabled the codes do nothing.";
$text['description-paging_action_enabled']['en-gb'] = "When disabled the codes do nothing.";

$text['label-paging_action_description']['en-us'] = "Description";
$text['label-paging_action_description']['en-gb'] = "Description";

$text['description-paging_action_description']['en-us'] = "";
$text['description-paging_action_description']['en-gb'] = "";

$text['label-phones']['en-us'] = "phones";
$text['label-phones']['en-gb'] = "phones";

$text['label-all']['en-us'] = "All";
$text['label-all']['en-gb'] = "All";

$text['status-active']['en-us'] = "Active";
$text['status-active']['en-gb'] = "Active";

$text['status-stopping']['en-us'] = "Stopping";
$text['status-stopping']['en-gb'] = "Stopping";

$text['status-idle']['en-us'] = "Idle";
$text['status-idle']['en-gb'] = "Idle";

$text['status-stale']['en-us'] = "Not responding";
$text['status-stale']['en-gb'] = "Not responding";

$text['status-unknown']['en-us'] = "";
$text['status-unknown']['en-gb'] = "";

$text['confirm-start']['en-us'] = "Start the selected recorded announcements now? Every selected phone will be paged.";
$text['confirm-start']['en-gb'] = "Start the selected recorded announcements now? Every selected phone will be paged.";

$text['confirm-stop']['en-us'] = "Stop the selected actions now?";
$text['confirm-stop']['en-gb'] = "Stop the selected actions now?";

$text['message-started']['en-us'] = "Started";
$text['message-started']['en-gb'] = "Started";

$text['message-not_started']['en-us'] = "Nothing was started. Only enabled recorded announcements can be started here, and the switch must be reachable.";
$text['message-not_started']['en-gb'] = "Nothing was started. Only enabled recorded announcements can be started here, and the switch must be reachable.";

$text['message-stopped']['en-us'] = "Stop requested";
$text['message-stopped']['en-gb'] = "Stop requested";

$text['message-code_format']['en-us'] = "may only contain digits, * and #";
$text['message-code_format']['en-gb'] = "may only contain digits, * and #";

$text['message-code_in_use']['en-us'] = "is already used by another paging action";
$text['message-code_in_use']['en-gb'] = "is already used by another paging action";

$text['message-codes_equal']['en-us'] = "The start code and the cancel code must be different.";
$text['message-codes_equal']['en-gb'] = "The start code and the cancel code must be different.";

$text['message-audio_required']['en-us'] = "Choose the recording to play.";
$text['message-audio_required']['en-gb'] = "Choose the recording to play.";

$text['message-file_format']['en-us'] = "The path of the audio file may only contain letters, numbers and / . _ - @ + with no spaces. Rename the file and choose it again:";
$text['message-file_format']['en-gb'] = "The path of the audio file may only contain letters, numbers and / . _ - @ + with no spaces. Rename the file and choose it again:";

$text['message-destinations_required']['en-us'] = "Select at least one phone.";
$text['message-destinations_required']['en-gb'] = "Select at least one phone.";

$text['message-pin_format']['en-us'] = "Each PIN must be 2 to 20 digits.";
$text['message-pin_format']['en-gb'] = "Each PIN must be 2 to 20 digits.";

$text['message-conflict']['en-us'] = "Saved, but another dialplan in this domain uses the same number and may answer first:";
$text['message-conflict']['en-gb'] = "Saved, but another dialplan in this domain uses the same number and may answer first:";

$text['message-file_missing']['en-us'] = "Saved, but the audio file was not found on this server:";
$text['message-file_missing']['en-gb'] = "Saved, but the audio file was not found on this server:";

?>
