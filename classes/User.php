<?php

require_once __DIR__.'/CreditCard.php';

class User extends CreditCard {
    public $email;
    public $discount = 0;
    public $credit_card;
}