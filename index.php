<?php

// Parent Class
class User {
  public $name;
  public $age;
  public $gender;

  public function __construct($name, $age, $gender) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function show_details() {
    echo "Personal Details \n";
    echo "Name " . $this->name . "\n";
    echo "Age " . $this->age . "\n";
    echo "Gender " . $this->gender . "\n";
  }
}

// Child Class
class Bank extends User {
  public $balance;

  public function __construct($name, $age, $gender) {
    parent::__construct($name, $age, $gender);
    $this->balance = 0;
  }

  public function deposit($amount) {
    $this->amount = $amount;
    $this->balance = $this->balance + $this->amount;
    echo "Account has been updated: $ " . $this->balance . "\n";
  }

  public function withdraw($amount) {
    $this->amount = $amount;
    if ($this->amount > $this->balance) {
      echo "Insufficient Fund | Balance Available : $ " . $this->balance . "\n";
    } else {
      $this->balance = $this->balance - $this->amount;
      echo "Account Balance has been updated : $ " . $this->balance . "\n";
    }
  }

  public function view_balance() {
    $this->show_details();
    echo "Account Balance : $ " . $this->balance . "\n";
  }
}

$User = new Bank ("anus",17,"male");
echo $User ->show_details(); 
echo $User ->deposit(10000);
echo $User ->withdraw(100);
echo $User ->view_balance(9000);
?>