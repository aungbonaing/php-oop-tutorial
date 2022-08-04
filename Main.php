<?php

require 'Account.php';
require 'Customer.php';

$accountNo = 'kbz-saving-001';
$account = new Account($accountNo, 'saving');
$account->credit(100);
$balance = $account->getBalance();
echo ('Account No: ' . $account->getAccountNo() . "\n");
echo ('Account Type: ' . $account->getType() . "\n");
echo('Remaining Balance:' . $balance . "\n");

echo("\n");

$accountNo2 = 'kbz-current-002'; 
$account2 = new Account($accountNo2, 'current');
$account2->credit(10);
$account2->debit(1);
$balance = $account2->getBalance();
echo ('Account No: ' . $account2->getAccountNo() . "\n");
echo ('Account Type: ' . $account2->getType() . "\n");
echo('Remaining Balance: ' . $balance . "\n");

echo("\n");

$customer = new Customer('nric001');
$customer->addAccount($account);
$acc = $customer->getAccount('kbz-saving-001');
print('customer\'s balance: '. $acc->getBalance());

echo("\n");