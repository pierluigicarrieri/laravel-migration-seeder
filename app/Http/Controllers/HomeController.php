<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index() {

		$trains = Train::where('orario_di_partenza', '>', '12:00:00')->get();

		return view("home", [
			'trains'=>$trains
		]);
	}
}
