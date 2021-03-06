<?php

namespace VestindoCerto\Http\Controllers;

use Illuminate\Http\Request;
use VestindoCerto\User;
use Auth;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	return view('usuario.index');
    }

    public function perfil(){
    	return view('usuario.perfil');
    }

    public function update(Request $request){
        $usuario = User::find($request->id);
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $validate = $usuario->save();

        if ($validate) {
            return redirect('usuario/perfil')->with('status-sucess', 'Alterações realizadas com sucesso');
        }else{
            return redirect('usuario/perfil')->with('status-error', 'Algo deu errado, tente novamente.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
