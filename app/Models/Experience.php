<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        "nama_pelatihan",
        "penyelenggara",
        "waktu_pelaksanaan",
        "tingkatan",
        "deskripsi",
        "experiencecategory_id",
    ] ;
    public function experiencecategory()
    {
        return $this->belongsTo(ExperienceCategory::class);
    }
}

