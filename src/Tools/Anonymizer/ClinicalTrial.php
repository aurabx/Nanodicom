<?php
/**
 * tools/Anonymizer/ClinicalTrial.php file
 *
 * @package    Nanodicom
 * @category   Tools
 * @author     Nano Documet <nanodocumet@gmail.com>
 * @version	   1.3.1
 * @copyright  (c) 2010-2011
 * @license    http://www.opensource.org/licenses/mit-license.php MIT-license
 */
namespace Nanodicom\Tools\Anonymizer;


use Nanodicom\Tools\Anonymizer;

/**
 * \Nanodicom\Anonymizer_Clinicaltrial class.
 *
 * Extends \Nanodicom\Anonymizer. Use this to extend specific tools. The idea is to have it
 * specific to certain functionality. In this case, this tool it is an Anonymizer
 * specific for Clinical Trials.
 * @package    Nanodicom
 * @category   Tools
 * @author     Nano Documet <nanodocumet@gmail.com>
 * @version	   1.3.1
 * @copyright  (c) 2010-2011
 * @license    http://www.opensource.org/licenses/mit-license.php MIT-license
 */

class ClinicalTrial extends Anonymizer {

	/**
	 * Anonymizes the dataset
	 *
	 * @param	mixed	 NULL or an array to overwrite defaults
	 * @param	integer	 the mode
	 * @return	string	 the anonymized dataset
	 */
	public function anonymize($tags = NULL, $map = NULL, $mode = self::RETURN_BLOB)
	{
		//Overload the function here if you want
	}
	
}
