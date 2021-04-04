<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function send() {
        $demo = new \stdClass();
        $demo -> receiver = 'Kuanysh';
        $demo -> sender = 'Kuanysh Sarsembek';
        Mail::to('190103348@stu.sdu.edu.kz')->send(new DemoMail($demo));
    }
}
