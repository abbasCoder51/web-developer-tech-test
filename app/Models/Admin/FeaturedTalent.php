<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedTalent extends Model
{
    use HasFactory;

    protected $table = 'featured_talents';

    protected $fillable = [
        'name',
        'description',
        'url_link',
        'name',
        'location',
        'job_category',
        'image',
        'employment_type',
        'skill',
        'years_experience'
    ];
}
