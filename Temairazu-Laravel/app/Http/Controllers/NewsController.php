<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;

class NewsController extends Controller
{
    public function showNews()
    {
        //Fetch the latest 5 news rows from MySQL database as per condition
        $pr_news = DB::table('News')->where('type', 'PR')->orderBy('id', 'desc')->take(5)->get();
        $ir_news = DB::table('News')->where('type', 'IR')->orderBy('id', 'desc')->take(5)->get();

        return view('internals.home', [
            'pr' => $pr_news,
            'ir' => $ir_news
        ]);
    }
}
