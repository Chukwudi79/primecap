<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UserAuth extends Controller
{
    //
		public function idex() {
			event( new UserCreated("Your account has been sent"));
		}
}
