<?php

namespace App\Models;


use App\Accessors\DefaultAccessors;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, DefaultAccessors;

    protected $fillable = ['user_id', 'title', 'body', 'date'];

    protected $casts = [ // como ele retorna dobanco de dados
        'date' => 'datetime:d/m/Y',
        'active' => 'boolean'
    ];
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

//    public function getDateAttribute($value)
//    {
//        return Carbon::make($value)->format('d/m/Y');
//    }

    public function setDateAttribute($value) // alterar o valor antes de inserir no bando de dados
    {
        $this->attributes['date'] = Carbon::make($value)->format('Y-m-d');
    }

    public function scopeLastWeek($query)
    {
        return $this
            ->whereDate('date', '>=', now()->subDays(4))
            ->whereDate('date', '<=', now()->subDays(1));
    }

    public function scopeToday($query)
    {
        return $this
            ->whereDate('date', now());

    }

    public function scopeBetween($query, $firtdate, $lastDate)
    {

        return $this
            ->whereDate('date', '>=', Carbon::make($firtdate)->format('Y-m-d'))
            ->whereDate('date', '<=', Carbon::make($lastDate)->format('Y-m-d'));
    }

}
