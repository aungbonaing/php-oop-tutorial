<?php
class Customer {
    private $accounts; // Declare
    private $nric;

    public function __construct($nric) {
        $this->accounts = []; // Initialise
        $this->nric = $nric;
    }

    public function getNric() {
        return $this->nric;
    }

    public function addAccount($account) {
        $this->accounts[] = $account; //accounts.push(account)
    }

    public function getAccount($accountNo) {
        foreach($this->accounts as $account) {
            if ($account->getAccountNo() == $accountNo) {
                return $account;
            }
        }

        return null;
    }

    public function getAccounts() {
        return $this->accounts;
    }

    public function credit($accountNo, $amount) {
        $acc = $this->getAccount($accountNo);

        return $acc->credit($amount);
    }

    public function debit($accountNo, $amount) {
        $acc = $this->getAccount($accountNo);

        return $acc->debit($amount);
    }
}
