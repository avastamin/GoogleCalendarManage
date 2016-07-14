<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;


class googleController extends Controller
{
    //
		public function index() {
        
		$calendarId = Event::get()->first()->id;

        return view('welcome', compact('calendarId'));
        
    }
}
