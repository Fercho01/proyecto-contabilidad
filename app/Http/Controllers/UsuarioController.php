<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    //
    public function index(){
        return view('usuarios.lista');
    }
    public  function create(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'ci' => 'required',
        ]);
        $request['empresaId'] = Auth::user()->id;
        $request['rolId']=2;
        $request['password']=Hash::make($request['password']);
        User::create($request->all());
        return redirect()->back()->with('info','Creado con éxito');

    }
    public function registrar(){
        return view('usuarios.crear');
    }
    public function rol(Request $request,$id){
        User::where('id',$id)->update($request->all());
        return redirect()->back();
    }
}
