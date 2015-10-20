<?php

namespace tripsort\modules\travel;
use \Exception;

/**
 * Create more than one Card class and give it to this class
 * @param array $tickets An array of the Card class.
 */
class Travel {
  
  /**
   * An array of Card class.
  */
  public $tickets = null;
  
  /**
   * Constructor of the Travel
   * @param array $tickets.
   * @return Travel 
   */
  function __construct($tickets) {
    $this->setTickets($tickets);
    return $this;
  }
  
 
  
  /**
   * returns an array of passenger cards.
   */
  public function getTickets() {
    return $this->tickets;
  }
  
  /**
   * Setter for tickets
   * @param array $tickets an array of cards
   * @return Travel
   */
  public function setTickets(array $tickets){
      
    $this->tickets = $tickets;
    return $this;
  }
  
  /**
   * Adds a ticket to the ticket stack.
   * @param Card $ticket an instance of Card class.
   * @return Travel
   */
  public function addTicket(Card $ticket){
    if(is_array($this->tickets)) {
      array_push($this->tickets, $ticket);
    }
    
    if (is_null($this->tickets)) {
      $this->tickets = array($ticket);
    }
    
    return $this;
  }
  
  
  /**
   * render Tickets.
   * @return Travel
   */
  public function showList(){
      
        
        foreach ($this->getTickets() as $key => $val){
            $key +=1;
            $stack[] = $val; //__toString will do the math
        }
        
        if (count($stack) > 0 ) 
           $stack[] = 'You have arrived at your final destination.';
        
        $final = implode("\n", $stack);
        return $final."\n";
    }
  
}