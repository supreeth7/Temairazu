<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Response;

class NewsController extends Controller
{
    public function showNews()
    {
        //Fetch the latest 5 news rows from MySQL database as per condition
        date_default_timezone_set("Asia/Kolkata");
        $pr_news = DB::table('News')->whereDate('created_at', '<=', date('Y-m-d'))->where('type', 'PR')->orderBy('id', 'desc')->take(5)->get();
        $ir_news = DB::table('News')->whereDate('created_at', '<=', date('Y-m-d'))->where('type', 'IR')->orderBy('id', 'desc')->take(5)->get();
        $has_new_ir = DB::table('News')->whereDate('created_at', date('Y-m-d'))->where('type', 'IR')->exists();
        $has_new_pr = DB::table('News')->whereDate('created_at', date('Y-m-d'))->where('type', 'PR')->exists();

        return view('internals.home', [
            'pr' => $pr_news,
            'ir' => $ir_news,
            'new_ir' => $has_new_ir,
            'new_pr' => $has_new_pr
        ]);
    }
}
