<?php

require 'Account.php';
require 'Customer.php';

// Account creation
$accountNo = 'kbz-saving-001';
$account = new Account($accountNo, 'saving');

// Account creation
$accountNo2 = 'kbz-current-002'; 
$account2 = new Account($accountNo2, 'current');


$customer = new Customer('nric001');
$customer->addAccount($account);
$customer->addAccount($account2);
$accounts = $customer->getAccounts();

foreach($accounts as $account) {
    $accountNo = $account->getAccountNo();
    $balance = $account->getBalance();

    echo ("Account No: {$accountNo} \n");
    echo ("Account Balance: {$balance} \n");
    echo ("------------------------------\n");
}
echo ("\n\n");

$acc = $customer->getAccount('kbz-saving-001');
$acc->credit(100);

foreach($accounts as $account) {
    $accountNo = $account->getAccountNo();
    $balance = $account->getBalance();

    echo ("Account No: {$accountNo} \n");
    echo ("Account Balance: {$balance} \n");
    echo ("------------------------------\n");
}
echo ("\n\n");

$acc->debit(5);

foreach($accounts as $account) {
    $accountNo = $account->getAccountNo();
    $balance = $account->getBalance();

    echo ("Account No: {$accountNo} \n");
    echo ("Account Balance: {$balance} \n");
    echo ("------------------------------\n");
}