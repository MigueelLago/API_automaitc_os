<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    /**
     *  @var Service
     */
    private $service;

    public function __construct(Service $service){
        $this->service = $service;
    }

    public function index(){
        $data = $this->service->paginate(5); //Variavel data recebe um array com as collections do meu objeto.
        return response()->json($data); //Retorno em formato json com o metódo response.
    }

    public function show($id){
        $service = $this->service->find($id);
        if(! $service){
            return response()->json(['data' => ['msg' => 'Ordem de serviço não encontrada!']], 404);
        }
        $data = ['data' => $service];        //Variavel data recebe  o ID passado na url.
        return response()->json($data); //Retorno em formato json com o metódo response.
    }

    public function store(Request $request){
        try {

            $serviceData = $request->all();
            $this->service->create($serviceData);

            return response()->json(['msg' => 'Ordem de serviço criada com sucesso!'], 201);

        } catch (\Exception $e) {
            return response()->json(['msg' => 'Erro ao criar Ordem de Serviço!'], 400);
        }
    }

    public function update(Request $request, $id){
        try {

           $serviceData = $request->all();
           $service = $this->service->find($id);
           $service->update($serviceData);

            return response()->json(['msg' => 'Ordem de serviço atualizada com sucesso!'], 200);

        } catch (\Exception $e) {
            return response()->json(['msg' => 'Erro ao atualizar ordem de serviço!'], 400);
        }
    }

    public function delete(Service $id){
        try{

            $id->delete();
            return response()->json(['data' => ['msg' => 'Ordem de serviço: ' .$id->id. ', removida com Sucesso!']], 200);

        } catch(\Exception $e){
            return response()->json(['msg' => 'Erro ao deletar ordem de serviço!'], 400);
        }
    }
}
