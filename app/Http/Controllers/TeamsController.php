<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamsController extends Controller
{
	public function show()
	{
		$teams = Team::get();		
		return view('about', ['teams' => $teams]);
	}
}
