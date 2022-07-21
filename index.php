<?php
require("./atm.php");

$client = new Atm();

$client->withdraw("123456789","1234",300);