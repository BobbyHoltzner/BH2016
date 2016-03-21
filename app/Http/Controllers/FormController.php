<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use GuzzleHttp\Guzzle;
use GuzzleHttp\Client;

use App\FormSubmission;
use Mail;

class FormController extends Controller
{
    public function captcha(Request $request){
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $secret = '6LdhQBsTAAAAAFWx4vgfYPi3dKoSIo9c95L00MdD';
      $client = new Client();
      $body['secret'] = $secret;
      $body['response'] = $request->gRecaptchaResponse;
      $res = $client->request('POST', $url,  ['form_params' => [
        'secret' => $secret,
        'response' => $request->gRecaptchaResponse,
      ],
      ]);
      return $res;
    }

    public function store(Request $request){
      FormSubmission::create([
        'name'    => $request->name,
        'email'   => $request->email,
        'message' => $request->message,
      ]);
      $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
      ];
      Mail::send('emails.test', ['body' => $data], function ($message) {
          $message->from('me@bobbyholtzner.com', 'BH');
          $message->subject('Contact Form Submission from BobbyHoltzner.com');
          $message->to('me@bobbyholtzner.com');
      });
    }
}
