<?php
		// Group 0x2100
		\Nanodicom\Dictionary::$dict[0x2100][0x0010] = array('SH', ' 1 ', 'PrintJobID', 'RET');
		\Nanodicom\Dictionary::$dict[0x2100][0x0020] = array('CS', ' 1', 'ExecutionStatus');
		\Nanodicom\Dictionary::$dict[0x2100][0x0030] = array('CS', ' 1', 'ExecutionStatusInfo');
		\Nanodicom\Dictionary::$dict[0x2100][0x0040] = array('DA', ' 1', 'CreationDate');
		\Nanodicom\Dictionary::$dict[0x2100][0x0050] = array('TM', ' 1', 'CreationTime');
		\Nanodicom\Dictionary::$dict[0x2100][0x0070] = array('AE', ' 1', 'Originator');
		\Nanodicom\Dictionary::$dict[0x2100][0x0140] = array('AE', ' 1 ', 'DestinationAE', 'RET');
		\Nanodicom\Dictionary::$dict[0x2100][0x0160] = array('SH', ' 1', 'OwnerID');
		\Nanodicom\Dictionary::$dict[0x2100][0x0170] = array('IS', ' 1', 'NumberOfFilms');
		\Nanodicom\Dictionary::$dict[0x2100][0x0500] = array('SQ', ' 1 ', 'ReferencedPrintJobSequencePullStoredPrint', 'RET');
