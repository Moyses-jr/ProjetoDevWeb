<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }
    public function create() {
        return view('user.create');
    }
    public function createSave(Request $data) {
        $data = $data->toArray();
        $data['password'] = Hash::make($data['password']);

        // $user = User::create($data);

        // event(new Registered($user));

        Mail::raw('Este é um e-mail de teste.', function ($msg) {
            $msg->to('destinatario@email.com')->subject('Usuário criado com Sucesso');
        });

        return redirect()->route('user');
    }
    public function login(Request $data) {

        if (request()->isMethod('POST')) {
            $login = $data->validate([
                'name' => 'required',
                'password' => 'required',
            ]);
            // dd($login);

            if (Auth::attempt($login)) {
                return redirect()->route('estoque');
            } else {
                return redirect()->route('user.login')->with('erro', 'Usuário ou Senha Inválida');
            }
            // dd($data);
        }
        return view('user.login');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('user.login');

    }
}
?>
