<?php
class Account {
    public $accountNo;
    private $balance;
    private $type;

    public function __construct($accountNo, $type, $balance = 0.0) {
        $this->accountNo = $accountNo;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function credit($amount) {
        $this->balance = $this->balance + $amount;

        return $this->balance;
    }

    public function debit($amount) {
        $this->balance = $this->balance - $amount;

        return $this->balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getType() {
        return $this->type;
    }

    public function getAccountNo() {
        return $this->accountNo;
    }
}
