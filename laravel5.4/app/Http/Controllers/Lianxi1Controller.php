<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Lianxi1Controller extends Controller
{
    public function index()
    {
        return view('add');
    }
    public function add()
    {
        $data = $_POST;
        print_r($data);die;
    }
}
