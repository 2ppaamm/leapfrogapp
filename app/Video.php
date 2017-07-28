<?php

namespace leapfrog;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
     * Get the owner for the video.
     */
    public function author()
    {
        return $this->belongsTo('leapfrog\User', 'owner');
    }

    public function approved_by()
    {
    	return $this->belongsTo('leapfrog\User', 'approver');
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
