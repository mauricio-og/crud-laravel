<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index()
    {
        $clientsdb = new Clients;
        $clients = $clientsdb->all();

        return view('clients.index', [
            "clients" => $clients
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {

        $clientsdb = new Clients;
        $clients = $clientsdb->create([

            "nome" => $request->input('name'),
            "email" => $request->input('email'),
            "telefone" => $request->input('phone'),
            "data_nascimento" => $request->input('date'),
            "sexo" => $request->input('sexo'),
            "cep" => $request->input('cep'),
            "rua" => $request->input('rua'),
            "numero" => $request->input('numero'),
            "bairro" => $request->input('bairro'),
            "cidade" => $request->input('cidade'),
            "estado" => $request->input('estado'),
            "pais" => $request->input('pais'),
        ]);

        if ($clients) {

            return redirect()->route('clients.index')->with([
                "message" => "Cliente cadastrado com sucesso"
            ]);
        } else {

            redirect()->back()->with([
                "messageError" => "Não foi possível cadastar o cliente"
            ]);
        }
    }
}
