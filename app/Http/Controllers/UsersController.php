<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index()
    {
        $userdb = new User;
        $users = $userdb->all();

        return view('users.index', [
            "users" => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {

        try {
            $userdb = new User;
            $user = $userdb->create([
                "name" => $request->input('name'),
                "email" => $request->input('email'),
                "password" => Hash::make($request->input('password'))
            ]);


            //se salvou no banco
            if ($user) {
                //faça isso
                return redirect()->route('users.index')->with([
                    "message" => "Usuário cadastrado com sucesso"
                ]);
            }
            //se não salvou
            else {
                //faça isso
                return redirect()->back()->with([
                    "messageError" => "Não foi possível cadastrar o usuário"
                ]);
            }
        } catch (Exception $exception) {
            if ($user) {
                $user->delete();
            }
            return redirect()->back()->with([
                "messageError" => "Não foi possível salvar no banco: " . $exception->getMessage()
            ]);
        }
    }

    public function show($idUser)
    {
        $userdb = new User;
        $user = $userdb->find($idUser);

        return view('users.show', [
            "user" => $user
        ]);
    }

    public function edit($idUser)
    {
        $userdb = new User;
        $user = $userdb->find($idUser);

        return view('users.edit', [
            "user" => $user
        ]);
    }

    public function update(Request $request, $idUser)
    {
        try {
        $userdb = new User;
        $user = $userdb->find($idUser);



        $user->update([
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => is_null($request->input('password')) ? $user->password : Hash::make($request->input('password'))
        ]);

        if($user){
            return redirect()->route('users.index')->with([
                "message" => "Usuário editado com sucesso"
            ]);
        }
        else {
            //faça isso
            return redirect()->route('users.index')->with([
                "messageError" => "Não foi possível alterar o usuário"
            ]);
        }
        } catch (Exception $exception) {

            return redirect()->back()->with([
                "messageError" => "Não foi possível alterar o usuário: " . $exception->getMessage()
            ]);
        }
    }

    public function delete($idUser)
    {
        try{
        $userdb = new User;
        $user = $userdb->find($idUser);

        if($user){
            $user->delete();

            return redirect()->route('users.index')->with([
                "message" => "Usuário excluido com sucesso"
            ]);
        }else{
            return redirect()->route('users.index')->with([
                "messageError" => "Não foi possivel encontrar o usuário"
            ]);
        }
      }catch (Exception $exception) {

        return redirect()->route('users.index')->with([
            "messageError" => "Não foi possível encontrar o usuário: " . $exception->getMessage()
        ]);
    }
    }

}
