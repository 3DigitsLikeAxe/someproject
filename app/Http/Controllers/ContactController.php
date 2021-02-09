<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function store()
	{
		request()->validate([
		'name' => 'required',
		'email' => 'required|email',
		]);
		
		Mail::to(request('email'))
			->send(new \App\Mail\ContactMe());

		return redirect('/contact')
				->with('message', 'Email send');
	}
}
