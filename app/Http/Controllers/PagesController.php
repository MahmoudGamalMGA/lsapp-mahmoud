<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To LSAPP-Mahmoud,';
        $text = 'I hope you enjoy the application 😊';
        return view('pages.index', compact('title'))->with('text', $text);
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {
        $data = ['services' => ['Web Design', 'Programming']];
        return view('pages.services')->with($data);
    }
}