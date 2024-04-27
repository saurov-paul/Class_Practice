<?php
/* Write your PHP code here

Step 1: Use and declare php strict types

Step 2:  Create a class for account (with its properties e.g. number, type and balance)

Step 3: Create a PHP constructor with argument types e.g. number, type and balance
If a balance is not given when creating the object, a default value of 0.00 should be used.

Step 4: Create two methods for deposit and withdraw which will update the value
stored in the balance property. They should be given arguments and return type declaration of float.

Step 5: Create two objects to represent a checking account and savings account. 

Step 6:  An HTML skeleton is drawn. The first row should show headings using 
the type property of two objects. To access property use the:
 - Name of the variable that holds the object
 - Object operator
 - Property name

Step 7: In the next table row show the balance property of the objects.

Step 8: In the third row of the table, the balance of each account is updated by calling deposit() or
withdraw() methods. These methods return the new value of balance property and this should be shown in page.
To call a method, you can use
- Name of the variable that holds the object
- Object operator
- Method name with its argument in parantheses

Step 9: In the final row of the table, previous step is repeated using different values. 



*/


declare(strict_types=1);

// Step 2: Create a class for account (with its properties e.g. number, type, and balance)
class Account {
    // Properties
    private string $number;
    private string $type;
    private float $balance;

    // Step 3: Create a PHP constructor with argument types e.g. number, type, and balance
    // If a balance is not given when creating the object, a default value of 0.00 should be used.
    public function __construct(string $number, string $type, float $balance = 0.00) {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    // Step 4: Create two methods for deposit and withdraw which will update the value stored in the balance property.
    public function deposit(float $amount): float {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
        } else {
            echo "Insufficient balance\n";
        }
        return $this->balance;
    }

    // Getter method for balance
    public function getBalance(): float {
        return $this->balance;
    }
}

// Step 5: Create two objects to represent a checking account and savings account.
$checkingAccount = new Account('123456789', 'Checking');
$savingsAccount = new Account('987654321', 'Savings', 1000.00);

?>

<?php include 'includes/header.php'; ?>
<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <th>Checking</th>
    <th>Savings</th>
    

  </tr>
  <tr>
    <td>23 June</td>
    <td><?= $checkingAmount->getbalance() ?></td>
    <td><?= $savingAccount->getbalance() ?></td>
    

  </tr>
  <tr>
    <td>24 June</td>
    <td><?= $checkingAccount->getBalance() ?></td>
    <td><?= $savingsAccount->getBalance() ?></td>

  </tr>
  <tr>
    <td>25 June</td>

  </tr>
</table>
<?php include 'includes/footer.php'; ?>