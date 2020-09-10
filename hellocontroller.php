<?php

Namespace App\Http\Controllers;

Use Illuminate\Http\Request;

Class HelloController extends Controller
{
    // ini tampilan function index
    Public function index()
    {
        // echo “<h1>Hello World, Dari Controller !!</h1> “ ;
        $nama = “Lare Tafna Faruq”;
        Return view(‘hello.index’, compact(‘nama’));
    }
}
