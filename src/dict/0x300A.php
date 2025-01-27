<?php
		// Group 0x300A
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0002] = array('SH', ' 1', 'RTPlanLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0003] = array('LO', ' 1', 'RTPlanName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0004] = array('ST', ' 1', 'RTPlanDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0006] = array('DA', ' 1', 'RTPlanDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0007] = array('TM', ' 1', 'RTPlanTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0009] = array('LO', ' 1-n', 'TreatmentProtocols');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x000A] = array('CS', ' 1', 'PlanIntent');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x000B] = array('LO', ' 1-n', 'TreatmentSites');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x000C] = array('CS', ' 1', 'RTPlanGeometry');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x000E] = array('ST', ' 1', 'PrescriptionDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0010] = array('SQ', ' 1', 'DoseReferenceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0012] = array('IS', ' 1', 'DoseReferenceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0013] = array('UI', ' 1', 'DoseReferenceUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0014] = array('CS', ' 1', 'DoseReferenceStructureType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0015] = array('CS', ' 1', 'NominalBeamEnergyUnit');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0016] = array('LO', ' 1', 'DoseReferenceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0018] = array('DS', ' 3', 'DoseReferencePointCoordinates');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x001A] = array('DS', ' 1', 'NominalPriorDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0020] = array('CS', ' 1', 'DoseReferenceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0021] = array('DS', ' 1', 'ConstraintWeight');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0022] = array('DS', ' 1', 'DeliveryWarningDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0023] = array('DS', ' 1', 'DeliveryMaximumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0025] = array('DS', ' 1', 'TargetMinimumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0026] = array('DS', ' 1', 'TargetPrescriptionDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0027] = array('DS', ' 1', 'TargetMaximumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0028] = array('DS', ' 1', 'TargetUnderdoseVolumeFraction');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x002A] = array('DS', ' 1', 'OrganAtRiskFullVolumeDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x002B] = array('DS', ' 1', 'OrganAtRiskLimitDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x002C] = array('DS', ' 1', 'OrganAtRiskMaximumDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x002D] = array('DS', ' 1', 'OrganAtRiskOverdoseVolumeFraction');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0040] = array('SQ', ' 1', 'ToleranceTableSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0042] = array('IS', ' 1', 'ToleranceTableNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0043] = array('SH', ' 1', 'ToleranceTableLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0044] = array('DS', ' 1', 'GantryAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0046] = array('DS', ' 1', 'BeamLimitingDeviceAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0048] = array('SQ', ' 1', 'BeamLimitingDeviceToleranceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x004A] = array('DS', ' 1', 'BeamLimitingDevicePositionTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x004B] = array('FL', ' 1', 'SnoutPositionTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x004C] = array('DS', ' 1', 'PatientSupportAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x004E] = array('DS', ' 1', 'TableTopEccentricAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x004F] = array('FL', ' 1', 'TableTopPitchAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0050] = array('FL', ' 1', 'TableTopRollAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0051] = array('DS', ' 1', 'TableTopVerticalPositionTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0052] = array('DS', ' 1', 'TableTopLongitudinalPositionTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0053] = array('DS', ' 1', 'TableTopLateralPositionTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0055] = array('CS', ' 1', 'RTPlanRelationship');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0070] = array('SQ', ' 1', 'FractionGroupSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0071] = array('IS', ' 1', 'FractionGroupNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0072] = array('LO', ' 1', 'FractionGroupDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0078] = array('IS', ' 1', 'NumberOfFractionsPlanned');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0079] = array('IS', ' 1', 'NumberOfFractionPatternDigitsPerDay');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x007A] = array('IS', ' 1', 'RepeatFractionCycleLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x007B] = array('LT', ' 1', 'FractionPattern');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0080] = array('IS', ' 1', 'NumberOfBeams');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0082] = array('DS', ' 3', 'BeamDoseSpecificationPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0084] = array('DS', ' 1', 'BeamDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0086] = array('DS', ' 1', 'BeamMeterset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0088] = array('FL', ' 1', 'BeamDosePointDepth');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0089] = array('FL', ' 1', 'BeamDosePointEquivalentDepth');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x008A] = array('FL', ' 1', 'BeamDosePointSSD');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00A0] = array('IS', ' 1', 'NumberOfBrachyApplicationSetups');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00A2] = array('DS', ' 3', 'BrachyApplicationSetupDoseSpecificationPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00A4] = array('DS', ' 1', 'BrachyApplicationSetupDose');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B0] = array('SQ', ' 1', 'BeamSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B2] = array('SH', ' 1', 'TreatmentMachineName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B3] = array('CS', ' 1', 'PrimaryDosimeterUnit');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B4] = array('DS', ' 1', 'SourceAxisDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B6] = array('SQ', ' 1', 'BeamLimitingDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00B8] = array('CS', ' 1', 'RTBeamLimitingDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00BA] = array('DS', ' 1', 'SourceToBeamLimitingDeviceDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00BB] = array('FL', ' 1', 'IsocenterToBeamLimitingDeviceDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00BC] = array('IS', ' 1', 'NumberOfLeafJawPairs');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00BE] = array('DS', ' 3-n', 'LeafPositionBoundaries');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C0] = array('IS', ' 1', 'BeamNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C2] = array('LO', ' 1', 'BeamName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C3] = array('ST', ' 1', 'BeamDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C4] = array('CS', ' 1', 'BeamType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C6] = array('CS', ' 1', 'RadiationType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C7] = array('CS', ' 1', 'HighDoseTechniqueType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00C8] = array('IS', ' 1', 'ReferenceImageNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00CA] = array('SQ', ' 1', 'PlannedVerificationImageSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00CC] = array('LO', ' 1-n', 'ImagingDeviceSpecificAcquisitionParameters');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00CE] = array('CS', ' 1', 'TreatmentDeliveryType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D0] = array('IS', ' 1', 'NumberOfWedges');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D1] = array('SQ', ' 1', 'WedgeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D2] = array('IS', ' 1', 'WedgeNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D3] = array('CS', ' 1', 'WedgeType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D4] = array('SH', ' 1', 'WedgeID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D5] = array('IS', ' 1', 'WedgeAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D6] = array('DS', ' 1', 'WedgeFactor');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D7] = array('FL', ' 1', 'TotalWedgeTrayWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D8] = array('DS', ' 1', 'WedgeOrientation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00D9] = array('FL', ' 1', 'IsocenterToWedgeTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00DA] = array('DS', ' 1', 'SourceToWedgeTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00DB] = array('FL', ' 1', 'WedgeThinEdgePosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00DC] = array('SH', ' 1', 'BolusID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00DD] = array('ST', ' 1', 'BolusDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E0] = array('IS', ' 1', 'NumberOfCompensators');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E1] = array('SH', ' 1', 'MaterialID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E2] = array('DS', ' 1', 'TotalCompensatorTrayFactor');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E3] = array('SQ', ' 1', 'CompensatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E4] = array('IS', ' 1', 'CompensatorNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E5] = array('SH', ' 1', 'CompensatorID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E6] = array('DS', ' 1', 'SourceToCompensatorTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E7] = array('IS', ' 1', 'CompensatorRows');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E8] = array('IS', ' 1', 'CompensatorColumns');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00E9] = array('DS', ' 2', 'CompensatorPixelSpacing');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00EA] = array('DS', ' 2', 'CompensatorPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00EB] = array('DS', ' 1-n', 'CompensatorTransmissionData');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00EC] = array('DS', ' 1-n', 'CompensatorThicknessData');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00ED] = array('IS', ' 1', 'NumberOfBoli');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00EE] = array('CS', ' 1', 'CompensatorType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F0] = array('IS', ' 1', 'NumberOfBlocks');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F2] = array('DS', ' 1', 'TotalBlockTrayFactor');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F3] = array('FL', ' 1', 'TotalBlockTrayWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F4] = array('SQ', ' 1', 'BlockSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F5] = array('SH', ' 1', 'BlockTrayID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F6] = array('DS', ' 1', 'SourceToBlockTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F7] = array('FL', ' 1', 'IsocenterToBlockTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F8] = array('CS', ' 1', 'BlockType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00F9] = array('LO', ' 1', 'AccessoryCode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00FA] = array('CS', ' 1', 'BlockDivergence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00FB] = array('CS', ' 1', 'BlockMountingPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00FC] = array('IS', ' 1', 'BlockNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x00FE] = array('LO', ' 1', 'BlockName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0100] = array('DS', ' 1', 'BlockThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0102] = array('DS', ' 1', 'BlockTransmission');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0104] = array('IS', ' 1', 'BlockNumberOfPoints');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0106] = array('DS', ' 2-2n', 'BlockData');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0107] = array('SQ', ' 1', 'ApplicatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0108] = array('SH', ' 1', 'ApplicatorID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0109] = array('CS', ' 1', 'ApplicatorType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x010A] = array('LO', ' 1', 'ApplicatorDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x010C] = array('DS', ' 1', 'CumulativeDoseReferenceCoefficient');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x010E] = array('DS', ' 1', 'FinalCumulativeMetersetWeight');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0110] = array('IS', ' 1', 'NumberOfControlPoints');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0111] = array('SQ', ' 1', 'ControlPointSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0112] = array('IS', ' 1', 'ControlPointIndex');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0114] = array('DS', ' 1', 'NominalBeamEnergy');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0115] = array('DS', ' 1', 'DoseRateSet');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0116] = array('SQ', ' 1', 'WedgePositionSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0118] = array('CS', ' 1', 'WedgePosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x011A] = array('SQ', ' 1', 'BeamLimitingDevicePositionSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x011C] = array('DS', ' 2-2n', 'LeafJawPositions');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x011E] = array('DS', ' 1', 'GantryAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x011F] = array('CS', ' 1', 'GantryRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0120] = array('DS', ' 1', 'BeamLimitingDeviceAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0121] = array('CS', ' 1', 'BeamLimitingDeviceRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0122] = array('DS', ' 1', 'PatientSupportAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0123] = array('CS', ' 1', 'PatientSupportRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0124] = array('DS', ' 1', 'TableTopEccentricAxisDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0125] = array('DS', ' 1', 'TableTopEccentricAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0126] = array('CS', ' 1', 'TableTopEccentricRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0128] = array('DS', ' 1', 'TableTopVerticalPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0129] = array('DS', ' 1', 'TableTopLongitudinalPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x012A] = array('DS', ' 1', 'TableTopLateralPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x012C] = array('DS', ' 3', 'IsocenterPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x012E] = array('DS', ' 3', 'SurfaceEntryPoint');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0130] = array('DS', ' 1', 'SourceToSurfaceDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0134] = array('DS', ' 1', 'CumulativeMetersetWeight');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0140] = array('FL', ' 1', 'TableTopPitchAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0142] = array('CS', ' 1', 'TableTopPitchRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0144] = array('FL', ' 1', 'TableTopRollAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0146] = array('CS', ' 1', 'TableTopRollRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0148] = array('FL', ' 1', 'HeadFixationAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x014A] = array('FL', ' 1', 'GantryPitchAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x014C] = array('CS', ' 1', 'GantryPitchRotationDirection');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x014E] = array('FL', ' 1', 'GantryPitchAngleTolerance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0180] = array('SQ', ' 1', 'PatientSetupSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0182] = array('IS', ' 1', 'PatientSetupNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0183] = array('LO', ' 1', 'PatientSetupLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0184] = array('LO', ' 1', 'PatientAdditionalPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0190] = array('SQ', ' 1', 'FixationDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0192] = array('CS', ' 1', 'FixationDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0194] = array('SH', ' 1', 'FixationDeviceLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0196] = array('ST', ' 1', 'FixationDeviceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0198] = array('SH', ' 1', 'FixationDevicePosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0199] = array('FL', ' 1', 'FixationDevicePitchAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x019A] = array('FL', ' 1', 'FixationDeviceRollAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01A0] = array('SQ', ' 1', 'ShieldingDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01A2] = array('CS', ' 1', 'ShieldingDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01A4] = array('SH', ' 1', 'ShieldingDeviceLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01A6] = array('ST', ' 1', 'ShieldingDeviceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01A8] = array('SH', ' 1', 'ShieldingDevicePosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01B0] = array('CS', ' 1', 'SetupTechnique');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01B2] = array('ST', ' 1', 'SetupTechniqueDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01B4] = array('SQ', ' 1', 'SetupDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01B6] = array('CS', ' 1', 'SetupDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01B8] = array('SH', ' 1', 'SetupDeviceLabel');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01BA] = array('ST', ' 1', 'SetupDeviceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01BC] = array('DS', ' 1', 'SetupDeviceParameter');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01D0] = array('ST', ' 1', 'SetupReferenceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01D2] = array('DS', ' 1', 'TableTopVerticalSetupDisplacement');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01D4] = array('DS', ' 1', 'TableTopLongitudinalSetupDisplacement');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x01D6] = array('DS', ' 1', 'TableTopLateralSetupDisplacement');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0200] = array('CS', ' 1', 'BrachyTreatmentTechnique');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0202] = array('CS', ' 1', 'BrachyTreatmentType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0206] = array('SQ', ' 1', 'TreatmentMachineSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0210] = array('SQ', ' 1', 'SourceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0212] = array('IS', ' 1', 'SourceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0214] = array('CS', ' 1', 'SourceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0216] = array('LO', ' 1', 'SourceManufacturer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0218] = array('DS', ' 1', 'ActiveSourceDiameter');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x021A] = array('DS', ' 1', 'ActiveSourceLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0222] = array('DS', ' 1', 'SourceEncapsulationNominalThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0224] = array('DS', ' 1', 'SourceEncapsulationNominalTransmission');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0226] = array('LO', ' 1', 'SourceIsotopeName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0228] = array('DS', ' 1', 'SourceIsotopeHalfLife');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0229] = array('CS', ' 1', 'SourceStrengthUnits');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x022A] = array('DS', ' 1', 'ReferenceAirKermaRate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x022B] = array('DS', ' 1', 'SourceStrength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x022C] = array('DA', ' 1', 'SourceStrengthReferenceDate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x022E] = array('TM', ' 1', 'SourceStrengthReferenceTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0230] = array('SQ', ' 1', 'ApplicationSetupSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0232] = array('CS', ' 1', 'ApplicationSetupType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0234] = array('IS', ' 1', 'ApplicationSetupNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0236] = array('LO', ' 1', 'ApplicationSetupName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0238] = array('LO', ' 1', 'ApplicationSetupManufacturer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0240] = array('IS', ' 1', 'TemplateNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0242] = array('SH', ' 1', 'TemplateType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0244] = array('LO', ' 1', 'TemplateName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0250] = array('DS', ' 1', 'TotalReferenceAirKerma');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0260] = array('SQ', ' 1', 'BrachyAccessoryDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0262] = array('IS', ' 1', 'BrachyAccessoryDeviceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0263] = array('SH', ' 1', 'BrachyAccessoryDeviceID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0264] = array('CS', ' 1', 'BrachyAccessoryDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0266] = array('LO', ' 1', 'BrachyAccessoryDeviceName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x026A] = array('DS', ' 1', 'BrachyAccessoryDeviceNominalThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x026C] = array('DS', ' 1', 'BrachyAccessoryDeviceNominalTransmission');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0280] = array('SQ', ' 1', 'ChannelSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0282] = array('IS', ' 1', 'ChannelNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0284] = array('DS', ' 1', 'ChannelLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0286] = array('DS', ' 1', 'ChannelTotalTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0288] = array('CS', ' 1', 'SourceMovementType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x028A] = array('IS', ' 1', 'NumberOfPulses');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x028C] = array('DS', ' 1', 'PulseRepetitionInterval');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0290] = array('IS', ' 1', 'SourceApplicatorNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0291] = array('SH', ' 1', 'SourceApplicatorID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0292] = array('CS', ' 1', 'SourceApplicatorType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0294] = array('LO', ' 1', 'SourceApplicatorName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0296] = array('DS', ' 1', 'SourceApplicatorLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0298] = array('LO', ' 1', 'SourceApplicatorManufacturer');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x029C] = array('DS', ' 1', 'SourceApplicatorWallNominalThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x029E] = array('DS', ' 1', 'SourceApplicatorWallNominalTransmission');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02A0] = array('DS', ' 1', 'SourceApplicatorStepSize');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02A2] = array('IS', ' 1', 'TransferTubeNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02A4] = array('DS', ' 1', 'TransferTubeLength');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02B0] = array('SQ', ' 1', 'ChannelShieldSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02B2] = array('IS', ' 1', 'ChannelShieldNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02B3] = array('SH', ' 1', 'ChannelShieldID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02B4] = array('LO', ' 1', 'ChannelShieldName');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02B8] = array('DS', ' 1', 'ChannelShieldNominalThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02BA] = array('DS', ' 1', 'ChannelShieldNominalTransmission');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02C8] = array('DS', ' 1', 'FinalCumulativeTimeWeight');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02D0] = array('SQ', ' 1', 'BrachyControlPointSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02D2] = array('DS', ' 1', 'ControlPointRelativePosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02D4] = array('DS', ' 3', 'ControlPoint3DPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02D6] = array('DS', ' 1', 'CumulativeTimeWeight');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E0] = array('CS', ' 1', 'CompensatorDivergence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E1] = array('CS', ' 1', 'CompensatorMountingPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E2] = array('DS', ' 1-n', 'SourceToCompensatorDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E3] = array('FL', ' 1', 'TotalCompensatorTrayWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E4] = array('FL', ' 1', 'IsocenterToCompensatorTrayDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E5] = array('FL', ' 1', 'CompensatorColumnOffset');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E6] = array('FL', ' 1-n', 'IsocenterToCompensatorDistances');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E7] = array('FL', ' 1', 'CompensatorRelativeStoppingPowerRatio');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02E8] = array('FL', ' 1', 'CompensatorMillingToolDiameter');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02EA] = array('SQ', ' 1', 'IonRangeCompensatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x02EB] = array('LT', ' 1', 'CompensatorDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0302] = array('IS', ' 1', 'RadiationMassNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0304] = array('IS', ' 1', 'RadiationAtomicNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0306] = array('SS', ' 1', 'RadiationChargeState');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0308] = array('CS', ' 1', 'ScanMode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x030A] = array('FL', ' 2', 'VirtualSourceAxisDistances');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x030C] = array('SQ', ' 1', 'SnoutSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x030D] = array('FL', ' 1', 'SnoutPosition');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x030F] = array('SH', ' 1', 'SnoutID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0312] = array('IS', ' 1', 'NumberOfRangeShifters');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0314] = array('SQ', ' 1', 'RangeShifterSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0316] = array('IS', ' 1', 'RangeShifterNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0318] = array('SH', ' 1', 'RangeShifterID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0320] = array('CS', ' 1', 'RangeShifterType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0322] = array('LO', ' 1', 'RangeShifterDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0330] = array('IS', ' 1', 'NumberOfLateralSpreadingDevices');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0332] = array('SQ', ' 1', 'LateralSpreadingDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0334] = array('IS', ' 1', 'LateralSpreadingDeviceNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0336] = array('SH', ' 1', 'LateralSpreadingDeviceID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0338] = array('CS', ' 1', 'LateralSpreadingDeviceType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x033A] = array('LO', ' 1', 'LateralSpreadingDeviceDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x033C] = array('FL', ' 1', 'LateralSpreadingDeviceWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0340] = array('IS', ' 1', 'NumberOfRangeModulators');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0342] = array('SQ', ' 1', 'RangeModulatorSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0344] = array('IS', ' 1', 'RangeModulatorNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0346] = array('SH', ' 1', 'RangeModulatorID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0348] = array('CS', ' 1', 'RangeModulatorType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x034A] = array('LO', ' 1', 'RangeModulatorDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x034C] = array('SH', ' 1', 'BeamCurrentModulationID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0350] = array('CS', ' 1', 'PatientSupportType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0352] = array('SH', ' 1', 'PatientSupportID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0354] = array('LO', ' 1', 'PatientSupportAccessoryCode');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0356] = array('FL', ' 1', 'FixationLightAzimuthalAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0358] = array('FL', ' 1', 'FixationLightPolarAngle');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x035A] = array('FL', ' 1', 'MetersetRate');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0360] = array('SQ', ' 1', 'RangeShifterSettingsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0362] = array('LO', ' 1', 'RangeShifterSetting');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0364] = array('FL', ' 1', 'IsocenterToRangeShifterDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0366] = array('FL', ' 1', 'RangeShifterWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0370] = array('SQ', ' 1', 'LateralSpreadingDeviceSettingsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0372] = array('LO', ' 1', 'LateralSpreadingDeviceSetting');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0374] = array('FL', ' 1', 'IsocenterToLateralSpreadingDeviceDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0380] = array('SQ', ' 1', 'RangeModulatorSettingsSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0382] = array('FL', ' 1', 'RangeModulatorGatingStartValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0384] = array('FL', ' 1', 'RangeModulatorGatingStopValue');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0386] = array('FL', ' 1', 'RangeModulatorGatingStartWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0388] = array('FL', ' 1', 'RangeModulatorGatingStopWaterEquivalentThickness');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x038A] = array('FL', ' 1', 'IsocenterToRangeModulatorDistance');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0390] = array('SH', ' 1', 'ScanSpotTuneID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0392] = array('IS', ' 1', 'NumberOfScanSpotPositions');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0394] = array('FL', ' 1-n', 'ScanSpotPositionMap');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0396] = array('FL', ' 1-n', 'ScanSpotMetersetWeights');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0398] = array('FL', ' 2', 'ScanningSpotSize');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x039A] = array('IS', ' 1', 'NumberOfPaintings');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03A0] = array('SQ', ' 1', 'IonToleranceTableSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03A2] = array('SQ', ' 1', 'IonBeamSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03A4] = array('SQ', ' 1', 'IonBeamLimitingDeviceSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03A6] = array('SQ', ' 1', 'IonBlockSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03A8] = array('SQ', ' 1', 'IonControlPointSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03AA] = array('SQ', ' 1', 'IonWedgeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x03AC] = array('SQ', ' 1', 'IonWedgePositionSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0401] = array('SQ', ' 1', 'ReferencedSetupImageSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0402] = array('ST', ' 1', 'SetupImageComment');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0410] = array('SQ', ' 1', 'MotionSynchronizationSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0412] = array('FL', ' 3', 'ControlPointOrientation');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0420] = array('SQ', ' 1', 'GeneralAccessorySequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0421] = array('SH', ' 1', 'GeneralAccessoryID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0422] = array('ST', ' 1', 'GeneralAccessoryDescription');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0423] = array('CS', ' 1', 'GeneralAccessoryType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x300A][0x0424] = array('IS', ' 1', 'GeneralAccessoryNumber');
