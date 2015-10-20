<?php

namespace tripsort\assets\cards;


class PlaneCard {
  
  
  function __construct(array $card) {
    $this->type         = 'Plane';
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
      return (String) 'from '  . $this->destination .' Airport take Flight '.(isset($this->fligt_number) ? $this->fligt_number : '') .
      ' to ' . $this->destination .(isset($this->gate) ? ' .Gate'.$this->gate : '').
              (isset($this->seat) ? ', seat :'.$this->seat . ' ' : 'No seat assignment') .
             (isset($this->baggege_drop) ? ' Baggage '. $this->baggege_drop : '.') ;     
  }
  
}
