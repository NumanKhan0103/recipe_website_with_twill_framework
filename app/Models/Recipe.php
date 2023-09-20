<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class Recipe extends Model 
{
    use HasBlocks, HasSlug;

    protected $fillable = [
        'published',
        'title',
        'subtitle',
        'owner',
        'description',
        'status',
    ];
    
    
    public $slugAttributes = [
        'title',
    ];
    
}
