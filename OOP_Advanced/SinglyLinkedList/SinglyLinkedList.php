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
            $this->head == null;
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
        public function Insert($valueAfter, $newValue){
            $current = $this->head;
            while($current->next != null){
                if($current->value == $valueAfter)
                {
                    $temp = $current->next;
                    $current->next = new Node($newValue);
                    $current->next->next = $temp;
                    return true;
                }
                $current = $current->next;
            }
            if($current->value == $valueAfter)
            {
                $temp = $current->next;
                $current->next = new Node($newValue);
                $current->next->next = $temp;
                return true;
            }
            else
            {
                $current->next = new Node($newValue);
            }
        }
        public function isEmpty()
        {
            if($this->head == null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function removeDups()
        {
            $check = array();
            $current = $this->head;
            while($current->next != null){
                array_push($check, $current->value);
                for($i = 0; $i < count($check); $i++){
                    if($check[$i] == $current->next->value){
                        $current->next = $current->next->next;
                    }
                }
                $current = $current->next;
            }
        }
    }
?>