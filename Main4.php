<?php

require 'Account.php';
require 'Customer.php';
require 'Bank.php';

$bank = new Bank();

// Account creation
$accountNo = 'kbz-saving-001';
$account = new Account($accountNo, 'saving');

// Account creation
$accountNo2 = 'kbz-current-002'; 
$account2 = new Account($accountNo2, 'current');


$customer = new Customer('nric001');
$customer->addAccount($account);
$customer->addAccount($account2);

$customer2 = new Customer('nric002');
$customer2->addAccount(new Account('kbz-saving-003', 'saving'));

$bank->addCustomer($customer);
$bank->addCustomer($customer2);

foreach($bank->getCustomers() as $cust) {
    $nric = $cust->getNric();
    echo ("nric: $nric \n");
}

// $bank->credit('nric001', 'kbz-saving-001', 100);

