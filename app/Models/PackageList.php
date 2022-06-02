<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageList extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'name',
        'image',
        'list'
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
