<?php
include_once("model/model.php")
class Controller
{
public $string;
public function_construct(_
{
$this=>model=new Model();
}

public function invoke()
{
if((!isset($_GET['book]))
{
$books=$this->model>getBookList();
include 'view/booklist.php';
}
else
{
$book=$this->model->getBook($_GET['book']);
include 'view/viewbook.php';
}
}
}
?>

