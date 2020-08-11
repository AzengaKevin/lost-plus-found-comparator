<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = ['name', 'location', 'lat', 'lng'];



    /**
     * Helper and Util methods
     */

    public function path(string $group): string
    {
        return "/$group/stations/" . $this->id;
    }
}
