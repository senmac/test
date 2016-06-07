<?php
//$a = 1;
//echo ++$a * $a++ + $a;

//$a = "b";
//$b = "c";
//$c = "a";
//
//echo $$$$a;

//echo 08 * 15E-1;

//echo 5 + " 02";

//$a= 100;
//$b =10000E-1;
//echo $a === $b;

//echo 5 & 7;
//echo 12 ^ 9;
//
//
//$x = 5;
//echo $x >> 2;

//$d = 10;
//
//function myFunction($d)
//{
//return ++$d;
//}
//
//myFunction($d++);
//
//echo $d;

//$f = 7;
//
//function myFunction(&$d)
//{
//return $d++;
//}
//
//myFunction($f);
//echo $f;

//
//$a = array("1" => 5, 2 => 10, 3, "2" => 7);
//print_r($a);

// arraypop


//$a = array(1, 2, 3, 4, 5);
//echo array_shift($a);

//$a = array("5", "7", "11", "2", "10");
//$k =sort($a); 
//foreach($k as $i)
//{
//    print_r($i);
//}

//$a = array("a" => "apple", "orange", "peach", "orange");
//$b = array("b" => "apple", "banana", "orange");
//
//$r = array_diff($a, $b);
//foreach($r as $i)
//{echo "1";
//print_r($i);
//}

//Which of the following commands can remove a single element from an array? 


//class myClass
//{
//public $z;
//
//public function __construct($z = 5)
//{
//$this->z = 10;
//}
//}
//
//$a = new myClass();
//$b = $a;
//$b->z = 0;
//echo $a->z;


//class A
//{
//protected $x = 10;
//public function myMethod($x=0)
//{
//return $this->x;
//}
//}
//
//class B extends A
//{
//public function myMethod($x=0)
//{
//return 2 * $this->x;
//}
//}
//
////What is the output of the following code:
//
//$m = new B(5);
//echo $m->myMethod(); 


//class myClass
//{
//public $x;
//
//function myMethod()
//{
//echo $this->x;
//}
//}
//
//$a = new myClass();
//$a->x = 10;
//$b = $a;
//$b->x = 20;
//$c = clone $b;
//$c->x = 30;
//
//$a->myMethod();
//$b->myMethod();
//$c->myMethod();

//
//$a = array_combine(array('A', 'B', 'C'), array(1, 2, 3));
//print_r($a);

//for($i = 0; $i <= 5; $i++)
//echo $i;

//$vehicles = array('car', 'truck', 'van', 'bus');
//current($vehicles);
//next($vehicles);
//each($vehicles);
//echo current($vehicles); 

//switch (5 % 2)
//{
//case 1:
//echo 1;
//case 2:
//echo 2;
//case 3:
//echo 3;
//break;
//default:
//echo 0;
//}

//echo substr('abcdefgh', -4, -2);
//$s = 'Hello, world';
//$d = strstr($s, ',');
//echo $d;


//echo count(explode('.', 'This ... is ... a ... string'));

//Question:  34 of  36  -   Abstract Classes and Interfaces
//What is the difference between a class and an interface?
//	Exit Test
//
//A 		Classes can define methods whereas interfaces may only declare them.
//B 		Classes can only extend one parent class, but they can implement multiple interfaces.
//C 		All methods of an interface must be public, whereas the methods of classes can be private, protected, or public.
//D 		All of the above

$animal = array('type' => 'dog',
'name' => 'Max');

echo $b = (object) $animal; 

?>
