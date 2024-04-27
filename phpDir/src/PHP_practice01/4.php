<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	function calculate($num1, $num2){
		$result = $num1 + $num2;

		return $result;
	}

	$num1 = 12;
	$num2 = 8;

	echo "the sum of 2 numbers is : " . calculate($num1,$num2);

	echo "<br>";


	function greet($name, $greeting){

	echo "$name, $greeting";
	}

	greet("saurov", "good Morning");
	echo "<br>";
	greet("Mark", "good Night");
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>