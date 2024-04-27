<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:


		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */

			 $number1 = 5;
			 $number2 = 19;

			 $sum = ($number1 + $number2);

			 echo($sum);


			 $regularArray = ["apple", "banana", "orange", "mango"];

			 $associativeArray = [
				"friut1" => "apple",
				"friut2" => "banan",
				"friut3" => "orange",
				"friut4" => "mango",

			 ]




		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>