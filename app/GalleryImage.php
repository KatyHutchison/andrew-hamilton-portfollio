<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
	public function project()
	{
		$this->belongsTo(Project::class);
    }
}
