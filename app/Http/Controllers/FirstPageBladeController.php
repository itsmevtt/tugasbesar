<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class FirstPageBladeController extends Controller {

    public function index() {

        return view("first-page.index");
    }
}