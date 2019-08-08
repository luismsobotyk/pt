<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkPlans extends Model
{
    WorkPlans::all();
    // Retorna todos os registros da tabela WorkPlans (Seria o equivalente a
    // SELECT * FROM WorkPlans, para o MySQL)

    WorkPlans::find($id);
    // Retorna todos os dados do registro da tabela WorkPlans com o $id
    // especificado na busca

    WorkPlans::where('WorkPlans_id',1)->get();
    // Executa uma query com parâmetros de restrição (WHERE)

    WorkPlans::where('WorkPlans_id',1)
    ->orderBy('WorkPlans_id','description')
    ->take(10)
    ->get();
    // Executa uma query com parâmetros de restrição (WHERE e LIMIT)
    // organizando pelas colunas especificada
}
