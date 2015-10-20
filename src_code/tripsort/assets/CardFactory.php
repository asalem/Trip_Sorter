<?php
/**
 *  factory Cards (Plane/Bus/airportBus....etc).
 */
namespace tripsort\assets;


use \Exception;

/**
 * CardFactory class in factory pattern.
 */

abstract class CardFactory {
    

    /**
     * Creates an instance of a card
     * @param array $card
     * @return (Vehicle)Card 
     */
    
    public static function create($card) {
        //use the vehicle like PlaneCard, BusCard,UberCard
        $class = '\\tripsort\\assets\\cards\\'.ucfirst(strtolower($card['vehicle'])).'Card';
        
        try {
          
          return new $class($card) ;
          
        } catch (Exception $e) {
            var_dump($e);
          throw new Exception($card['vehicle'] . 'Card' . ' class not found! ' . $e);
        }

    }
}
