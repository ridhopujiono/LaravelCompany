<?php

namespace App\Http\Controllers;

use App\Models\Ceo;
use App\Models\Empolyee;
use Illuminate\Http\Request;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        $ceo = Ceo::all();
        $employee = Empolyee::all();
        return view('utama.index', [
            "ceo" => $ceo,
            "employee" => $employee
        ]);
    }
}
