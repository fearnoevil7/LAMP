<?php
    class Node{
        public function __construct($value)
        {
            $this->value = $value;
            $this->next = null;
        }
    }
    class SinglyLinkedList{
        public function __construct()
        {
            $this->head = null;
        }
        public function Add($val)
        {
            if($this->head == null)
            {
                $this->head = new Node($val);
                echo $val;
            }
            else
            {
                $current = $this->head;
                while($current->next)
                {
                    $current = $current->next;
                }
                $current->next = new Node($val);
                echo $val;
            }
        }
        public function Remove($val)
        {
            if($this->head->value = $val)
            {
                $this->head = $this->head->next;
            }
            else
            {
                $current = $this->head;
                while($current->next->value != $val && $current->next)
                {
                    $current = $current->next;
                }
                $temp = $current->next->next;
                $current->next = $temp;
            }
        }
        public function Find($val)
        {
            $current = $this->head;
            while($current != null)
            {
                if($current->value == $val)
                {
                    return true;
                }
                $current = $current->next;
            }
            return false;
        }
        public function PrintValues(){
            $current = $this->head;
            while($current)
            {
                echo $current->value . "<br>";
                $current = $current->next;
            }
        }
    }
    $newList = new SinglyLinkedList();
    $newList->head = new Node(1);
    $newList->head->next = new Node(2);
    $newList->head->next->next = new Node(3);
    $newList->head->next->next->next = new Node(4);
    $newList->head->next->next->next->next = new Node(5);
    // if($newList->head->value == 3) { return true; }
    // if($newList->head->next->value == 3) { return true; }
    // if($newList->head->next->next->value == 3) { return true; }
    // if($newList->head->next->next->next->value == 3) { return true; }
    // if($newList->head->next->next->next->next->value == 3) { return true; }
    echo $newList->head->value;
    echo $newList->head->next->value;
    echo $newList->head->next->next->value;
    echo $newList->head->next->next->next->value;
    echo $newList->head->next->next->next->next->value;

    var_dump($newList);
    $temp = $newList->head->next->next->next;
    $newList->head->next->next = $temp;
    var_dump($newList);

    $newList2 = new SinglyLinkedList();
    $newList2->Add(1);
    $newList2->Add(2);
    $newList2->Add(3);
    $newList2->Add(4);
    $newList2->Add(5);
    
    $newList2->Remove(1);
    $newList2->Remove(5);
    var_dump($newList2);
    var_dump($newList2->Find(3));
    var_dump($newList2->Find(99));
    $newList2->PrintValues();
    
?>