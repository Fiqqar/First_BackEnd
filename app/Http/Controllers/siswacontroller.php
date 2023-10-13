<?php

namespace App\Http\Controllers;
use App\Models\siswa;

use Illuminate\Http\Request;

class siswacontroller extends Controller
{
    public function index() {
        $data['siswas']=siswa::orderBy('id','desc')->paginate(5);
        return view('siswa.index', $data);
    }
}
