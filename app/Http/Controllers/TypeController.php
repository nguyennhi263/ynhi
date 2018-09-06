<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    //
    public function view($id){
        $type_item = Type::where('id_type',$id)->get()->first();
        return view('type',compact('type_item'));
    }
}
