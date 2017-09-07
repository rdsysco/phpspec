<?php
/**
 * Filename: ${NAME}.
 * User: Mithredate
 * Date: Sep, 2017
 */
require_once __DIR__. '/vendor/autoload.php';

$calculator = new \RDSysCo\Calculator\Calculator();
$invoker = new \RDSysCo\Calculator\Invoker();

$ui = new \RDSysCo\Calculator\UI($calculator, $invoker);

$ui->add(2);
$ui->mul(3);
$ui->undo();
$ui->mul(2);
$ui->mul(4);
$ui->sub(2);
$ui->div(7);
$ui->div(2);
$ui->undo();
echo $ui->getResult();