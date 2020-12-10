<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formContact() {
        return view('form');
    }

    public function formHandle(Request $request) {
        return $request->input('name');
    }
}
