<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';

    protected $fillable = ['code'];

    public $relations = [
        'people'
    ];

    public function people()
    {
        return $this->hasOne(People::class, 'code_id');
    }
}
