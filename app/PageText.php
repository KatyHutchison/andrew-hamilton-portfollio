<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageText extends Model
{
    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
