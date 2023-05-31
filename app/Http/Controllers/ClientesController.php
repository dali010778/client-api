<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientesController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clients');
        $data = $response->json();
        return view('clientes', compact('data'));
    }

    public function create()
    {
        return view('cliente');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API', 'http://127.0.0.1');
        $response = Http::post($url.'/clients', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        return redirect()->route('clientes.index');
    }

    public function delete($idcliente)
    {
        $url = env('URL_SERVER_API','http://127.0.0.1');
       $response = Http::delete($url.'/clients/'.$idcliente); 
        return redirect()->route('clientes.index');
    }

    public function view($idcliente)
    {
        
        $url = env('URL_SERVER_API','http://127.0.0.1');
        $response = Http::get($url.'/clients/'.$idcliente);
        $cliente = $response->json();
        return view('clienteView',[
            'cliente' => $cliente
        ]);
        
    }
}
