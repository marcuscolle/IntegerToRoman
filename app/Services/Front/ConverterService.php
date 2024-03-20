<?php

namespace App\Services\Front;

use Exception;

class ConverterService
{
    private int|string $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * @throws Exception
     */
    public function convertInteger(): string
    {
        $roman = '';
        $numerals = config('data.numerals.conversion');

        foreach ($numerals as $key => $value) {

            while ($this->number >= $value) {
                $roman .= $key;
                $this->number -= $value;
            }
        }

        if (!$roman) {
            throw new Exception(trans('messages.invalid_number'));
        }

        return $roman;

    }

    /**
     * @throws Exception
     */
    public function convertRoman(): string
    {
        $integer = 0;
        $numerals = config('data.numerals.conversion');

        $prevValue = null;

        foreach (str_split(strtoupper($this->number)) as $roman) {
            if (!isset($numerals[$roman])) {
                throw new Exception('Invalid Roman numeral: ' . $this->number);
            }

            $value = $numerals[$roman];

            if ($prevValue !== null && $value > $prevValue) {
                $integer += $value - 2 * $prevValue;
            } else {
                $integer += $value;
            }

            $prevValue = $value;
        }

        return $integer;
    }


    /**
     * @throws Exception
     */
    public function convert(): string
    {
        if (!is_numeric($this->number)) {
            return $this->convertRoman();
        }

        return $this->convertInteger();
    }


}
