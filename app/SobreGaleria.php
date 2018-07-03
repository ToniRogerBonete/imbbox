<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class SobreGaleria extends Model
{
    protected $fillable = [
        'account_id',
        'sobre_id',
        'midia'
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
                $builder->where('sobre_galerias.account_id', Auth::user()->account_id);
            }
        });
    }
}
