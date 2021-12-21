<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\company;
use App\models\car;
use App\models\Details;
class Cars extends Controller
{

    public function index(){
        $companys=company::all();
        return view('home',compact('companys'));
}

    public function cars($id){
        $carss=car::where('company_id',$id)->get();
        return view('car',compact('carss'));
    }

    public function details($id){
    $deta=Details::where('car_id','=',$id)->get();
    return view('details',compact('deta'));
}

}


