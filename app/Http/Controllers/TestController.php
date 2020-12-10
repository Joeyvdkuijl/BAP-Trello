<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function helloWorld(){
        return 'Hello world';
    }
    public function infoJoey(){
        return 'Info';
    }
    public function groenJoey(){
        return 'Groen';
    }
    public function meJoey(){
        return 'this is me';
    }
    public function welkomJoey(){
        return 'Welkom Joey';
    }
}
