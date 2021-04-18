<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class ContaController extends Controller
{
    public function index()
    {
        return Conta::all();
    }

    public function store(Request $request)
    {
        return Conta::create($request->all());
    }

    public function saldo($id)
    {
        $conta = Conta::find($id);

        if (!$conta) {
            $response = array(
                'data' => null,
                'status' => 404,
                'error' => 'Conta não encontrada!'
            );
            return response()->json($response, 404);
        }

        $data = array(
            'Conta' => $conta->id,
            'CPF' => $conta->cpf,
            'Nome' => $conta->nome,
            'Saldo' => $conta->saldo
        );

        $response = array(
            'data' => $data,
            'status' => 200,
            'error' => ''
        );
        return response()->json($response, 200);
    }

    public function deposito(Request $request, $id)
    {
        $conta = Conta::find($id);

        if (!$conta) {
            $response = array(
                'data' => null,
                'status' => 404,
                'error' => 'Conta não encontrada!'
            );
            return response()->json($response, 404);
        }

        if ($request->valor <= 0) {
            $response = array(
                'data' => null,
                'status' => 400,
                'error' => 'O valor do depósito deve ser maior que 0,00.'
            );
            return response()->json($response, 400);
        }

        $conta->saldo += $request->valor;
        $conta->update();

        $response = array(
            'data' => 'Transação realizada com sucesso!',
            'status' => 200,
            'error' => ''
        );
        return response()->json($response, 200);
    }

    public function saque(Request $request, $id)
    {
        $conta = Conta::find($id);

        if (!$conta) {
            $response = array(
                'data' => null,
                'status' => 404,
                'error' => 'Conta não encontrada!'
            );
            return response()->json($response, 404);
        }

        if ($request->valor <= 0) {
            $response = array(
                'data' => null,
                'status' => 400,
                'error' => 'O valor do saque deve ser maior que 0,00.'
            );
            return response()->json($response, 400);
        }

        if ($conta->saldo < $request->valor) {
            $response = array(
                'data' => null,
                'status' => 400,
                'error' => 'Saldo insuficiente.'
            );
            return response()->json($response, 400);
        }

        $conta->saldo -= $request->valor;
        $conta->update();

        $response = array(
            'data' => 'Transação realizada com sucesso!',
            'status' => 200,
            'error' => ''
        );
        return response()->json($response, 200);
    }
}
