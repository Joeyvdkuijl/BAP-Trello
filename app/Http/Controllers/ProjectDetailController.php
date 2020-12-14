<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
public function showDetail($id, $jaar){
    return view('project.projectdetail', ['id'=> $id, 'jaar'=>$jaar]);
}
}
