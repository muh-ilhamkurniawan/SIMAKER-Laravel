<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $table = 'log_activities'; // Nama tabel yang tepat
    protected $primaryKey = 'id'; // Sesuaikan dengan nama kolom primary key
    protected $fillable = [
        'user_id',
        'login_at',
        'logout_at',
    ];
}
