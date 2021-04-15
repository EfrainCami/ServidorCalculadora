<?php
namespace calculadora;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

interface calculadoraIf
{
    /**
     * @param int $num1
     * @param int $num2
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function adicion($num1, $num2);
    /**
     * @param int $minuendo
     * @param int $sustraendo
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function substraccion($minuendo, $sustraendo);
    /**
     * @param int $num1
     * @param int $num2
     * @return int
     * @throws \calculadora\CalculadoraException
     */
    public function multiplicacion($num1, $num2);
    /**
     * @param int $dividendo
     * @param int $divisor
     * @return double
     * @throws \calculadora\CalculadoraException
     */
    public function division($dividendo, $divisor);
}