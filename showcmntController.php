<?php

namespace App\Http\Controllers;
use App\commentbx;
use Illuminate\Http\Request;

class showcmntController extends Controller
{
    public function index()
    {
    	$user=commentbx::selectRaw("name,comments,created_at")->get();
    	$data=['user'=>$user];
    	return view('showcomment',$data);
    }
}
