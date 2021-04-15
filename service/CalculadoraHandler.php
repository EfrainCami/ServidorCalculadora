<?php

namespace service;
use calculadora\CalculadoraException;
use calculadora\calculadoraIf;

class CalculadoraHandler implements calculadoraIf
{

    public function adicion($numero1, $numero2)
    {
        $total = 0;
        if(is_int($numero1) && is_int($numero2)){
            $total = $numero1 + $numero2;
        } else {
            $calculadoraException = new CalculadoraException();
            $calculadoraException->mensaje = "Los valores introducidos no son enteros";
            throw $calculadoraException;
        }
        return $total;
    }


    public function substraccion($minuendo, $sustraendo)
    {
        $resto = 0;
        if(is_int($minuendo) && is_int($sustraendo)){
            $resto = $minuendo - $sustraendo;
        } else {
            $calculadoraException = new CalculadoraException();
            $calculadoraException->mensaje = "Los valores introducidos no son enteros";
            throw $calculadoraException;
        }
        return $resto;
    }


    public function multiplicacion($factor1, $factor2)
    {
        $producto = 0;
        if(is_int($factor1) && is_int($factor2)){
            $producto = $factor1 * $factor2;
        } else {
            $calculadoraException = new CalculadoraException();
            $calculadoraException->mensaje = "Los valores introducidos no son enteros";
            throw $calculadoraException;
        }
        return $producto;
    }

    public function division($dividendo, $divisor)
    {
        $cociente = 0;
        if(is_int($dividendo) && is_int($divisor)){
            if($divisor != 0){
                $cociente = $dividendo / $divisor;
            } else {
                $calculadoraException = new CalculadoraException();
                $calculadoraException->mensaje = "No se puede divir entre 0";
                throw $calculadoraException;
            }
        } else {
            $calculadoraException = new CalculadoraException();
            $calculadoraException->mensaje = "Los valores introducidos no son enteros";
            throw $calculadoraException;
        }
        return $cociente;
    }
}