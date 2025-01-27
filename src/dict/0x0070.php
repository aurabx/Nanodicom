<?php
		// Group 0x0070
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0001] = array('SQ', ' 1', 'GraphicAnnotationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0002] = array('CS', ' 1', 'GraphicLayer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0003] = array('CS', ' 1', 'BoundingBoxAnnotationUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0004] = array('CS', ' 1', 'AnchorPointAnnotationUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0005] = array('CS', ' 1', 'GraphicAnnotationUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0006] = array('ST', ' 1', 'UnformattedTextValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0008] = array('SQ', ' 1', 'TextObjectSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0009] = array('SQ', ' 1', 'GraphicObjectSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0010] = array('FL', ' 2', 'BoundingBoxTopLeftHandCorner');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0011] = array('FL', ' 2', 'BoundingBoxBottomRightHandCorner');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0012] = array('CS', ' 1', 'BoundingBoxTextHorizontalJustification');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0014] = array('FL', ' 2', 'AnchorPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0015] = array('CS', ' 1', 'AnchorPointVisibility');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0020] = array('US', ' 1', 'GraphicDimensions');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0021] = array('US', ' 1', 'NumberOfGraphicPoints');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0022] = array('FL', ' 2-n', 'GraphicData');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0023] = array('CS', ' 1', 'GraphicType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0024] = array('CS', ' 1', 'GraphicFilled');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0040] = array('IS', ' 1 ', 'ImageRotationRetired', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0041] = array('CS', ' 1', 'ImageHorizontalFlip');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0042] = array('US', ' 1', 'ImageRotation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0050] = array('US', ' 2 ', 'DisplayedAreaTopLeftHandCornerTrial', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0051] = array('US', ' 2 ', 'DisplayedAreaBottomRightHandCornerTrial', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0052] = array('SL', ' 2', 'DisplayedAreaTopLeftHandCorner');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0053] = array('SL', ' 2', 'DisplayedAreaBottomRightHandCorner');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x005A] = array('SQ', ' 1', 'DisplayedAreaSelectionSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0060] = array('SQ', ' 1', 'GraphicLayerSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0062] = array('IS', ' 1', 'GraphicLayerOrder');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0066] = array('US', ' 1', 'GraphicLayerRecommendedDisplayGrayscaleValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0067] = array('US', ' 3 ', 'GraphicLayerRecommendedDisplayRGBValue', 'RET');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0068] = array('LO', ' 1', 'GraphicLayerDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0080] = array('CS', ' 1', 'ContentLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0081] = array('LO', ' 1', 'ContentDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0082] = array('DA', ' 1', 'PresentationCreationDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0083] = array('TM', ' 1', 'PresentationCreationTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0084] = array('PN', ' 1', 'ContentCreatorName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0086] = array('SQ', ' 1', 'ContentCreatorIdentificationCodeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0087] = array('SQ', ' 1', 'AlternateContentDescriptionSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0100] = array('CS', ' 1', 'PresentationSizeMode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0101] = array('DS', ' 2', 'PresentationPixelSpacing');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0102] = array('IS', ' 2', 'PresentationPixelAspectRatio');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0103] = array('FL', ' 1', 'PresentationPixelMagnificationRatio');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0306] = array('CS', ' 1', 'ShapeType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0308] = array('SQ', ' 1', 'RegistrationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0309] = array('SQ', ' 1', 'MatrixRegistrationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x030A] = array('SQ', ' 1', 'MatrixSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x030C] = array('CS', ' 1', 'FrameOfReferenceTransformationMatrixType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x030D] = array('SQ', ' 1', 'RegistrationTypeCodeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x030F] = array('ST', ' 1', 'FiducialDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0310] = array('SH', ' 1', 'FiducialIdentifier');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0311] = array('SQ', ' 1', 'FiducialIdentifierCodeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0312] = array('FD', ' 1', 'ContourUncertaintyRadius');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0314] = array('SQ', ' 1', 'UsedFiducialsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0318] = array('SQ', ' 1', 'GraphicCoordinatesDataSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x031A] = array('UI', ' 1', 'FiducialUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x031C] = array('SQ', ' 1', 'FiducialSetSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x031E] = array('SQ', ' 1', 'FiducialSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0401] = array('US', ' 3', 'GraphicLayerRecommendedDisplayCIELabValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0402] = array('SQ', ' 1', 'BlendingSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0403] = array('FL', ' 1', 'RelativeOpacity');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0404] = array('SQ', ' 1', 'ReferencedSpatialRegistrationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0070][0x0405] = array('CS', ' 1', 'BlendingPosition');
