<?php

include('blockchain.php');

$Input = new Input();
$bc = new Blockchain();

$data = $Input->getInput("Enter Data");
$bc->addBlock($data);

$bc->printBlockchain();




