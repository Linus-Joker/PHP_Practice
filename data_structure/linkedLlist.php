<?php

class Node
{
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = NULL;
    }
}

class LinkedList
{

    function __construct()
    {
        $this->head = NULL;
    }

    //insert data to head
    public function insert_head($value)
    {
        $newNode = new Node($value);
        if ($this->head == NULL) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    //insert data to tail
    public function insert_tail($value)
    {
        //create new node
        $newNode = new Node($value);

        //if head is null,insert data to head
        if (is_null($this->head)) {
            $this->insert_head($value);
        } else {
            $temporary = $this->head;

            //while find last empty node
            while ($temporary->next != NULL) {
                $temporary = $temporary->next;
            }

            //put new data on the last node
            $temporary->next = $newNode;
        }
    }

    /**
     * 找到節點的方法很多，簡單的線性查找
     */
    public function find_node($value)
    {
        if (is_null($this->head)) {
            echo 'list is empty';
        } else {
            $current = $this->head;

            while ($current->value != $value) {
                $current = $current->next;
                //if 當前的下一個是NULL，代表已經到最後一項了
                if ($current->next == NULL) {
                    break;
                }
            }

            if ($current->value == $value) {
                echo 'find data:' . $value;
            } else {
                echo 'cannot find data:' . $value;
            }
        }
    }

    public function cal_list_length()
    {
        if (is_null($this->head)) {
            echo 'list is empty';
        } else {
            $current = $this->head;
            $sum = 0;
            while ($current != NULL) {
                $sum++;
                $current = $current->next;
            }

            echo "list total:" . $sum;
        }
    }

    public function print_node()
    {
        if (is_null($this->head)) {
            echo "list is empty";
        } else {
            $current = $this->head;
            // echo $current->value;
            // var_dump($current->next);
            while (!is_null($current)) {
                echo $current->value . "\n";
                $current = $current->next;
            }
        }
    }

    public function delete_node($value)
    {
        $current = $this->head;

        while ($current != NULL && $current->value != $value) {
            $per = $current;
            $current = $current->next;
        }

        if (is_null($current)) {
            echo "list cannot find value:" . $value;
        } elseif ($current == $this->head) {
            $this->head = $current->next;
            $current = NULL;
        } else {
            $per->next = $current->next;
            $current = NULL;
        }
    }
}

$list = new LinkedList;

//將資料插入第一項
$list->insert_head(10);
//insert data
$list->insert_tail(20);
$list->insert_tail(30);

//print all node
$list->print_node();

$list->delete_node(20);

$list->print_node();

//find one node
// $list->find_node(20);

$list->cal_list_length();
