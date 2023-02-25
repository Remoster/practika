<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentys extends Controller
{
    public function stud(){
        $p=\App\Models\Student::OrderBy('id','desc')->get();
        return view ('studenty92', ['prod'=>$p]);
    }
}
