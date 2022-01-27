<?php
		// Group 0x0400
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0005] = array('US', ' 1', 'MACIDNumber');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0010] = array('UI', ' 1', 'MACCalculationTransferSyntaxUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0015] = array('CS', ' 1', 'MACAlgorithm');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0020] = array('AT', ' 1-n', 'DataElementsSigned');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0100] = array('UI', ' 1', 'DigitalSignatureUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0105] = array('DT', ' 1', 'DigitalSignatureDateTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0110] = array('CS', ' 1', 'CertificateType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0115] = array('OB', ' 1', 'CertificateOfSigner');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0120] = array('OB', ' 1', 'Signature');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0305] = array('CS', ' 1', 'CertifiedTimestampType');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0310] = array('OB', ' 1', 'CertifiedTimestamp');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0401] = array('SQ', ' 1', 'DigitalSignaturePurposeCodeSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0402] = array('SQ', ' 1', 'ReferencedDigitalSignatureSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0403] = array('SQ', ' 1', 'ReferencedSOPInstanceMACSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0404] = array('OB', ' 1', 'MAC');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0500] = array('SQ', ' 1', 'EncryptedAttributesSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0510] = array('UI', ' 1', 'EncryptedContentTransferSyntaxUID');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0520] = array('OB', ' 1', 'EncryptedContent');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0550] = array('SQ', ' 1', 'ModifiedAttributesSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0561] = array('SQ', ' 1', 'OriginalAttributesSequence');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0562] = array('DT', ' 1', 'AttributeModificationDateTime');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0563] = array('LO', ' 1', 'ModifyingSystem');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0564] = array('LO', ' 1', 'SourceOfPreviousValues');
		\Nanodocument\Nanodicom\Dictionary::$dict[0x0400][0x0565] = array('CS', ' 1', 'ReasonForTheAttributeModification');
