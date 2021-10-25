<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    private $objUser;

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prontuario' => ['required', 'string', 'min:8'],
            'nivel' => ['required', 'int'],
            'status' => ['required', 'int'],
        ]);
    }

    public function __construct()
    {
        $this->objUser = new User();
        $this->middleware('auth');
    }

    public function index()
    {


        $data['user'] = User::all();
        return view('users.index')->with($data);

    }


    public function create()
    {
        $usuario=$this->objUser->all();
        return view(('users.create'), compact('users'));
    }

    public function store(Request $request)
    {
        $cad=$this->objUser->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request['password']),
            'prontuario'=>$request->prontuario,
            'nivel'=>$request->nivel,
            'status'=>$request->status
        ]);
        if($cad){return redirect('users');}
    }

    public function show(User $usuario)
    {
        return view('users.show')->with('users', $usuario);
    }

    public function edit(int $id)
    {
        $usuario=$this->objUser->find($id);
        $niveis_acessos = DB::table('users_niveis')->get();
        return view('users.edit', compact('users','niveis_acessos'));
    }

    public function update(Request $request, int $id)
    {
        $this->objUser->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password' => Hash::make($request['password']),
            'prontuario'=>$request->prontuario,
            'nivel'=>$request->nivel,
            'status'=>$request->status
        ]);
        return redirect('users');
    }
}
