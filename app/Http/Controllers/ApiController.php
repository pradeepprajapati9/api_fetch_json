<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        $post = Http::get("https://jsonplaceholder.typicode.com/posts")->json();
        $colletion = collect($post);
        //dump($colletion);// showing
        $useruniqueID = $colletion->unique("userId");
        //if you want to count 
        $countuserID = $colletion->countBy("userId");
        // dd($countuserID);

        //show your data from html  blade page
        // get id and count id
        return view("index", [
            "useruniqueIDs" => $useruniqueID,
            "countuserID" => $countuserID,
        ]);
    }

    public function show($id)
    {
        $post = Http::get("https://jsonplaceholder.typicode.com/posts")->json();
        $collection = collect($post)->where("userId", $id);
        // dd($collection);

        // now showing  alldata
        return view("show", [
            "collections" => $collection,
            "id" => $id
        ]);
    }
}
