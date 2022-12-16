<?php

namespace App\Models;


use App\Accessors\DefaultAccessors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, DefaultAccessors;

    protected $fillable = ['user_id', 'title', 'body', 'date'];

    /*
    protected $table = 'postagens'; // outro nome da tabela
    protected $primaryKey = 'id_postagens'; // outro nome do id
    protected $keyType = 'string'; // tipo do primarykey
    public $incrementing  = false; // desabilita o autoincrement na coluna id
    // https://laravel.com/docs/9.x/eloquent#primary-keys

    public $timestamps = true; // habilita ou desabilita a coluna de atualizado/criado
    const CREATED_AT = 'data_criancao';
    const UPDATED_AT = 'data_atualizacao';
    protected $dateFormat = 'Y-m-d H:i:s';

    // mudar o local ta tabela. Faz busca em outro banco
    protected $connection = 'pqsql';

    // Define um valor padrão da coluna. Caso não tenha sido feita no migration ou no DB
    protected $attributes = [
        'active' => true,
    ];
    */

    /*public function getTitleAttribute($value)
    {
        return strtoupper($value);
    }

    public function getTitleAndBOdyAttribute($value)
    {
        return $this->title . ' - ' . $this->body;
    }*/
}
