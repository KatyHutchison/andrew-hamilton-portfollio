<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function thumbnailImage()
    {
        $this->hasOne(ThumbnailImage::class);
    }

    public function galleryImages()
    {
        $this->hasMany(GalleryImage::class);
    }
}
