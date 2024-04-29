<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'types';
    protected $primaryKey = 'type_id';
    protected $fillable = [
        'name',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class, 'type_id', 'type_id');
    }
}
