<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'title',
        'image',
        'tags',
        'excerpt',
        'description',
        'clicks'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_services');
    }
}
