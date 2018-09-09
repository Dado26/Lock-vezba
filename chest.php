<?php

class Chest{
    protected  $lock;
    protected $isClosed;


    public function __construct(Lock $lock) {
        $this->lock = $lock;
    }
    
    public function close(){
       if ($this->isClosed === true){
           echo '<br>Closed<br>';
        }else{
        echo '<br>cannot be closed';
        
        }
        
    }
    
    public function locked($lock){
        if ($lock === true){
            $this->lock->lock();
            echo 'chest is lock';
        }else{
            echo 'chest is unlock <br>';
        }
        
    }
    
    public function open(){
       if ($this->lock->Get_isLocked()==true){
            echo 'its cannot be open';
        }else{
        $this->isClosed = false;
            
        echo 'Opened';
        
        }
    }
    
    public function unlocked($boolean){
        if ($boolean===true){
            $this->lock->unlock();
            echo 'chest is unlock<br>';
        }else{
            echo'chest is locked <br>';
            $this->isClosed= true;
        }
        return $this->lock;
    }
    
    public function GetIsClosed() {
        return $this->isClosed;
    }
}
