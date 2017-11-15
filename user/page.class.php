<?php 
	class Page{
 //属性
 public $offset;
 public $length;
 public $prev;
 public $next;
 public function __construct($tot,$length){
    $this->tot=$tot;
    $this->length=$length;
    $page=$_GET['p']?$_GET['p']:1;
    $this->offset=($page-1)*$this->length;
    //总共的页数
	 $pages=ceil($tot/$this->length);
	 $this->prev=$page-1;
	  if($this->prev<=1){
	   $this->prev=1;
	 }
	  //下一页
	 $this->next=$page+1;
	 if($this->next>=$pages){
	   $this->next=$pages;
	 }

	
}
function show(){
	echo "<a href='index.php?p={$this->prev }' class='btn btn-primary '>上一页</a><a href='index.php?p= {$this->next}' class='btn btn-danger '>下一页</a>";

}
}
?>