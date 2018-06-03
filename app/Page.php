<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function images()
    {
        return $this->hasMany(PageImage::class);
    }

    public function texts()
    {
        return $this->hasMany(PageText::class);
    }
}
