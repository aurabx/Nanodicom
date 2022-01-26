<?php
		// Group 0x2000
		\Nanodicom\Dictionary::$dict[0x2000][0x0010] = array('IS', ' 1', 'NumberOfCopies');
		\Nanodicom\Dictionary::$dict[0x2000][0x001E] = array('SQ', ' 1', 'PrinterConfigurationSequence');
		\Nanodicom\Dictionary::$dict[0x2000][0x0020] = array('CS', ' 1', 'PrintPriority');
		\Nanodicom\Dictionary::$dict[0x2000][0x0030] = array('CS', ' 1', 'MediumType');
		\Nanodicom\Dictionary::$dict[0x2000][0x0040] = array('CS', ' 1', 'FilmDestination');
		\Nanodicom\Dictionary::$dict[0x2000][0x0050] = array('LO', ' 1', 'FilmSessionLabel');
		\Nanodicom\Dictionary::$dict[0x2000][0x0060] = array('IS', ' 1', 'MemoryAllocation');
		\Nanodicom\Dictionary::$dict[0x2000][0x0061] = array('IS', ' 1', 'MaximumMemoryAllocation');
		\Nanodicom\Dictionary::$dict[0x2000][0x0062] = array('CS', ' 1 ', 'ColorImagePrintingFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x0063] = array('CS', ' 1 ', 'CollationFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x0065] = array('CS', ' 1 ', 'AnnotationFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x0067] = array('CS', ' 1 ', 'ImageOverlayFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x0069] = array('CS', ' 1 ', 'PresentationLUTFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x006A] = array('CS', ' 1 ', 'ImageBoxPresentationLUTFlag', 'RET');
		\Nanodicom\Dictionary::$dict[0x2000][0x00A0] = array('US', ' 1', 'MemoryBitDepth');
		\Nanodicom\Dictionary::$dict[0x2000][0x00A1] = array('US', ' 1', 'PrintingBitDepth');
		\Nanodicom\Dictionary::$dict[0x2000][0x00A2] = array('SQ', ' 1', 'MediaInstalledSequence');
		\Nanodicom\Dictionary::$dict[0x2000][0x00A4] = array('SQ', ' 1', 'OtherMediaAvailableSequence');
		\Nanodicom\Dictionary::$dict[0x2000][0x00A8] = array('SQ', ' 1', 'SupportedImageDisplayFormatsSequence');
		\Nanodicom\Dictionary::$dict[0x2000][0x0500] = array('SQ', ' 1', 'ReferencedFilmBoxSequence');
		\Nanodicom\Dictionary::$dict[0x2000][0x0510] = array('SQ', ' 1 ', 'ReferencedStoredPrintSequence', 'RET');
