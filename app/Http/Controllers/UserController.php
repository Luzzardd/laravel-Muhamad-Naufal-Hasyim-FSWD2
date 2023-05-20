<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Util\Html5EntityDecoder;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}
