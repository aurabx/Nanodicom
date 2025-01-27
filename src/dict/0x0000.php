<?php
		// Group 0x0000
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0000] = array('UL', '1', 'GroupLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0001] = array('UL', '1', 'CommandLengthToEnd');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0002] = array('UI', '1', 'AffectedSOPClassUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0003] = array('UI', '1', 'RequestedSOPClassUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0010] = array('CS', '1', 'CommandRecognitionCode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0100] = array('US', '1', 'CommandField');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0110] = array('US', '1', 'MessageID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0120] = array('US', '1', 'MessageIDBeingRespondedTo');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0200] = array('AE', '1', 'Initiator');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0300] = array('AE', '1', 'Receiver');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0400] = array('AE', '1', 'FindLocation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0600] = array('AE', '1', 'MoveDestination');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0700] = array('US', '1', 'Priority');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0800] = array('US', '1', 'DataSetType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0850] = array('US', '1', 'NumberOfMatches');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0860] = array('US', '1', 'ResponseSequenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0900] = array('US', '1', 'Status');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0901] = array('AT', '1-n', 'OffendingElement');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0902] = array('LO', '1', 'ErrorComment');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0903] = array('US', '1', 'ErrorID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x0904] = array('OT', '1-n', 'ErrorInformation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1000] = array('UI', '1', 'AffectedSOPInstanceUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1001] = array('UI', '1', 'RequestedSOPInstanceUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1002] = array('US', '1', 'EventTypeID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1003] = array('OT', '1-n', 'EventInformation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1005] = array('AT', '1-n', 'AttributeIdentifierList');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1007] = array('AT', '1-n', 'ModificationList');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1008] = array('US', '1', 'ActionTypeID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1009] = array('OT', '1-n', 'ActionInformation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1013] = array('UI', '1-n', 'SuccessfulSOPInstanceUIDList');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1014] = array('UI', '1-n', 'FailedSOPInstanceUIDList');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1015] = array('UI', '1-n', 'WarningSOPInstanceUIDList');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1020] = array('US', '1', 'NumberOfRemainingSuboperations');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1021] = array('US', '1', 'NumberOfCompletedSuboperations');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1022] = array('US', '1', 'NumberOfFailedSuboperations');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1023] = array('US', '1', 'NumberOfWarningSuboperations');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1030] = array('AE', '1', 'MoveOriginatorApplicationEntityTitle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x1031] = array('US', '1', 'MoveOriginatorMessageID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x4000] = array('AT', '1', 'DialogReceiver');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x4010] = array('AT', '1', 'TerminalType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5010] = array('SH', '1', 'MessageSetID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5020] = array('SH', '1', 'EndMessageSet');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5110] = array('AT', '1', 'DisplayFormat');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5120] = array('AT', '1', 'PagePositionID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5130] = array('CS', '1', 'TextFormatID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5140] = array('CS', '1', 'NormalReverse');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5150] = array('CS', '1', 'AddGrayScale');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5160] = array('CS', '1', 'Borders');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5170] = array('IS', '1', 'Copies');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5180] = array('CS', '1', 'OldMagnificationType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x5190] = array('CS', '1', 'Erase');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x51A0] = array('CS', '1', 'Print');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0000][0x51B0] = array('US', '1-n', 'Overlays');