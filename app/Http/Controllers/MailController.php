<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
    	$objDemo = new \stdClass();

    	$objDemo->demo_one = 'Demo One Value';
    	$objDemo->demo_two = 'Demo Two Value';
    	$objDemo->sender = '190103057@stu.sdu.edu.kz';
    	$objDemo->receiver='abylay.omar@sdu.edu.kz';

    	Mail::to('abylay.omar@sdu.edu.kz')->send(new DemoEmail($objDemo));


    }
}
