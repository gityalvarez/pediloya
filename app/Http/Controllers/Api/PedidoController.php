<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Backend\Envio;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    public function index()
    {
        return Pedido::all();
    }
}