<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DataScrapingController extends Controller
{
    //
    public function index()
    {   
       
        
        $data = json_decode(file_get_contents('output.json'));
        return view('data-scraping', compact('data')); 
    }

    public function add_products(Request $request){

        Http::get("http://127.0.0.1:8001/scrape");
        $data = $request->all();
        // dd($data);
        // die;

        return redirect('/data-scraping');
    }
}
