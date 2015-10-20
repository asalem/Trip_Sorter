<?php
//Bootstraper 
require_once 'src_code/init.php';


use \tripsort\assets\CardFactory;
use \tripsort\modules\travel\Travel;
  
//tickets mock
    $tickets = array(
      CardFactory::create(array(
        'source' => 'Madrid',
        'destination' => 'Barcelona',
        'vehicle' => 'Train',
        'seat' => '45B',
        'fligt_number' => null,
        'gate' => null,
        'baggege_drop'=>null,
        'connecting' => false
      )),
      CardFactory::create(array(
        'source' => 'Barcelona',
        'destination' => 'Gerona',
        'vehicle' => 'AirPortBus',
        'seat' => null,
        'fligt_number' => null,
        'gate' => null,
        'baggege_drop'=>null,
        'connecting' => false
          
      )),
      CardFactory::create(array(
        'source' => 'Gerona',
        'destination' => 'Stockholm',
        'vehicle' => 'Plane',
        'seat' => '3A',
        'fligt_number' => 'SK455',
        'gate' => '45B',
        'baggege_drop'=> 'drop at ticket counter 344',
        'connecting' => true
      )),
      CardFactory::create(array(
        'source' => 'Stockholm',
        'destination' => 'New York JFK',
        'vehicle' => 'Plane',
        'seat' => '7B',
        'fligt_number' => 'SK22',
        'gate' => '22',
        'baggege_drop'=> 'automatically transferred from your last leg',
        'connecting' => false
      ))
    );


    $travel = new Travel($tickets);
    print $travel->showList();
    