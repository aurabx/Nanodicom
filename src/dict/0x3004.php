<?php
		// Group 0x3004
		\Nanodicom\Dictionary::$dict[0x3004][0x0001] = array('CS', ' 1', 'DVHType');
		\Nanodicom\Dictionary::$dict[0x3004][0x0002] = array('CS', ' 1', 'DoseUnits');
		\Nanodicom\Dictionary::$dict[0x3004][0x0004] = array('CS', ' 1', 'DoseType');
		\Nanodicom\Dictionary::$dict[0x3004][0x0006] = array('LO', ' 1', 'DoseComment');
		\Nanodicom\Dictionary::$dict[0x3004][0x0008] = array('DS', ' 3', 'NormalizationPoint');
		\Nanodicom\Dictionary::$dict[0x3004][0x000A] = array('CS', ' 1', 'DoseSummationType');
		\Nanodicom\Dictionary::$dict[0x3004][0x000C] = array('DS', ' 2-n', 'GridFrameOffsetVector');
		\Nanodicom\Dictionary::$dict[0x3004][0x000E] = array('DS', ' 1', 'DoseGridScaling');
		\Nanodicom\Dictionary::$dict[0x3004][0x0010] = array('SQ', ' 1', 'RTDoseROISequence');
		\Nanodicom\Dictionary::$dict[0x3004][0x0012] = array('DS', ' 1', 'DoseValue');
		\Nanodicom\Dictionary::$dict[0x3004][0x0014] = array('CS', ' 1-3', 'TissueHeterogeneityCorrection');
		\Nanodicom\Dictionary::$dict[0x3004][0x0040] = array('DS', ' 3', 'DVHNormalizationPoint');
		\Nanodicom\Dictionary::$dict[0x3004][0x0042] = array('DS', ' 1', 'DVHNormalizationDoseValue');
		\Nanodicom\Dictionary::$dict[0x3004][0x0050] = array('SQ', ' 1', 'DVHSequence');
		\Nanodicom\Dictionary::$dict[0x3004][0x0052] = array('DS', ' 1', 'DVHDoseScaling');
		\Nanodicom\Dictionary::$dict[0x3004][0x0054] = array('CS', ' 1', 'DVHVolumeUnits');
		\Nanodicom\Dictionary::$dict[0x3004][0x0056] = array('IS', ' 1', 'DVHNumberOfBins');
		\Nanodicom\Dictionary::$dict[0x3004][0x0058] = array('DS', ' 2-2n', 'DVHData');
		\Nanodicom\Dictionary::$dict[0x3004][0x0060] = array('SQ', ' 1', 'DVHReferencedROISequence');
		\Nanodicom\Dictionary::$dict[0x3004][0x0062] = array('CS', ' 1', 'DVHROIContributionType');
		\Nanodicom\Dictionary::$dict[0x3004][0x0070] = array('DS', ' 1', 'DVHMinimumDose');
		\Nanodicom\Dictionary::$dict[0x3004][0x0072] = array('DS', ' 1', 'DVHMaximumDose');
		\Nanodicom\Dictionary::$dict[0x3004][0x0074] = array('DS', ' 1', 'DVHMeanDose');
