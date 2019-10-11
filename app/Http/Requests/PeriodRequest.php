<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeriodRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'period' => 'required|max:6|unique:periods',
            'work_plan_opening_date' => 'required|date|max:10',
            'work_plan_closing_date' => 'required|date|after:work_plan_opening_date|max:10',
            'report_opening_date' => 'required|date|after:work_plan_opening_date|max:10',
            'report_closing_date' => 'required|date|after:report_opening_date|max:10'
        ];
    }

    public function messages(){
        return [
            'period.required' => 'O campo "Período Regente" não pode ser vazio.',
            'period.max' => 'O campo "Período Regente" não poder ter mais de 6 caracteres.',
            'period.unique' => 'Já existe um registro com o período informado.',

            'work_plan_opening_date.required' => 'O campo "Data de Abertura do Plano" é obrigatório.',
            'work_plan_opening_date.date' => 'O campo "Data de Abertura do Plano" precisa ser uma data válida.',
            'work_plan_opening_date.max' => 'O campo "Data de Abertura do Plano" precisa ser uma data válida.',

            'work_plan_closing_date.required' => 'O campo "Data de Fechamento do Plano" é obrigatório.',
            'work_plan_closing_date.date' => 'O campo "Data de Fechamento do Plano" precisa ser uma data válida.',
            'work_plan_closing_date.after' => 'O campo "Data de Fechamento do Plano" precisa ser posterior a de abertura.',
            'work_plan_closing_date.max' => 'O campo "Data de Fechamento do Plano" precisa ser uma data válida.',

            'report_opening_date.required' => 'O campo "Data de Abertura do Relatório" é obrigatório.',
            'report_opening_date.date' => 'O campo "Data de Abertura do Relatório" precisa ser uma data válida.',
            'report_opening_date.after' => 'O campo "Data de Abertura do Relatório" precisa ser posterior a de abertura do plano.',
            'report_opening_date.max' => 'O campo "Data de Abertura do Relatório" precisa ser uma data válida.',

            'report_closing_date.required' => 'O campo "Data de Fechamento do Relatório" é obrigatório.',
            'report_closing_date.date' => 'O campo "Data de Fechamento do Relatório" precisa ser uma data válida',
            'report_closing_date.after' => 'O campo "Data de Fechamento do Relatório" precisa ser posterior a de abertura.',
            'report_closing_date.max' => 'O campo "Data de Fechamento do Relatório" precisa ser uma data válida.'
        ];
    }
}
