<?php
    class Node
    {
        public $next;
        public $value;
        public function __construct($val)
        {
            $this->value = $val;
            $this->next = null;
        }
    }

    class Queue
    {
        private $front;
        private $rear;
        public $maxSize;
        public function __construct($val)
        {
            $this->front = null;
            $this->rear = null;
            $this->maxSize = $val;
        }
        public function enqueue($val)
        {
            if($this->rear == null)
            {
                $this->rear = new Node($val);
                echo $val;
            }
            else
            {
                $counter = 1;
                $current = $this->rear;
                echo "<br><br>" . $current->value . "<br>";
                while($current->next != null)
                {
                    $current = $current->next;
                    echo $current->value . "<br>";
                    $counter += 1;
                }
                if($this->maxSize <= $counter)
                {
                    return false;
                }
                else
                {
                    $current->next = new Node($val);
                    echo $val;
                    return true;
                }
            }
        }
        public function dequeue()
        {
            $temp = $this->rear;
            $current = $this->rear;
            if($this->rear != null)
            {
                $this->rear->value = $current->next->value;
            }
            echo "<br>" . $current->value;
            while($current->next->next != null)
            {
                $current = $current->next;
                $current->value = $current->next->value;
                echo "<br>" . $current->value . "<br>";
            }
            $current->next = $current->next->next;
        }
        public function front()
        {
            $current = $this->rear;
            if($current->next == null)
            {
                return $current->value;
            }
            else
            {
                while($current->next != null)
                {
                    $current = $current->next;
                }
                return $current->value;
            }
        }
        public function rear()
        {
            if($this->rear == null)
            {
                return null;
            }
            else
            {
                return $this->rear->value;
            }
        }
        public function isEmpty()
        {
            if($this->rear == null)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        public function isFull(){
            $current = $this->rear;
            $counter = 1;
            while($current != null)
            {
                $current->next;
                $counter += 1;
            }
            if($counter == $this->maxSize)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
    $q = new Queue(5); // instantiates the Queue class with a maxSize attribute of 5
    echo $q->isEmpty() . "<br>"; // returns true
    $q->enqueue(100); // Queue: 100
    echo "<br>" . $q->rear(); // returns 100
    echo "<br>" . $q->front() . "<br>"; // returns 100
    $q->enqueue(20); // Queue: 100, 20
    $q->enqueue(2); // Queue: 100, 20, 2
    echo "<br><br>" . $q->front() . "<br><br>"; // returns 100
    $q->dequeue(); // Queue: 20, 2
    $q->enqueue(500); // Queue: 20, 2, 500
    $q->enqueue(12); // Queue: 20, 2, 500, 12
    $q->enqueue(30); // Queue: 20, 2, 500, 12, 30
    $q->isFull();
?>