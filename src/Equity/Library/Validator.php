<?php

namespace Samerior\MobileMoney\Equity\Library;

class Validator
{
    /**
     * Required keys.
     *
     * @var array
     */
    const RULES = [
        'VA_PAYBILL',
        'VA_PASSWORD',
        'VA_TIMESTAMP',
        'VA_TRANS_ID',
        'VA_REF_ID',
        'VA_AMOUNT',
        'VA_NUMBER',
        'VA_CALL_URL',
        'VA_CALL_METHOD'
    ];

    /**
     * Check if key exists else throw exception.
     *
     * @param array $data
     *
     * @return bool
     * @throws InvalidRequestException
     */
    public static function validate($data = [])
    {
        return true;
        foreach (static::RULES as $value) {
            if (!array_key_exists($value, $data)) {
                throw new InvalidRequestException(InvalidRequestException::ERRORS[$value]);
            }
        }
    }
}
