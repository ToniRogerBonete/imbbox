<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class Produto extends Model
{
    protected $fillable = [
        'account_id',
        'produto_categoria_id',
        'titulo',
        'descricao',
        'dimensao',
        'material'
    ];

    protected $hidden = [
        'account_id',
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder){
            if(Auth::check()){
                $builder->where('produtos.account_id', Auth::user()->account_id);
            }
        });
    }
}
