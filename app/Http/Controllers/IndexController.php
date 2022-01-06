<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Partner;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::all()->where('Estado', 1);
        return view('welcome', compact('partner'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $index = Index::FindOrFail(1);
        return view('about.index', compact('index'));
    }


}