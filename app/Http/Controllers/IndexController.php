<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data =  Member::with('getOneToMany')->get();
        return $data;
    }
}
