<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportFile extends Model
{
    use HasFactory;

    protected $table = 'report_files';
    protected $primaryKey = 'file_id';
    protected $fillable = [
        'report_id',
        'img_path',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id', 'report_id');
    }
}
