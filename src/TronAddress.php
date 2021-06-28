<?php

namespace TronTool;

use Web3\Contracts\Types\Address as EthAddress;

class TronAddress extends EthAddress
{
    function inputFormat($value, $name)
    {
        $hex = Address::decode($value);
        return parent::inputFormat($hex, $name);
    }

    public function outputFormat($value, $name)
    {
        $hex = parent::outputFormat($value, $name);
        return Address::encode($hex);
    }
}