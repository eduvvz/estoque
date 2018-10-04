<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class RestProdutoController extends Controller {
    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}

