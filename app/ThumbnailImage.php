<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThumbnailImage extends Model
{
    public function Project()
    {
        $this->belongsTo(Project::class);
    }
}
