<?php
namespace Flogti\SpanishCities\Traits;

trait HasTown
{
  public function town()
  {
      return $this->belongsTo('Flogti\SpanishCities\Models\Town', 'town_id', 'id');
  }

  public function province()
  {
    return $this->town->province;
  }
  
  public function community()
  {
    return $this->town->province->community;
  }
}