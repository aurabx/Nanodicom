<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class NanodicomCoreTest extends TestCase
{
    /**
     * @dataProvider provider
     */
	 public function testSummary($output, $expected)
    {
		$this->assertEquals($output, $expected);
    }
 
    /**
     */
    public function provider()
    {

        $resources = realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'resources';
		$samples_dir = $resources.DIRECTORY_SEPARATOR.'samples'.DIRECTORY_SEPARATOR;
		$output_dir  = $resources.DIRECTORY_SEPARATOR.'tests'.DIRECTORY_SEPARATOR;

		$files = array();
		if ($handle = opendir($samples_dir))
		{
			while (false !== ($file = readdir($handle))) 
			{
				if ($file != "." && $file != ".." && is_file($samples_dir.$file)) 
				{
					$files[] = $file;
				}
			}
			closedir($handle);
		}

		$data = array();
		foreach ($files as $file)
		{
			$filename = $samples_dir.$file;
			$dicom  = \Nanodocument\Nanodicom\Nanodicom::factory($filename);
			$data[] = array(
				$dicom->summary(),
				file_get_contents($output_dir.$file.'.summary.txt'),
			);
			unset($dicom);
		}
		
		return $data;
	}
		
}
