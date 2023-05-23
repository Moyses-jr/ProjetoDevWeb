<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        return view('upload.index');
    }

    public function save(Request $form) {
        // dd($form->file('file'));
        $arquivo = $form -> file('file');
        $arquivo -> storeAs('public', $arquivo->getClientOriginalName());

        // return $arquivo->getClientOriginalName();
        // return $arquivo->getClientOriginalExtension();

        return 'Gravado';
    }
}
