<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class InfoController extends Controller
{
    public function faq()
    {
        return view('info.faq')->with('title', 'F.A.Q - Tempo Cepat');
    }
    public function term()
    {
        return view('info.term')->with('title', 'Term of Use - Tempo Cepat');
    }
    public function policy()
    {
        return view('info.policy')->with('title', 'Privacy Policy - Tempo Cepat');
    }
    // ----------------------------
    public function laravelfilemanager()
    {
        return view('filemanager.views.index')
        ->with('title', 'Laravel Filemanager - Tempo Cepat');
    }
    // ----------------------------
}