<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room_model extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    public $timestamps = 'false';
    protected $primarykey = 'id';
    protected $fillable = [
        'jenis_kamar',
        'jumlah',
        'harga'
    ];
}
