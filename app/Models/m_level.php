<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_level extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'level_id';
    protected $fillable = [
        'level_id',
        'level_kode',
        'level_nama',
    ];
}
