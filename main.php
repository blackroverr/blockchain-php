<?php

include('blockchain.php');

$Input = new Input();
$bc = new Blockchain();
// echo "Username:" . $username;

$username = $Input->getInput("Enter Data");
$bc->addBlock($username);

$bc->printBlockchain();




