<?php

namespace leapfrog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * Get the owner for the video.
     */
    public function author()
    {
        return $this->belongsTo('leapfrog\User','owner');
    }
}
