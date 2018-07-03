<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class Album_midia extends Model
{
    protected $fillable = [
        'account_id',
        'album_id',
        'titulo',
        'midia',
        'ordem'
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
                $builder->where('album_midias.account_id', Auth::user()->account_id);
            }
        });
    }
}
