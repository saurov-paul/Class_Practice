<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 $language = "PHP";

 if ($language == "python"){
echo "i love python";
 }elseif($language == "javaScript"){
	echo "i love JavaScript";
 }else{
	echo "I Love PHP <br>";
 };

for ($i = 0; $i <= 10; $i++){
	echo $i ;
}


$month = "may";

switch ($month){
	case "january":
		echo "Hoo! this is month 1 january";
		break;
		case "february";
		echo "Hoo! this is month 2 february";
		break;
		case "march";
		echo "Hoo! this is month 3 March";
		break;
		case "april";
		echo "Hoo! this is month 4 april";
		break;
		case "may";
		echo "Hoo! this is month 5 May";
		break;
		default:
		echo "This month is comming soon";
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>