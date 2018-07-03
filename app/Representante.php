<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class Representante extends Model
{
    protected $fillable = [
        'account_id',
        'estado',
        'cidade',
        'endereco',
        'telefone'
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
                $builder->where('representantes.account_id', Auth::user()->account_id);
            }
        });
    }
}
