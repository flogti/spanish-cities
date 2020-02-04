<?php

namespace Flogti\SpanishCities\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    public function capital()
    {
        return $this->hasOne('Flogti\SpanishCities\Models\Town', 'id', 'capital_id');
    }

    public function provinces()
    {
        return $this->hasMany('Flogti\SpanishCities\Models\Provinces', 'community_id', 'id');
    }

    public function towns()
    {
        return $this->hasManyThrough('Flogti\SpanishCities\Models\Town', Flogti\SpanishCities\Models\Province);
    }
}
