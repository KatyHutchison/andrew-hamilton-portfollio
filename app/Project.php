<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function thumbnailImage()
    {
       return $this->hasOne(ThumbnailImage::class);
    }

    public function galleryImages()
    {
       return $this->hasMany(GalleryImage::class);
    }
}