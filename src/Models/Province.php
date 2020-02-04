<?php
namespace Flogti\SpanishCities\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function capital()
    {
        return $this->hasOne('Flogti\SpanishCities\Models\Town', 'id', 'capital_id');
    }

    public function towns()
    {
        return $this->hasMany('Flogti\SpanishCities\Models\Town', 'province_id', 'id');
    }

    public function community()
    {
        return $this->belongsTo('Flogti\SpanishCities\Models\Community', 'community_id', 'id');
    }
}
