<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function detail()
    {
        return view('detail');
    }
    public function list()
    {
        $Mahasiswa = Mahasiswa::all();
        //dd('$Mahasiswa');
        return view('list', compact('Mahasiswa'));
    }

    public function Dosen()
    {
        $Dosen = Dosen::all();
        //dd('$Dosen');
        return view('Dosen', compact('Dosen'));
    }

}
