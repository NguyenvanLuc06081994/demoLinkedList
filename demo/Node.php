<?php

class Node {
    public $elements;
    public $next;

    public function __construct($elements)
    {
        $this->elements=$elements;
        $this->next=NULL;
    }
    function getNode(){
        return $this->elements;
    }

}