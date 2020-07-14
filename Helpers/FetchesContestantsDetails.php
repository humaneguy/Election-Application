<?php
namespace Helpers;
declare(strict_type = 1);

trait FetchesContestantsDetails {
	

	public function fetch($position_id)
	{
		return \App\Contestant::where('vying_for', $position_id)->get();
	}

	public static function greet()
	{
		dd("Hey");
	}

	public static function mapVotesToContestants($votes, $contestants) : array
	{
		if (count ($votes) === count ($contestants))
		{
			for ($i = 0; $i < count($contestants); $i++)
			{
				$contestants[$i]->no_of_votes = $votes[$i];
			}
		}
		return $contestants;
	}
}