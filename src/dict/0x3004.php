<?php
		// Group 0x3004
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0001] = array('CS', ' 1', 'DVHType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0002] = array('CS', ' 1', 'DoseUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0004] = array('CS', ' 1', 'DoseType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0006] = array('LO', ' 1', 'DoseComment');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0008] = array('DS', ' 3', 'NormalizationPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x000A] = array('CS', ' 1', 'DoseSummationType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x000C] = array('DS', ' 2-n', 'GridFrameOffsetVector');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x000E] = array('DS', ' 1', 'DoseGridScaling');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0010] = array('SQ', ' 1', 'RTDoseROISequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0012] = array('DS', ' 1', 'DoseValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0014] = array('CS', ' 1-3', 'TissueHeterogeneityCorrection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0040] = array('DS', ' 3', 'DVHNormalizationPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0042] = array('DS', ' 1', 'DVHNormalizationDoseValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0050] = array('SQ', ' 1', 'DVHSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0052] = array('DS', ' 1', 'DVHDoseScaling');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0054] = array('CS', ' 1', 'DVHVolumeUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0056] = array('IS', ' 1', 'DVHNumberOfBins');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0058] = array('DS', ' 2-2n', 'DVHData');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0060] = array('SQ', ' 1', 'DVHReferencedROISequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0062] = array('CS', ' 1', 'DVHROIContributionType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0070] = array('DS', ' 1', 'DVHMinimumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0072] = array('DS', ' 1', 'DVHMaximumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3004][0x0074] = array('DS', ' 1', 'DVHMeanDose');
