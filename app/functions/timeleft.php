<?php 
namespace functions;
class timeleft
{
	public static function index($todate)
	{
		$diff = $todate - time();
		
		$days = floor($diff/(60*60*24));

		$hours = floor(($diff-$days*60*60*24)/(60*60));
		
		$minute = floor( 
			( ($diff - ($days*60*60*24)) - ($hours*60*60) ) / 60
		);

		$second = floor( 
			( ($diff - ($days*60*60*24)) - ($hours*60*60) - ($minute*60) )
		);

		$out = sprintf(
			"<span>%s</span> დღე <span>%s</span> საათი <span>%s</span> წუთი <span>%s</span> წამი",
			$days, 
			$hours,
			$minute,
			$second
		);

		return $out;
	}
}