<?php
    class Node {
        public $value, $prev, $next, $position;
        public function __construct($value)
        {
            $this->value = $value;
            $this->position = 0;
        }
    }

    class DoublyLinkedList {
        public $head, $tail;
        public function __construct()
        {
            $this->head = null;
            $this->tail = null;
        }
        public function add($val){
            if($this->head == null)
            {
                $newNode = new Node($val);
                $newNode->position += 1;
                $this->head = $newNode;
                $this->tail = $newNode;
                echo "Added New Node!!!! Postion: " . $this->head->position . ", Value: " . $val . "<br>";
            }
            else
            {
                // $this->head->position = 1;
                $current = $this->head;
                // echo "!!!!!!! " . $this->head->position . " !!!!!!!";
                while($current->next != null)
                {
                    $current = $current->next;
                    // echo "******** " . $current->position . " ********";
                }
                $newNode = new Node($val);
                $current->next = $newNode;
                // $newNode->position = $current->position += 1;
                $current->next->position = $current->position + 1;
                echo "Added New Node!!!! Postion: " . $current->next->position . ", Value: " . $val . "<br>";
                $this->tail = $current->next;
            }
        }
        public function printValues(){
            $current = $this->head;
            if($current == null){
                echo "Linked List is empty!";
                return null;
            }
            if($current->next != null){
                echo "Head: " . $current->value . ", Position: " . $this->head->position . ", Next: " . $current->next->value . "<br>";
            }
            else
            {
                echo "Head: " . $current->value . ", Position: " . $this->head->position . "<br>";
            }
            while($current->next != null){
                $temp = $current;
                $current = $current->next;
                $current->prev = $temp;
                if($current->next != null){
                    echo "Node value is " . $current->value . " at position " . $current->position . ", Next: " . $current->next->value . ", Previous: " . $current->prev->value . "<br/>";
                }
            }
            
            echo "Tail: " . $current->value . ", Position: " . $current->position . ", Previous: " . $current->prev->value . "<br/>";
        }
        public function removeAllNodesWithValueOf($val){
            $current = $this->head;
            while($current->next != null)
            {
                if($current->next->value == $val){
                    if($current->next->next->value != $val){
                        $temp = $current->next->next;
                        $current->next = $temp;
                        $current->next->position = $current->prev->position += 1;
                    }
                    else
                    {
                        $temp = $current->next->next->next;
                        $current->next = $current->next->next->next;
                        // $current->next->position = $current->prev->position += 1;
                    }
                }
                $temp2 = $current;
                $current = $current->next;
                $current->prev = $temp2;
            }
            // $temp2 = $current;
            // $current = $current->next;
            // $current->prev = $temp2;
        }
        public function removeNode($pos){
            if($this->head->position == $pos){
                $this->head = $this->head->next;
                $this->head->position = 1;
                $current = $this->head;
                while($current->next != null){
                    $temp = $current;
                    $current = $current->next;
                    $current->position = $temp->position + 1;
                }
            }
            else
            {
                $current = $this->head;
                while($current->next->position != $pos && $current->next)
                {
                    $current = $current->next;
                }
                $temp2 = $current;
                $temp = $current->next->next;
                $current->next = $temp;
                $current->next->position = $temp2->position + 1;
                while($current->next != null)
                {
                    $temp3 = $current;
                    $current = $current->next;
                    // echo $temp3->position . "********";
                    $current->position = $temp3->position + 1;
                }
            }
        }
        public function insert($pos, $val){
            if($this->head->position == $pos)
            {
                $temp = $this->head;
                $this->head = new Node($val);
                $this->head->next = $temp;
                $this->head->position = 1;
                $current = $this->head;
                while($current->next != null){
                    $temp2 = $current;
                    $current = $current->next;
                    $current->position = $temp2->position + 1;
                }
            }
            else
            {
                $current = $this->head;
                while($current->next != null)
                {
                    $temp2 = $current;
                    $current = $current->next;
                    if($current->position == $pos)
                    {
                        $temp = $current->value;
                        $current->value = $val;
                        while($current->next != null)
                        {
                            $current = $current->next;
                            $temp3 = $current->value;
                            $current->value = $temp;
                        }
                    }
                }
            }
        }
        public function findAllNodesWithValuesOf($val)
        {
            if($this->head->value == $val)
            {
                echo $this->head->value;
            }
            else
            {
                $current = $this->head;
                while($current != null)
                {
                    echo "test";
                }
            }
        }
        public function find($pos)
        {
            if($this->head->position == $pos)
            {
                return $this->head->value;
            }
            else
            {
                $current = $this->head;
                while($current != null)
                {
                    // if($current->position == $pos)
                    // {
                    //     return $current->value;
                    // }
                }
            }
        }
    }

    $dll = new DoublyLinkedList(); //creates a new instance of the doubly linked list
    $dll->add(5);     //should add a new node with the value of 5
    $dll->add(7);     //should add a new node with the value of 7
    $dll->add(7);     //should add a new node with the value of 7
    $dll->add(10);
    $dll->removeAllNodesWithValueOf(7); //should remove all nodes with value of 7
    // $dll->removeNode(2);  //removes node of position 1
    $dll->add(3);     //should add a new node with the value of 3
    $dll->insert(2, 100);
    $dll->printValues();  //should print all the values in the doubly linked list

    // echo "<br>" . $dll->findAllNodesWithValuesOf(100);
    // echo "<br>" . $dll->find(2);
?>