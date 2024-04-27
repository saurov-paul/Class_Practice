<?php
/* Write PHP Code here

Step 1: Initialize two variables with empty strings

Step 2: Write custom fuction to check 
if any given value between 0 to 100 is a number

Step 3: Check if the form has been submitted. If it has,
     collect age from the $_POST superglobal array.
  The data comes from a text input, so a value will always be sent for it
  when the form is submitted.

Step 4: Call the custom function to check if the value user submitted falls between
range 16 and 65. You may store boolean value as return type in function to check if the number is valid. 

Step 5: Check if condition is valid, if it is you can display
    "Age is valid" else "You must be 16-65 years old"

*/

$age = "";
$number = "";

function is_number($number, int $min = 0, $max = 100): bool{
  return ($number >= $min and $number <= $max);
}

if($_SERVER["REQUEST_METHOD"] == "post"){
  $age = $_POST["age"];
  $valid = is_number("age", 16,65);


if($valid){
  return print "Your are eligible. Welcome to our website ";
}else{
  return print "You are not allowed!!! You are Under AGE";
}
}
?>
<?php include 'includes/header.php'; ?>


<form action="validate-number-range.php" method="post">
<input type="search" name="age" /><br />
<input type="submit" value="Submit Age" />
</form>

<?php include 'includes/footer.php'; ?>