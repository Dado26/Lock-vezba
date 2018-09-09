<?php

class Lock{
    protected $isLocked;
    
    public function lock() {
        $this->isLocked = true;
    }
    
    public function unlock(){
        $this->isLocked= false;
    }
    
    public function Get_isLocked(){
        return $this->isLocked;
    }
}

