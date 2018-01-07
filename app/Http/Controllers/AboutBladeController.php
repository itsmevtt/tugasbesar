<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class AboutBladeController extends Controller {

    public function index() {

        return view("page-about.index");
    }

    public function team() {

        return view("page-about.team");
    }
}