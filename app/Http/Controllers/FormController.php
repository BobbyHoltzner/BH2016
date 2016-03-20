<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use GuzzleHttp\Guzzle;
use GuzzleHttp\Client;

class FormController extends Controller
{
    public function captcha(Request $request){
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $secret = '6LdhQBsTAAAAAFWx4vgfYPi3dKoSIo9c95L00MdD';
      dd($request);
    }
}
