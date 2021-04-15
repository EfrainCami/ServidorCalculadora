<?php

use calculadora\calculadoraProcessor;
use service\CalculadoraHandler;
use Thrift\Factory\TBinaryProtocolFactory;
use Thrift\Factory\TTransportFactory;
use Thrift\Server\TServerSocket;
use Thrift\Server\TSimpleServer;

require_once "vendor/autoload.php";
define("PROJECT_ROOT", __DIR__);

$serviceProcessor = new calculadoraProcessor(new CalculadoraHandler());
$transportFactory = new TTransportFactory();
$protocolFactory = new TBinaryProtocolFactory();
$transport = new TServerSocket("0.0.0.0", "50000");
$server = new TSimpleServer(
    $serviceProcessor,
    $transport,
    $transportFactory,
    $transportFactory,
    $protocolFactory,
    $protocolFactory
);
echo "Funciona!";
$server->serve();