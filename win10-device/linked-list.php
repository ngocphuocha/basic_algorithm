<?php
class Node
{
    public $data;
    public $next;
}

class LinkedList
{
    public $head; // the head of node

    public function __construct()
    {
        $this->head = null; // set default linked list is empty
    }

    public function append($data)
    {
        // allocate node
        $newNode = new Node();
        $newNode->data = $data; // assign data element
        $newNode->next = null; // assign null to the next of new node

        if ($this->head == null) {
            $this->head = $newNode;
            return; // exit function
        } else { //Else, traverse to the last node
            $temp = new Node();
            $temp = $this->head;
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            // Change the next of last node to new node
            $temp->next = $newNode;
        }
    }

    public function prepend($data)
    {
        // allocate node
        $newNode = new Node();
        $newNode->data = $data;
        // Link new node before a head node
        $newNode->next = $this->head;
        // change pointer from current head to new node
        $this->head = $newNode;
    }

    public function deleteWithValue($data)
    {
        $temp = new Node();
        $temp = $this->head;
        if ($this->head == null) {
            return; // exit function
        }
        if ($temp->data == $data) {
            // echo '<pre>';
            // var_dump($temp->next);
            // exit();
            $this->head = $temp->next;
        }
        while ($temp->next != null) {
            if ($temp->next->data == $data) {
                $temp->next = $temp->next->next;
                return;
            }
            $temp = $temp->next;
        }
    }
    // Print linked list
    public function printList()
    {
        if ($this->head != null) {
            $temp = new Node();
            $temp = $this->head;
            echo 'The list contain: ';

            // Traverse the linked list
            while ($temp != null) {
                echo $temp->data . ' ';
                $temp = $temp->next; // move pointer to the next node
            }
        } else {
            echo 'The list is empty';
        }
    }
}
$myList = new LinkedList();
$myList->append(10);
$myList->append(20);
$myList->append(30);
// $myList->prepend(40);
$myList->deleteWithValue(30);
$myList->printList();
