<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DataScrapingController extends Controller
{
    //
    public function index()
    {   
       
        
        $data = json_decode(file_get_contents('output.json'));
        return view('data-scraping', compact('data')); 
    }

    public function add_products(Request $request){
        $data = $request->all();
        $page_name = $data['txt'];
        $jsonTxt = Http::get("http://127.0.0.1:8001/".$data['txt']);
        // json_decode($jsonTxt, true);
        // $movies = Movie::all();
        Storage::put('facebookscrape_data.json', $jsonTxt);
        $data = json_decode(Storage::disk('local')->get('facebookscrape_data.json'),true);
        // return true;
        // echo "<pre>";
        // print_r($data);
        // die;
        $randomname = Str::random(4);
        Storage::disk('local')->put(''.$randomname."".'png', file_get_contents($data['posts']['image']));
        
        
        return view('data-scraping')->with(compact("data"));
    }
}
