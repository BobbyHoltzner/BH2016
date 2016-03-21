<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use GuzzleHttp\Guzzle;
use GuzzleHttp\Client;

class SubscribeController extends Controller
{
    public function subscribe(Request $request){
      $apikey = 'a1b8c60902744427ee328fe7bb2c52c1-us12';
      $auth = base64_encode( 'user:'.$apikey );
      $listId = '5485199221';
      // $data = array(
      //      'apikey'        => $apikey,
      //      'email_address' => $request->email,
      //      'status'        => 'pending',
      //  );
      //  $json_data = json_encode($data);

       $client = new Client();
       $res = $client->request('POST', 'https://us12.api.mailchimp.com/3.0/lists/'.$listId.'/members',  [
          'headers' => [
            'Content-Type' => 'application/json',
            'Authorization'     => 'Basic '.$auth,
            'X-Foo'      => ['Bar', 'Baz']
          ]
          'form_params' => [
            'apikey'  => $apikey,
            'email_address' => $request->email_address,
            'status'  => 'pending',
         ],
       ]);
       return $res;

      die('Done!');

    }
}
