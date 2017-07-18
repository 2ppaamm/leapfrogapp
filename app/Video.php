<?php

namespace leapfrog;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get the owner for the video.
     */
    public function owner()
    {
        return $this->belongsTo('leapfrog\User');
    }

    public function approver()
    {
    	return $this->belongsTo('leapfrog\User');
    }

    public function countries()
    {
    	return $this->belongsToMany('leapfrog\Country');
    }

    public function topics()
    {
    	return $this->belongsToMany('leapfrog\Topic');
    }
}
