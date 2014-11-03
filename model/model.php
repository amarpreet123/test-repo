<?php
include/once("model/book.php");
class Model{
public function getBookList()
{
return array(
"jungle"=> new book("jungle","r.piling","a classic book");
"moon"=> new book ("jungle","r.piling","a classic book");
"php for dummies"=>("jungle","r.piling","a classic book");
)
};
public function getBook($title)
{
$allBooks=$this->getBookList();
return $allBooks[$title];
}
}
?>