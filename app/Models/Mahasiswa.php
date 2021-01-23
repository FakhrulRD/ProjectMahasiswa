<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table ='mahasiswa';
    protected $fillable = [
        'npm',
        'name',
        'slug',
        'class',
        'alamat',
        'organization_id',
    ];
    public function Organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
