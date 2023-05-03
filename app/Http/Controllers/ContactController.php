<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

  public function index() {
    return view('contact');
  }

  public function store(Request $request) {
    $validatedContact = $request->validate([
        "email" => "required|email:dns",
        "nama" => "required|min:10|max:255",
        "nohp" => "required|numeric",
        "pesan" => "required"
    ],
    [
        "email.required" => "Tolong diisi kolom emailnya ya",
        "nama.required" => "Eh nama kamu siapa ya, isi dong :)",
        "nohp.required" => "Minta nomor kamu ya, biar kita bisa komunikasi",      
        "pesan.required" => "Kirim pesan kesan kamu disini ya, aku butuh lho",      
    ]);

    return redirect('/contact')->with('success', 'Makasiih :) Data kamu sudah terkirim yaa');
  }
}