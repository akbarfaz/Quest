<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use GuzzleHttp\Client;

class SchoolController extends Controller
{

    public function data()
    {
        $assessmentGroups = Config::get('data');
        // dd($assessmentGroups);

    return view('main', ['assessmentGroups' => $assessmentGroups]);
    }

    public function api()
    {
        $client = new Client();
        $url = "https://api.escuelajs.co/api/v1/products?offset=0&limit=10";


        $response = $client->request('GET', $url, [
        ]);

        $responseBody = json_decode($response->getBody());
        // dd($responseBody);

        return view('api', compact('responseBody'));

    }


}
