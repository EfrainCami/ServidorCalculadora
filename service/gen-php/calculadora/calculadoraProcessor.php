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

class calculadoraProcessor
{
    protected $handler_ = null;
    public function __construct($handler)
    {
        $this->handler_ = $handler;
    }

    public function process($input, $output)
    {
        $rseqid = 0;
        $fname = null;
        $mtype = 0;

        $input->readMessageBegin($fname, $mtype, $rseqid);
        $methodname = 'process_'.$fname;
        if (!method_exists($this, $methodname)) {
              $input->skip(TType::STRUCT);
              $input->readMessageEnd();
              $x = new TApplicationException('Function '.$fname.' not implemented.', TApplicationException::UNKNOWN_METHOD);
              $output->writeMessageBegin($fname, TMessageType::EXCEPTION, $rseqid);
              $x->write($output);
              $output->writeMessageEnd();
              $output->getTransport()->flush();
              return;
        }
        $this->$methodname($rseqid, $input, $output);
        return true;
    }

    protected function process_adicion($seqid, $input, $output)
    {
        $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
        if ($bin_accel) {
            $args = thrift_protocol_read_binary_after_message_begin(
                $input,
                '\calculadora\calculadora_adicion_args',
                $input->isStrictRead()
            );
        } else {
            $args = new \calculadora\calculadora_adicion_args();
            $args->read($input);
        }
        $input->readMessageEnd();
        $result = new \calculadora\calculadora_adicion_result();
        try {
            $result->success = $this->handler_->adicion($args->num1, $args->num2);
        } catch (\calculadora\CalculadoraException $calculadoraException) {
            $result->calculadoraException = $calculadoraException;
        }
        $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $output,
                'adicion',
                TMessageType::REPLY,
                $result,
                $seqid,
                $output->isStrictWrite()
            );
        } else {
            $output->writeMessageBegin('adicion', TMessageType::REPLY, $seqid);
            $result->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
        }
    }
    protected function process_substraccion($seqid, $input, $output)
    {
        $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
        if ($bin_accel) {
            $args = thrift_protocol_read_binary_after_message_begin(
                $input,
                '\calculadora\calculadora_substraccion_args',
                $input->isStrictRead()
            );
        } else {
            $args = new \calculadora\calculadora_substraccion_args();
            $args->read($input);
        }
        $input->readMessageEnd();
        $result = new \calculadora\calculadora_substraccion_result();
        try {
            $result->success = $this->handler_->substraccion($args->minuendo, $args->sustraendo);
        } catch (\calculadora\CalculadoraException $calculadoraException) {
            $result->calculadoraException = $calculadoraException;
        }
        $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $output,
                'substraccion',
                TMessageType::REPLY,
                $result,
                $seqid,
                $output->isStrictWrite()
            );
        } else {
            $output->writeMessageBegin('substraccion', TMessageType::REPLY, $seqid);
            $result->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
        }
    }
    protected function process_multiplicacion($seqid, $input, $output)
    {
        $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
        if ($bin_accel) {
            $args = thrift_protocol_read_binary_after_message_begin(
                $input,
                '\calculadora\calculadora_multiplicacion_args',
                $input->isStrictRead()
            );
        } else {
            $args = new \calculadora\calculadora_multiplicacion_args();
            $args->read($input);
        }
        $input->readMessageEnd();
        $result = new \calculadora\calculadora_multiplicacion_result();
        try {
            $result->success = $this->handler_->multiplicacion($args->num1, $args->num2);
        } catch (\calculadora\CalculadoraException $calculadoraException) {
            $result->calculadoraException = $calculadoraException;
        }
        $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $output,
                'multiplicacion',
                TMessageType::REPLY,
                $result,
                $seqid,
                $output->isStrictWrite()
            );
        } else {
            $output->writeMessageBegin('multiplicacion', TMessageType::REPLY, $seqid);
            $result->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
        }
    }
    protected function process_division($seqid, $input, $output)
    {
        $bin_accel = ($input instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_read_binary_after_message_begin');
        if ($bin_accel) {
            $args = thrift_protocol_read_binary_after_message_begin(
                $input,
                '\calculadora\calculadora_division_args',
                $input->isStrictRead()
            );
        } else {
            $args = new \calculadora\calculadora_division_args();
            $args->read($input);
        }
        $input->readMessageEnd();
        $result = new \calculadora\calculadora_division_result();
        try {
            $result->success = $this->handler_->division($args->dividendo, $args->divisor);
        } catch (\calculadora\CalculadoraException $calculadoraException) {
            $result->calculadoraException = $calculadoraException;
        }
        $bin_accel = ($output instanceof TBinaryProtocolAccelerated) && function_exists('thrift_protocol_write_binary');
        if ($bin_accel) {
            thrift_protocol_write_binary(
                $output,
                'division',
                TMessageType::REPLY,
                $result,
                $seqid,
                $output->isStrictWrite()
            );
        } else {
            $output->writeMessageBegin('division', TMessageType::REPLY, $seqid);
            $result->write($output);
            $output->writeMessageEnd();
            $output->getTransport()->flush();
        }
    }
}
