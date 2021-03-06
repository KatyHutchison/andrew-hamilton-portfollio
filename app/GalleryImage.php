<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
