<?php

namespace tripsort\assets\cards;


class AirportbusCard {
  
  
  function __construct(array $card) {
    $this->source       = $card['source'];
    $this->destination  = $card['destination'];
    $this->vehicle      = $card['vehicle'];
    $this->seat         = $card['seat'];
    $this->gate         = $card['gate'];
    $this->fligt_number = $card['fligt_number'];
    $this->baggege_drop = $card['baggege_drop'];
    $this->connecting   = $card['connecting'];
    
    
    return $this;
  }
  
  function __toString() {
      return (String) 'Take the Airport Bus From'. $this->source . ' to '. $this->destination .
          (isset($this->seat) ? ' Seat'.$this->seat .'.' : ' .No seat assignment');     
  }
  
}
