<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarjeta;
use App\Models\Cliente;

class tarjetaController extends Controller
{
    public function obtenerTodo(){
        return view('tarjetas');
    }

    public function crearTarjeta(){
        return view('crear-tarjeta');
    }

    public function guardarTarjeta(Request $request){
        //Validación de que el dni del cliente ya exista y el tipo de tarjeta (cls, gld, plt)
        $clientes = Cliente::all();
        foreach ($clientes as $cliente){
            if($request->dni == $cliente->dni){
                if($request->tipoTarjeta == 'cls' || $request->tipoTarjeta == 'gld' || $request->tipoTarjeta == 'plt'){
                    $nvaTarjeta = new Tarjeta();
                    $nvaTarjeta->cvv = $request->cvv;
                    $nvaTarjeta->limite = $request->limite;
                    $nvaTarjeta->dni = $request->dni;
                    $nvaTarjeta->tipoTarjeta = $request->tipoTarjeta;
                    $nvaTarjeta->save();
                    return to_route('tarjetas');
                }
            }
        }
        
        return "El Cliente no existe o el tipo de la tarjeta no es valido.";
    }

    public function tarjetasCls(){
        $tarjetas = Tarjeta::all();
        $tarjetasCls = new Tarjeta();
        foreach($tarjetas as $tarjeta){
            if($tarjeta->tipoTarjeta == 'cls'){
                $tarjetasCls->cvv = $tarjeta->cvv;
                $tarjetasCls->limite = $tarjeta->limite;
                $tarjetasCls->dni = $tarjeta->dni;
                $tarjetasCls->tipoTarjeta = $tarjeta->tipoTarjeta;
                $tarjetasCls->save();
            }
        }
        return view('tarjetas-cls', compact('tarjetasCls'));
    }

    public function tarjetasGld($tipo){
        $tarjetas = Tarjeta::all();
        $tarjetasGld = new Tarjeta();
        foreach($tarjetas as $tarjeta){
            if($tarjeta->tipoTarjeta == 'gld'){
                $tarjetasGld->cvv = $tarjeta->cvv;
                $tarjetasGld->limite = $tarjeta->limite;
                $tarjetasGld->dni = $tarjeta->dni;
                $tarjetasGld->tipoTarjeta = $tarjeta->tipoTarjeta;
                $tarjetasGld->save();
            }
        }
        return view('tarjetas-gld', compact('tarjetasGld'));
    }

    public function tarjetasPlt($tipo){
        $tarjetas = Tarjeta::all();
        $tarjetasPlt = new Tarjeta();
        foreach($tarjetas as $tarjeta){
            if($tarjeta->tipoTarjeta == 'plt'){
                $tarjetasPlt->cvv = $tarjeta->cvv;
                $tarjetasPlt->limite = $tarjeta->limite;
                $tarjetasPlt->dni = $tarjeta->dni;
                $tarjetasPlt->tipoTarjeta = $tarjeta->tipoTarjeta;
                $tarjetasPlt->save();
            }
        }
        return view('tarjetas-plt', compact('tarjetasPlt'));
    }

    public function verTarjeta($cod){
        $tarjeta = Tarjeta::find($cod);        
        return view('ver-tarjeta', compact('tarjeta'));
    }

    public function eliminarTarjeta($dni){
        $tarjeta = Tarjeta::find($dni);
        return view('eliminar-tarjeta', compact('tarjeta'));
    }

    public function destruirTarjeta($dni){
        $tarjeta = Tarjeta::find($dni);
        $tarjeta->delete();
        return to_route('tarjetas');
    }

}
