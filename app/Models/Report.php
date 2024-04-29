<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primaryKey = 'report_id';
    protected $fillable = [
        'user_id',
        'type_id',
        'description',
        'longitude',
        'latitude',
        'status',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'type_id');
    }

    public function reportFile()
    {
        return $this->hasOne(ReportFile::class, 'report_id', 'report_id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class, 'report_id', 'report_id');
    }
}
