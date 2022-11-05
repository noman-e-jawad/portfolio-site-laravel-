<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function AddPage(Request $request){
        $page = Page::where('page_title','home')->get();
        $numrow = count($page);
        if($numrow>0){
            return view('admin.home.addpage',['page'=>$page]);
        }
        else{
            $page = new Page();
            return view('admin.home.addpage',['page'=>$page]);
        }
    }
}
