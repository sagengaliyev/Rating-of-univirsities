<!DOCTYPE html>
<html>
<head>
	<title>List of the universities</title>
</head>
<body>
	<?php 
	// --CLASS--
	// --ABSTRACT CLASS--
    abstract Class Raiting {
		// --PUBLIC--
		 public $name; 
		 public $city;
		 // --PRIVATE--
		 private $total_score;
		
		 // --PROTECTED--
		 protected $IT_Score;
		 protected $mathScore;
         // --CONSTRUCTOR--
         function __construct($name, $city){
		 	$this->name=$name;
		 	$this->city=$city;
		 }
         //--SET functions--
        function ITScore($IT_Score){
		 	$this->IT_Score=$IT_Score;
		 }

		 function mathScore($mathScore){
		 	$this->mathScore=$mathScore;
		 }
        // --GET fuctions--
        function getIT(){
		 	return $this->IT_Score;
		 }
		 function getMath(){
		 	return $this->mathScore;
		 }
         //--ABSTRACT FUNCTION--
         abstract function totalScore();
        // --DESTRUCTOR--
		 function __destruct(){
		 	echo "<br>";
		 	echo "University name is {$this->name} and  location of the university is {$this->city}.";
		 	echo "<br>";
		 	echo "IT score is {$this->getMath()} ";
		 	echo "<br>";
		 	echo "Maths science's score is {$this->getIT()}";
		 	echo "<br>";
             echo "Total score is {$this->totalScore()}";
             echo "<br>";
		 }
}

//--CLASS--
// --INHERITANCE--
// --FINAL CLASS--
final class University extends Raiting{

	//--OVERRIDING--
	//--FINAL FUNCTION
	final function totalScore(){
	 	$totalScore=($this->IT_Score+$this->mathScore)/2;
	 	return $totalScore;
	 }

}
echo "<h1>List of universities</h1>";
//--OBJECTS-- the MAX score is 100
$Baishev = new University("Baishev", "Aktobe");

$Baishev->ITScore(15);
$Baishev->mathScore(20);
$Baishev->totalScore();

$KEPUFE = new University("KEPUFE", "Kostanai");
$KEPUFE->ITScore(87);
$KEPUFE->mathScore(100);
$KEPUFE->totalScore();


$EIU = new University("EIU", "Pavlodar");
$EIU->ITScore(46);
$EIU->mathScore(48);
$EIU->totalScore();


$ALMAU = new University("ALMAU", "Almaty");
$ALMAU->ITScore(80);
$ALMAU->mathScore(56);
$ALMAU->totalScore();


$HUS = new University("Gumanitary University named M.Saparbaev	", "Turkistan");
$HUS->ITScore(0);
$HUS->mathScore(0);
$HUS->totalScore();


$Kaspii = new University("Kaspii", "Aktau");
$Kaspii->ITScore(59);
$Kaspii->mathScore(26);
$Kaspii->totalScore();

$KGIU = new University("Karagandy Goverment Industrial University", "Karagandy");
$KGIU->ITScore(47);
$KGIU->mathScore(59);
$KGIU->totalScore();

$KGU = new University("	Kokshetau Governmnet University named Sh.Ualikhanov", "Kokshetau");
$KGU->ITScore(69);
$KGU->mathScore(75);
$KGU->totalScore();

$ZhGU = new University("	Zhetysu Government University named I.Zhansugurova", "Taldyqorgan");
$ZhGU->ITScore(60);
$ZhGU->mathScore(79);
$ZhGU->totalScore();

$Otemisov = new University("	University named M.Utemisov", "Oral");
$Otemisov->ITScore(80);
$Otemisov->mathScore(78);
$Otemisov->totalScore();

$ZhangirHan = new University("University named Zhangir Han", "Oral");
$ZhangirHan->ITScore(65);
$ZhangirHan->mathScore(55);
$ZhangirHan->totalScore();

$TU = new University("Technical University named Serikbaev", "VKO");
$TU->ITScore(46);
$TU->mathScore(74);
$TU->totalScore();

$Aman = new University("University named S.Amazholov", "Taldyqorgan");
$Aman->ITScore(10);
$Aman->mathScore(24);
$Aman->totalScore();

$ZhU = new University("ZhU", "Aktobe");
$ZhU->ITScore(30);
$ZhU->mathScore(93);
$ZhU->totalScore();

$Turan = new University("Turan", "Astana");
$Turan->ITScore(26);
$Turan->mathScore(17);
$Turan->totalScore();

$KarGU = new University("KarGU", "Karagandy");
$KarGU->ITScore(70);
$KarGU->mathScore(80);
$KarGU->totalScore();

$Agrar = new University("Agrarka", "Astana");
$Agrar->ITScore(50);
$Agrar->mathScore(10);
$Agrar->totalScore();

$Auez = new University("University named Auezov", "Shymkent");
$Auez->ITScore(20);
$Auez->mathScore(26);
$Auez->totalScore();

$ENU = new University("ENU", "Astana");
$ENU->ITScore(75);
$ENU->mathScore(65);
$ENU->totalScore();

$KazNU = new University("KazNU", "Almaty");
$KazNU->ITScore(85);
$KazNU->mathScore(95);
$KazNU->totalScore();


?>

<h>View the table</h>
<form action="main2w.php" >
<input type="submit" value="TABLE">
</form>




</body>
</html>