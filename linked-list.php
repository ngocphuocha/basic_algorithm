<?php

class Node
{
    public $data;
    public $next;
}

class LinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null; // create empty linked list
    }

    //Add new element at the end of the list
    public function append($newElement)
    {
        $newNode = new Node();
        $newNode->data = $newElement;
        $newNode->next = null;

        $temp = new Node();
        $temp = $this->head;

        if ($temp == null) {
            $this->head = $newNode;
        } else {
            while ($temp->next != null) {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    public function prepend($data)
    {
        $newHead = new Node();
        $newHead->data = $data;
        $newHead->next = $this->head;
        $this->head = $newHead; // change pointer of the head = $new head
    }

    public  function deleteWithValue($data)
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp == null) {
            return;
        }
        //if want delete head
        if ($temp->data == $data) {
            $this->head = $temp->next; // move pointer from head to the next node
            return;
        }
        // traverse the linked list
        while ($temp->next != null) {
            if ($temp->next->data == $data) {
                $temp->next = $temp->next->next;
                return; // success and exit method
            }
            $temp = $temp->next; // move poiter to the next node
        }
    }


    //display the content of the list
    public function printList()
    {
        $temp = new Node();
        $temp = $this->head;
        if ($temp != null) {
            echo "\nThe list contains: ";
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
        } else {
            echo "\nThe list is empty.";
        }
    }
}
$myList = new LinkedList();

$myList->append(10);
$myList->append(10);
$myList->append(10);
$myList->append(20);
$myList->append(30);
$myList->append(40);
$myList->prepend(50);
$myList->deleteWithValue(10);
$myList->deleteWithValue(10);
$myList->printList();
