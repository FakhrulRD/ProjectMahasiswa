<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $Mahasiswa = Mahasiswa::paginate(5);
        //dd('$Mahasiswa');
        return view('list', compact('Mahasiswa'));
    }

    
    public function create()
    {
        $org = Organization::all();
        return view('createmhs', compact ('org'));
    }

    public function store(Request $request)
    {
        $post = new mahasiswa;
        $post->organization_id = $request->organization_id;
        $post->npm = $request->npm;
        $post->nama = $request->nama;
        $post->slug = Str::slug($request->npm);
        $post->class = $request->class;
        $post->alamat = $request->alamat;

        $post->save();
        return redirect('/list');
    } 

    public function detaill (Mahasiswa $mahasiswa)
    {
        // dd($mahasiswa);
        $org = Organization::all();
        return view('editmhs', compact('mahasiswa', 'org'));
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mhs = request()->all();
        $mahasiswa->update($mhs);
        return back();
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('/list');
    }

    public function Dosen()
    {
        $Dosen = Dosen::paginate(5);
        //dd('$Dosen');
        return view('Dosen', compact('Dosen'));
    }

    public function membuat()
    {
        $org = Matkul::all();
        return view('membuatdosen', compact('org'));
    }

    public function gudang(Request $request)
    {
        $post = new dosen;
        $post->matkul_id = $request->matkul_id;
        $post->nip = $request->nip;
        $post->nama = $request->nama;
        $post->slug = Str::slug($request->nip);
        $post->alamat = $request->alamat;

        $post->save();
        return redirect('/Dosen');
    }

    public function rincian(Dosen $Dosen)
    {
        $org = Matkul::all();
        return view('mengubahdsn', compact('Dosen', 'org'));
    }

    public function updating(Dosen $dosen)
    {
        $dsn = request()->all();
        $dosen->update($dsn);
        return back();
    }

    public function deletee(Dosen $Dosen)
    {
        $Dosen->deletee();
        return redirect('/Dosen');
    }
}