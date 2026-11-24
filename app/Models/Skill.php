<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi Many-to-Many: 1 Skill digunakan di banyak Proyek
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_skill');
    }
}
