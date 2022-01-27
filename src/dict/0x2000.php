<?php
		// Group 0x2000
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0010] = array('IS', ' 1', 'NumberOfCopies');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x001E] = array('SQ', ' 1', 'PrinterConfigurationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0020] = array('CS', ' 1', 'PrintPriority');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0030] = array('CS', ' 1', 'MediumType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0040] = array('CS', ' 1', 'FilmDestination');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0050] = array('LO', ' 1', 'FilmSessionLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0060] = array('IS', ' 1', 'MemoryAllocation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0061] = array('IS', ' 1', 'MaximumMemoryAllocation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0062] = array('CS', ' 1 ', 'ColorImagePrintingFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0063] = array('CS', ' 1 ', 'CollationFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0065] = array('CS', ' 1 ', 'AnnotationFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0067] = array('CS', ' 1 ', 'ImageOverlayFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0069] = array('CS', ' 1 ', 'PresentationLUTFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x006A] = array('CS', ' 1 ', 'ImageBoxPresentationLUTFlag', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x00A0] = array('US', ' 1', 'MemoryBitDepth');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x00A1] = array('US', ' 1', 'PrintingBitDepth');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x00A2] = array('SQ', ' 1', 'MediaInstalledSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x00A4] = array('SQ', ' 1', 'OtherMediaAvailableSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x00A8] = array('SQ', ' 1', 'SupportedImageDisplayFormatsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0500] = array('SQ', ' 1', 'ReferencedFilmBoxSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x2000][0x0510] = array('SQ', ' 1 ', 'ReferencedStoredPrintSequence', 'RET');
