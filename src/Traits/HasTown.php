<?php
namespace Flogti\SpanishCities\Traits;

trait HasTown
{
  public function town()
  {
      return $this->belongsTo('Flogti\SpanishCities\Models\Town', 'town_id', 'id');
  }
}