<?php

namespace App\Http\Controllers;

use Request;
use DB;
use Session;
use Illuminate\Support\Facades\Http;

class DataScrapingController extends Controller
{
    //
    public function index()
    {   
        Http::get("http://127.0.0.1:8001/scrape");
        
        $data = json_decode(file_get_contents('output.json'));
        return view('data-scraping', compact('data')); 
    }
}
