<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prioridade;

class Inscricao extends Model
{
    use HasFactory;
    protected $table = 'CICLOSESC';
    protected $primaryKey = 'CODIGO';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'NOME', 'RG', 'IDADE', 'TELEFONE', 'EMAIL', 'POSSUIBIKE',
        'PRATICAESPORTE', 'SEXO'
    ];

    public function rules()
    {
        return array(
            'NOME' => ['required', 'string', 'max:200'],
            'RG' => ['required', 'string', 'max:200'],
            'IDADE' => ['required', 'int', 'max:3'],
            'TELEFONE' => ['required', 'string', 'max:15'],
            'EMAIL' => ['required', 'string', 'max:200'],
            'POSSUIBIKE' => ['required', 'boolean'],
            'PRATICAESPORTE' => ['required', 'boolean'],
            'SEXO' => ['required', 'regex:/^[a-zA-Z]+$']
        );
    }


    public function niceName()
    {
        return array(
            'NOME' => 'Nome',
            'RG' => 'RG',
            'IDADE' => 'Idade',
            'TELEFONE' => 'Telefone',
            'EMAIL' => 'Email',
            'POSSUIBIKE' => 'Possui bicicleta',
            'PRATICAESPORTE' => 'Pratica Esportes',
            'SEXO' => 'Sexo'
        );
    }



    /*public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'imagem.mimes' => 'O arquivo deve ser uma imagem do tipo PNG',
            'nome.unique' => 'O nome da marca já existe',
            'nome.min' => 'O nome deve ter no mínimo 3 caracteres'
        ];
    }
    */

    /* public function modelos() {
        //UMA marca POSSUI MUITOS modelos
        return $this->hasMany('App\Models\Modelo');
    }*/
}
