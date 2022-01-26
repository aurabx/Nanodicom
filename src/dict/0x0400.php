<?php
		// Group 0x0400
		\Nanodicom\Dictionary::$dict[0x0400][0x0005] = array('US', ' 1', 'MACIDNumber');
		\Nanodicom\Dictionary::$dict[0x0400][0x0010] = array('UI', ' 1', 'MACCalculationTransferSyntaxUID');
		\Nanodicom\Dictionary::$dict[0x0400][0x0015] = array('CS', ' 1', 'MACAlgorithm');
		\Nanodicom\Dictionary::$dict[0x0400][0x0020] = array('AT', ' 1-n', 'DataElementsSigned');
		\Nanodicom\Dictionary::$dict[0x0400][0x0100] = array('UI', ' 1', 'DigitalSignatureUID');
		\Nanodicom\Dictionary::$dict[0x0400][0x0105] = array('DT', ' 1', 'DigitalSignatureDateTime');
		\Nanodicom\Dictionary::$dict[0x0400][0x0110] = array('CS', ' 1', 'CertificateType');
		\Nanodicom\Dictionary::$dict[0x0400][0x0115] = array('OB', ' 1', 'CertificateOfSigner');
		\Nanodicom\Dictionary::$dict[0x0400][0x0120] = array('OB', ' 1', 'Signature');
		\Nanodicom\Dictionary::$dict[0x0400][0x0305] = array('CS', ' 1', 'CertifiedTimestampType');
		\Nanodicom\Dictionary::$dict[0x0400][0x0310] = array('OB', ' 1', 'CertifiedTimestamp');
		\Nanodicom\Dictionary::$dict[0x0400][0x0401] = array('SQ', ' 1', 'DigitalSignaturePurposeCodeSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0402] = array('SQ', ' 1', 'ReferencedDigitalSignatureSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0403] = array('SQ', ' 1', 'ReferencedSOPInstanceMACSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0404] = array('OB', ' 1', 'MAC');
		\Nanodicom\Dictionary::$dict[0x0400][0x0500] = array('SQ', ' 1', 'EncryptedAttributesSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0510] = array('UI', ' 1', 'EncryptedContentTransferSyntaxUID');
		\Nanodicom\Dictionary::$dict[0x0400][0x0520] = array('OB', ' 1', 'EncryptedContent');
		\Nanodicom\Dictionary::$dict[0x0400][0x0550] = array('SQ', ' 1', 'ModifiedAttributesSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0561] = array('SQ', ' 1', 'OriginalAttributesSequence');
		\Nanodicom\Dictionary::$dict[0x0400][0x0562] = array('DT', ' 1', 'AttributeModificationDateTime');
		\Nanodicom\Dictionary::$dict[0x0400][0x0563] = array('LO', ' 1', 'ModifyingSystem');
		\Nanodicom\Dictionary::$dict[0x0400][0x0564] = array('LO', ' 1', 'SourceOfPreviousValues');
		\Nanodicom\Dictionary::$dict[0x0400][0x0565] = array('CS', ' 1', 'ReasonForTheAttributeModification');
