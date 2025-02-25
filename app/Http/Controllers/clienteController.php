<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller
{
    public function obtenerTodo(){
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    public function crearCliente(){
        return view('crear-cliente');
    }

    public function guardarCliente(Request $request){
        //Validación de que el dni del cliente ya exista
        $clientes = Cliente::all();
        foreach ($clientes as $cliente){
            if($request->dni == $cliente->dni){
                return "El Cliente ya existe.";
            }
        }
        $nvoCliente = new Cliente();
        $nvoCliente->nombre = $request->nombre;
        $nvoCliente->apellido = $request->apellido;
        $nvoCliente->telefono = $request->telefono;
        $nvoCliente->correo = $request->correo;
        $nvoCliente->save();
        return to_route('clientes');
    }

    public function verCliente($cod){
        $cliente = Cliente::find($cod);        
        return view('ver-cliente', compact('cliente'));
    }

    public function editarCliente($dni){
        $cliente= Cliente::find($dni);
        return view('editar-cliente', compact('cliente'));
    }

    public function actualizarCliente(Request $request, $dni){
        $cliente = Cliente::find($dni);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->save();
        return to_route('clientes');
    }

    public function eliminarCliente($dni){
        $cliente = Cliente::find($dni);
        return view('eliminar-cliente', compact('cliente'));
    }

    public function destruirCliente($dni){
        $cliente = Cliente::find($dni);
        $cliente->delete();
        return to_route('clientes');
    }
    
}
