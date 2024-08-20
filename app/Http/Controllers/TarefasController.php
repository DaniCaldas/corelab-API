<?php

namespace App\Http\Controllers;

use App\Models\Tarefas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    public function index(){
        return Tarefas::all();
    }

    public function store(Request $req){
        Tarefas::create([
            "titulo" => $req->titulo,
            "status" => $req->status,
            "favorito" => $req->favorito,
            "cor" => $req->cor
        ]);
        return response('OK',200);
    }

    public function update(Request $req){
        $tarefa = Tarefas::find($req->id);

        if($req->titulo != null){
            $tarefa-> titulo = $req->titulo;
        }
        else if($req->status != null){
            $tarefa-> status = $req->status;
        }
        else if($req->favorito != null){
            $tarefa->favorito = $req->favorito;
        }
        else if($req->cor != null){
            $tarefa->cor = $req->cor;
        }

        $tarefa->save();
        return response("OK", 200);
    }

    public function delete(Request $req){
        try {
            $tarefa = Tarefas::find($req->id);
            if($tarefa == null){
                response("tarefa nao encontrada", 500);
            }
            $tarefa->delete();

            return response("tarefa excluida", 200);
        } catch (\Throwable $th) {
            return response($th, 500);
        }
    }
}
