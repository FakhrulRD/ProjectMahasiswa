<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table ='Dosen';
    protected $fillable = [
        'nip',
        'name',
        'slug',
        'alamat',
    ];
    public function Matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
