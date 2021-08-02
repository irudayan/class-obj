<?php
class student{
	//properties
	public $name;
	public $standard;

	//methods
	function set_name($name){
		$this->name=$name;
	}
	function get_name(){
		return $this->name;
		}
}
$obj1=new student();
$obj2=new student();

$obj1->set_name('Raj');
$obj2->set_name('1');

echo $obj1->get_name();
echo "<br>";
echo $obj2->get_name();
?>