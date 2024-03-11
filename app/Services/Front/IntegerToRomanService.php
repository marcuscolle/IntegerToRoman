<?php

namespace App\Services\Front;

use Exception;

class IntegerToRomanService
{
    private int $integer;

    public function __construct(int $integer)
    {
        $this->integer = $integer;
    }

    /**
     * @throws Exception
     */
    public function convert(): string
    {
        $roman = '';
        $numerals = config('data.numerals.conversion');

        foreach ($numerals as $key => $value) {

            while($this->integer >= $value) {
                $roman .= $key;
                $this->integer -= $value;
            }
        }

        if(!$roman) {
            throw new Exception(trans('messages.invalid_number'));
        }

        return $roman;

    }


}
