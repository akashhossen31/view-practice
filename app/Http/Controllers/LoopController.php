<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    function loop(Request $request){
        $data=[
            ["name"=>"Akash","city"=>"Magura"],
            ["name"=>"Hasikul","city"=>"Foridpur"],
            ["name"=>"Albab","city"=>"Jessore"],
            ["name"=>"Arju","city"=>"Dhaka"]
        ];
        return view('loop',["users"=>$data]);
    }
}
