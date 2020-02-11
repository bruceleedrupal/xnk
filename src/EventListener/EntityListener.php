<?php 
namespace App\EventListener;

use App\Entity\Patient;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;
use App\Entity\User;

class EntityListener {
    
   
    
    public function prePersistPatient(Patient $patient, LifecycleEventArgs $event)
    {
        
     
              
        
    } 

  
    
}