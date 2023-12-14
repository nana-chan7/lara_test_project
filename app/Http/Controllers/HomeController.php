<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function search(Request $request){
        $data = [
            'keyword' => $request->keyword,
        ];
        return view('search', $data);
    }
}
