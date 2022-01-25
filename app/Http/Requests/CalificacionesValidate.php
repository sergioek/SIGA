<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalificacionesValidate extends FormRequest
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
            'nota_1'=>'max:10',
            'nota_2'=>'max:10',
            'nota_dic'=>'max:10',
            'nota_feb'=>'max:10',
            'nota_fin'=>'max:10',
            'cal_def'=>'max:10',
            'examen'=>'required',
            'fecha'=>'date',
            'establecimiento'=>'max:50',
            'observaciones'=>'max:50',
        ];
    }
}
