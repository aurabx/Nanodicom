<?php
		// Group 0x3008
		\Nanodicom\Dictionary::$dict[0x3008][0x0010] = array('SQ', ' 1', 'MeasuredDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0012] = array('ST', ' 1', 'MeasuredDoseDescription');
		\Nanodicom\Dictionary::$dict[0x3008][0x0014] = array('CS', ' 1', 'MeasuredDoseType');
		\Nanodicom\Dictionary::$dict[0x3008][0x0016] = array('DS', ' 1', 'MeasuredDoseValue');
		\Nanodicom\Dictionary::$dict[0x3008][0x0020] = array('SQ', ' 1', 'TreatmentSessionBeamSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0021] = array('SQ', ' 1', 'TreatmentSessionIonBeamSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0022] = array('IS', ' 1', 'CurrentFractionNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0024] = array('DA', ' 1', 'TreatmentControlPointDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x0025] = array('TM', ' 1', 'TreatmentControlPointTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x002A] = array('CS', ' 1', 'TreatmentTerminationStatus');
		\Nanodicom\Dictionary::$dict[0x3008][0x002B] = array('SH', ' 1 ', 'TreatmentTerminationCode');
		\Nanodicom\Dictionary::$dict[0x3008][0x002C] = array('CS', ' 1', 'TreatmentVerificationStatus');
		\Nanodicom\Dictionary::$dict[0x3008][0x0030] = array('SQ', ' 1', 'ReferencedTreatmentRecordSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0032] = array('DS', ' 1', 'SpecifiedPrimaryMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0033] = array('DS', ' 1', 'SpecifiedSecondaryMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0036] = array('DS', ' 1', 'DeliveredPrimaryMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0037] = array('DS', ' 1', 'DeliveredSecondaryMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x003A] = array('DS', ' 1', 'SpecifiedTreatmentTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x003B] = array('DS', ' 1', 'DeliveredTreatmentTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x0040] = array('SQ', ' 1', 'ControlPointDeliverySequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0041] = array('SQ', ' 1', 'IonControlPointDeliverySequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0042] = array('DS', ' 1', 'SpecifiedMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0044] = array('DS', ' 1', 'DeliveredMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0045] = array('FL', ' 1', 'MetersetRateSet');
		\Nanodicom\Dictionary::$dict[0x3008][0x0046] = array('FL', ' 1', 'MetersetRateDelivered');
		\Nanodicom\Dictionary::$dict[0x3008][0x0047] = array('FL', ' 1-n', 'ScanSpotMetersetsDelivered');
		\Nanodicom\Dictionary::$dict[0x3008][0x0048] = array('DS', ' 1', 'DoseRateDelivered');
		\Nanodicom\Dictionary::$dict[0x3008][0x0050] = array('SQ', ' 1', 'TreatmentSummaryCalculatedDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0052] = array('DS', ' 1', 'CumulativeDoseToDoseReference');
		\Nanodicom\Dictionary::$dict[0x3008][0x0054] = array('DA', ' 1', 'FirstTreatmentDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x0056] = array('DA', ' 1', 'MostRecentTreatmentDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x005A] = array('IS', ' 1', 'NumberOfFractionsDelivered');
		\Nanodicom\Dictionary::$dict[0x3008][0x0060] = array('SQ', ' 1', 'OverrideSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0061] = array('AT', ' 1', 'ParameterSequencePointer');
		\Nanodicom\Dictionary::$dict[0x3008][0x0062] = array('AT', ' 1', 'OverrideParameterPointer');
		\Nanodicom\Dictionary::$dict[0x3008][0x0063] = array('IS', ' 1', 'ParameterItemIndex');
		\Nanodicom\Dictionary::$dict[0x3008][0x0064] = array('IS', ' 1', 'MeasuredDoseReferenceNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0065] = array('AT', ' 1', 'ParameterPointer');
		\Nanodicom\Dictionary::$dict[0x3008][0x0066] = array('ST', ' 1', 'OverrideReason');
		\Nanodicom\Dictionary::$dict[0x3008][0x0068] = array('SQ', ' 1', 'CorrectedParameterSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x006A] = array('FL', ' 1', 'CorrectionValue');
		\Nanodicom\Dictionary::$dict[0x3008][0x0070] = array('SQ', ' 1', 'CalculatedDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0072] = array('IS', ' 1', 'CalculatedDoseReferenceNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0074] = array('ST', ' 1', 'CalculatedDoseReferenceDescription');
		\Nanodicom\Dictionary::$dict[0x3008][0x0076] = array('DS', ' 1', 'CalculatedDoseReferenceDoseValue');
		\Nanodicom\Dictionary::$dict[0x3008][0x0078] = array('DS', ' 1', 'StartMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x007A] = array('DS', ' 1', 'EndMeterset');
		\Nanodicom\Dictionary::$dict[0x3008][0x0080] = array('SQ', ' 1', 'ReferencedMeasuredDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0082] = array('IS', ' 1', 'ReferencedMeasuredDoseReferenceNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0090] = array('SQ', ' 1', 'ReferencedCalculatedDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0092] = array('IS', ' 1', 'ReferencedCalculatedDoseReferenceNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x00A0] = array('SQ', ' 1', 'BeamLimitingDeviceLeafPairsSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00B0] = array('SQ', ' 1', 'RecordedWedgeSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00C0] = array('SQ', ' 1', 'RecordedCompensatorSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00D0] = array('SQ', ' 1', 'RecordedBlockSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00E0] = array('SQ', ' 1', 'TreatmentSummaryMeasuredDoseReferenceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00F0] = array('SQ', ' 1', 'RecordedSnoutSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00F2] = array('SQ', ' 1', 'RecordedRangeShifterSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00F4] = array('SQ', ' 1', 'RecordedLateralSpreadingDeviceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x00F6] = array('SQ', ' 1', 'RecordedRangeModulatorSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0100] = array('SQ', ' 1', 'RecordedSourceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0105] = array('LO', ' 1', 'SourceSerialNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0110] = array('SQ', ' 1', 'TreatmentSessionApplicationSetupSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0116] = array('CS', ' 1', 'ApplicationSetupCheck');
		\Nanodicom\Dictionary::$dict[0x3008][0x0120] = array('SQ', ' 1', 'RecordedBrachyAccessoryDeviceSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0122] = array('IS', ' 1', 'ReferencedBrachyAccessoryDeviceNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0130] = array('SQ', ' 1', 'RecordedChannelSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0132] = array('DS', ' 1', 'SpecifiedChannelTotalTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x0134] = array('DS', ' 1', 'DeliveredChannelTotalTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x0136] = array('IS', ' 1', 'SpecifiedNumberOfPulses');
		\Nanodicom\Dictionary::$dict[0x3008][0x0138] = array('IS', ' 1', 'DeliveredNumberOfPulses');
		\Nanodicom\Dictionary::$dict[0x3008][0x013A] = array('DS', ' 1', 'SpecifiedPulseRepetitionInterval');
		\Nanodicom\Dictionary::$dict[0x3008][0x013C] = array('DS', ' 1', 'DeliveredPulseRepetitionInterval');
		\Nanodicom\Dictionary::$dict[0x3008][0x0140] = array('SQ', ' 1', 'RecordedSourceApplicatorSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0142] = array('IS', ' 1', 'ReferencedSourceApplicatorNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0150] = array('SQ', ' 1', 'RecordedChannelShieldSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0152] = array('IS', ' 1', 'ReferencedChannelShieldNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0160] = array('SQ', ' 1', 'BrachyControlPointDeliveredSequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0162] = array('DA', ' 1', 'SafePositionExitDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x0164] = array('TM', ' 1', 'SafePositionExitTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x0166] = array('DA', ' 1', 'SafePositionReturnDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x0168] = array('TM', ' 1', 'SafePositionReturnTime');
		\Nanodicom\Dictionary::$dict[0x3008][0x0200] = array('CS', ' 1', 'CurrentTreatmentStatus');
		\Nanodicom\Dictionary::$dict[0x3008][0x0202] = array('ST', ' 1', 'TreatmentStatusComment');
		\Nanodicom\Dictionary::$dict[0x3008][0x0220] = array('SQ', ' 1', 'FractionGroupSummarySequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0223] = array('IS', ' 1', 'ReferencedFractionNumber');
		\Nanodicom\Dictionary::$dict[0x3008][0x0224] = array('CS', ' 1', 'FractionGroupType');
		\Nanodicom\Dictionary::$dict[0x3008][0x0230] = array('CS', ' 1', 'BeamStopperPosition');
		\Nanodicom\Dictionary::$dict[0x3008][0x0240] = array('SQ', ' 1', 'FractionStatusSummarySequence');
		\Nanodicom\Dictionary::$dict[0x3008][0x0250] = array('DA', ' 1', 'TreatmentDate');
		\Nanodicom\Dictionary::$dict[0x3008][0x0251] = array('TM', ' 1', 'TreatmentTime');
