<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LandingController extends Controller
{
    public function web()
    {
        return view('landing.web')->with('title', 'Web Apaan Ini? - Tempo Cepat');
    }
}