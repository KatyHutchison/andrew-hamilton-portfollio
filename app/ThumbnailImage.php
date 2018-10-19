<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThumbnailImage extends Model
{
    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
}
