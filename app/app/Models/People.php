<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    protected $fillable = ['name', 'email', 'phone', 'semester', 'plan', 'course', 'code_id'];

    public $relations = [
        'codes'
    ];

    public function codes()
    {
        return $this->belongsTo(Code::class, 'code_id');
    }
}
