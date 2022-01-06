<?php

namespace App\Http\Controllers;

use App\Models\Index;
use App\Models\Partner;
use App\Models\Data;
use App\Models\Staff;
use App\Models\Servicio;
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
        $data = Data::first();
        $partner = Partner::all()->where('Estado', 1);
        $servicios= Servicio::all()->where('state','1');
        return view('welcome', compact('partner', 'data','servicios'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutPublic()
    {
        $data = Data::first();
        return view('public_data.about', compact('data'));
    }

    public function staffPublic(){
        $staff = Staff::where('Estado','1')->get();
        return view('public_data.staff', compact('staff'));
    }




}
