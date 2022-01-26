<?php
		// Group 0x2020
		\Nanodicom\Dictionary::$dict[0x2020][0x0010] = array('US', ' 1', 'ImageBoxPosition');
		\Nanodicom\Dictionary::$dict[0x2020][0x0020] = array('CS', ' 1', 'Polarity');
		\Nanodicom\Dictionary::$dict[0x2020][0x0030] = array('DS', ' 1', 'RequestedImageSize');
		\Nanodicom\Dictionary::$dict[0x2020][0x0040] = array('CS', ' 1', 'RequestedDecimateCropBehavior');
		\Nanodicom\Dictionary::$dict[0x2020][0x0050] = array('CS', ' 1', 'RequestedResolutionID');
		\Nanodicom\Dictionary::$dict[0x2020][0x00A0] = array('CS', ' 1', 'RequestedImageSizeFlag');
		\Nanodicom\Dictionary::$dict[0x2020][0x00A2] = array('CS', ' 1', 'DecimateCropResult');
		\Nanodicom\Dictionary::$dict[0x2020][0x0110] = array('SQ', ' 1', 'BasicGrayscaleImageSequence');
		\Nanodicom\Dictionary::$dict[0x2020][0x0111] = array('SQ', ' 1', 'BasicColorImageSequence');
		\Nanodicom\Dictionary::$dict[0x2020][0x0130] = array('SQ', ' 1 ', 'ReferencedImageOverlayBoxSequence', 'RET');
		\Nanodicom\Dictionary::$dict[0x2020][0x0140] = array('SQ', ' 1 ', 'ReferencedVOILUTBoxSequence', 'RET');
