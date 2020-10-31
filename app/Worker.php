<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Worker extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'position', 'telephone', 'dtHiring'
    ];
    
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
