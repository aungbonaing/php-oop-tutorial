<?php

class Bank {
    private $customers; // declare

    public function __construct() {
        $this->customers = []; //initialise
    }

    public function addCustomer($customer) {
        $this->customers[] = $customer;

        return $customer;
    }

    public function getCustomers() {
        return $this->customers;
    }

    public function getCustomer($nric) {
        foreach($this->getCustomers() as $customer) {
            if ($customer->getNric() == $nric) {
                return $customer;
            }
        }

        return null;
    }
}
