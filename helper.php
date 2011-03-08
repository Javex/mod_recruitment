<?php
//don't allow other scripts to grab and execute our file
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

class ModRecruitmentHelper
{

    public function getRecruitment($params)
    {
		$parameters = explode("\n",$params);
		$recruitment = array();
		foreach($parameters as $i => $param)
		{
			$tmp = explode('=',$param);
			if($tmp[0]!='' && $tmp[1] == 1)
			{
				$item = explode('_',$tmp[0]);
				switch($item[0])
				{
					case 'dk':
						$recruitment[$i]["Class"] = "DK";
						break;
					default:
						$recruitment[$i]["Class"] = ucfirst($item[0]);
				}
				//echo $recruitment[$i]["Class"]."<br>";
				if(sizeof($item)==1)
				{
					$recruitment[$i]["Type"] = "DPS";
				}
				else
				{
					switch($item[1])
					{
						case 'off';
							$recruitment[$i]["Type"] = "DPS";
							break;
						case 'bear';
							$recruitment[$i]["Type"] = "Tank";
						default:
							$recruitment[$i]["Type"] = ucfirst($item[1]);
					}
				}
			}
		}
		return $recruitment;
	}
 
}


?>