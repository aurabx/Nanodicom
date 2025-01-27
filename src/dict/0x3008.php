<?php
		// Group 0x3008
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0010] = array('SQ', ' 1', 'MeasuredDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0012] = array('ST', ' 1', 'MeasuredDoseDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0014] = array('CS', ' 1', 'MeasuredDoseType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0016] = array('DS', ' 1', 'MeasuredDoseValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0020] = array('SQ', ' 1', 'TreatmentSessionBeamSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0021] = array('SQ', ' 1', 'TreatmentSessionIonBeamSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0022] = array('IS', ' 1', 'CurrentFractionNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0024] = array('DA', ' 1', 'TreatmentControlPointDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0025] = array('TM', ' 1', 'TreatmentControlPointTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x002A] = array('CS', ' 1', 'TreatmentTerminationStatus');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x002B] = array('SH', ' 1 ', 'TreatmentTerminationCode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x002C] = array('CS', ' 1', 'TreatmentVerificationStatus');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0030] = array('SQ', ' 1', 'ReferencedTreatmentRecordSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0032] = array('DS', ' 1', 'SpecifiedPrimaryMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0033] = array('DS', ' 1', 'SpecifiedSecondaryMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0036] = array('DS', ' 1', 'DeliveredPrimaryMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0037] = array('DS', ' 1', 'DeliveredSecondaryMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x003A] = array('DS', ' 1', 'SpecifiedTreatmentTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x003B] = array('DS', ' 1', 'DeliveredTreatmentTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0040] = array('SQ', ' 1', 'ControlPointDeliverySequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0041] = array('SQ', ' 1', 'IonControlPointDeliverySequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0042] = array('DS', ' 1', 'SpecifiedMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0044] = array('DS', ' 1', 'DeliveredMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0045] = array('FL', ' 1', 'MetersetRateSet');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0046] = array('FL', ' 1', 'MetersetRateDelivered');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0047] = array('FL', ' 1-n', 'ScanSpotMetersetsDelivered');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0048] = array('DS', ' 1', 'DoseRateDelivered');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0050] = array('SQ', ' 1', 'TreatmentSummaryCalculatedDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0052] = array('DS', ' 1', 'CumulativeDoseToDoseReference');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0054] = array('DA', ' 1', 'FirstTreatmentDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0056] = array('DA', ' 1', 'MostRecentTreatmentDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x005A] = array('IS', ' 1', 'NumberOfFractionsDelivered');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0060] = array('SQ', ' 1', 'OverrideSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0061] = array('AT', ' 1', 'ParameterSequencePointer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0062] = array('AT', ' 1', 'OverrideParameterPointer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0063] = array('IS', ' 1', 'ParameterItemIndex');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0064] = array('IS', ' 1', 'MeasuredDoseReferenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0065] = array('AT', ' 1', 'ParameterPointer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0066] = array('ST', ' 1', 'OverrideReason');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0068] = array('SQ', ' 1', 'CorrectedParameterSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x006A] = array('FL', ' 1', 'CorrectionValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0070] = array('SQ', ' 1', 'CalculatedDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0072] = array('IS', ' 1', 'CalculatedDoseReferenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0074] = array('ST', ' 1', 'CalculatedDoseReferenceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0076] = array('DS', ' 1', 'CalculatedDoseReferenceDoseValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0078] = array('DS', ' 1', 'StartMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x007A] = array('DS', ' 1', 'EndMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0080] = array('SQ', ' 1', 'ReferencedMeasuredDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0082] = array('IS', ' 1', 'ReferencedMeasuredDoseReferenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0090] = array('SQ', ' 1', 'ReferencedCalculatedDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0092] = array('IS', ' 1', 'ReferencedCalculatedDoseReferenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00A0] = array('SQ', ' 1', 'BeamLimitingDeviceLeafPairsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00B0] = array('SQ', ' 1', 'RecordedWedgeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00C0] = array('SQ', ' 1', 'RecordedCompensatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00D0] = array('SQ', ' 1', 'RecordedBlockSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00E0] = array('SQ', ' 1', 'TreatmentSummaryMeasuredDoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00F0] = array('SQ', ' 1', 'RecordedSnoutSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00F2] = array('SQ', ' 1', 'RecordedRangeShifterSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00F4] = array('SQ', ' 1', 'RecordedLateralSpreadingDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x00F6] = array('SQ', ' 1', 'RecordedRangeModulatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0100] = array('SQ', ' 1', 'RecordedSourceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0105] = array('LO', ' 1', 'SourceSerialNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0110] = array('SQ', ' 1', 'TreatmentSessionApplicationSetupSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0116] = array('CS', ' 1', 'ApplicationSetupCheck');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0120] = array('SQ', ' 1', 'RecordedBrachyAccessoryDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0122] = array('IS', ' 1', 'ReferencedBrachyAccessoryDeviceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0130] = array('SQ', ' 1', 'RecordedChannelSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0132] = array('DS', ' 1', 'SpecifiedChannelTotalTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0134] = array('DS', ' 1', 'DeliveredChannelTotalTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0136] = array('IS', ' 1', 'SpecifiedNumberOfPulses');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0138] = array('IS', ' 1', 'DeliveredNumberOfPulses');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x013A] = array('DS', ' 1', 'SpecifiedPulseRepetitionInterval');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x013C] = array('DS', ' 1', 'DeliveredPulseRepetitionInterval');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0140] = array('SQ', ' 1', 'RecordedSourceApplicatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0142] = array('IS', ' 1', 'ReferencedSourceApplicatorNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0150] = array('SQ', ' 1', 'RecordedChannelShieldSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0152] = array('IS', ' 1', 'ReferencedChannelShieldNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0160] = array('SQ', ' 1', 'BrachyControlPointDeliveredSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0162] = array('DA', ' 1', 'SafePositionExitDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0164] = array('TM', ' 1', 'SafePositionExitTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0166] = array('DA', ' 1', 'SafePositionReturnDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0168] = array('TM', ' 1', 'SafePositionReturnTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0200] = array('CS', ' 1', 'CurrentTreatmentStatus');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0202] = array('ST', ' 1', 'TreatmentStatusComment');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0220] = array('SQ', ' 1', 'FractionGroupSummarySequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0223] = array('IS', ' 1', 'ReferencedFractionNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0224] = array('CS', ' 1', 'FractionGroupType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0230] = array('CS', ' 1', 'BeamStopperPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0240] = array('SQ', ' 1', 'FractionStatusSummarySequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0250] = array('DA', ' 1', 'TreatmentDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x3008][0x0251] = array('TM', ' 1', 'TreatmentTime');
