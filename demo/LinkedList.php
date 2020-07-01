<?php
include_once "Node.php";
class LinkedList {
    private $lastNode;
    private $firstNode;
    private $count;

    public function __construct()
    {
        $this->lastNode=NULL;
        $this->firstNode=NULL;
        $this->count=0;
    }

    function addFirst($element){
        $node = new Node($element);
        $node->next=$this->firstNode;
        $this->firstNode=$node;

        if ($this->lastNode==NULL){
            $this->lastNode=$node;
        }
        $this->count++;
    }
    function getLinkedList(){
        $list = array();
        $current = $this->firstNode;

        while ($current!=NULL){
            array_push($list,$current->getNode());
            $current=$current->next;
        }
        return $list;
    }
    function add($index,$element){
        if ($index==0){
            $this->addFirst($element);
        } else {
            $node = new Node($element);
            $current = $this->firstNode;
            $temp = $this->firstNode;

            for ($i = 0; $i < $index; $i++) {
                $temp = $current;
                $current=$current->next;
            }
            $temp->next = $node;
            $node->next = $current;
            $this->count++;
        }
    }
    function delete($index){


        $current = $this->firstNode;
        $temp = $this->firstNode;

        for ($i = 0; $i < $index; $i++) {
            $temp = $current;
            $current=$current->next;
        }
        $temp->next = $current->next;
        $this->count--;
    }
    function totalNode(){
        return $this->count;
    }

}
$linkedList = new LinkedList();
$linkedList->addFirst(5);
$linkedList->addFirst(7);
$linkedList->addFirst(10);
$linkedList->addFirst(9);
$linkedList->addFirst(2);

$linkedList->add(3,50);

echo $linkedList->totalNode();


echo "<pre>";
print_r($linkedList->getLinkedList());
echo "</pre>";