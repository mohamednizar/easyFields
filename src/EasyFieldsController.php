<?php

namespace Easyfields;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class EasyFieldsController extends Controller
{
    //
	public function index($timezone)
	{
		echo Carbon::now($timezone)->toDateTimeString();
	}
}
