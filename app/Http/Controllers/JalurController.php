<?php

namespace App\Http\Controllers;

use App\models\jalur;
use Illuminate\Http\Request;

class JalurController extends Controller
{
    public function index() 
    {
        return view('controllerjalur');
    }

    public function MenampilkanDataModel() 
    {
        $dataSekolah = Jalur::$sekolah;
        $dataKelas = Jalur::$kelas;
        return view('modeljalur', compact('dataSekolah','dataKelas'));
    }
}
