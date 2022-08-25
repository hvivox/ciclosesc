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
        'CICLONOME',
        'CICLOCPF',
        'CICLOIDADE',
        'CICLOTELEFONE',
        'CICLOEMAIL',
        'CICLOBIKE',
        'CICLOESPORTE',
        'CICLOSEXO',
        'CICLOEQUIPAMENTO',
        'CICLOPARTICIPOU',
        'CICLOAPTO',
        'CICLOSABENDO'
    ];

    public function rules()
    {
        return array(
            "CICLONOME" => ['required', 'string', 'max:200'],
            "CICLOCPF" => ['required', 'string', 'max:20'],
            "CICLOIDADE" => ['required', 'int', 'max:100'],
            "CICLOTELEFONE" => ['required', 'string', 'max:15'],
            "CICLOBIKE" => ['required', 'string', 'max:15'],
            "CICLOESPORTE" => ['required', 'string', 'max:15'],
            "CICLOSEXO" => ['required', 'string', 'max:15'],
            "CICLOEQUIPAMENTO" => ['required', 'string', 'max:15'],
            "CICLOPARTICIPOU" => ['required', 'string', 'max:15'],
            "CICLOAPTO" => ['required', 'string', 'max:15'],
            "CICLOSABENDO" => ['required', 'string', 'max:2'],
        );
    }


    public function niceName()
    {
        return array(
            'CICLONOME' => 'Nome',
            'CICLOCPF' => 'CPF',
            'CICLOIDADE' => 'Idade',
            "CICLOSEXO" => "Sexo",
            'CICLOTELEFONE' => 'Telefone',
            'CICLOEMAIL' => 'Email',
            'CICLOBIKE' => 'Possui bicicleta',
            "CICLOEQUIPAMENTO" => "Possui equipamento",
            "CICLOPARTICIPOU" => "Participou de outra edição",
            'CICLOSABENDO' => 'Como ficou sabendo',
            'CICLOAPTITO' => 'Declara estar apto',
            'CICLOESPORTE' => 'Pratica Esportes',

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
