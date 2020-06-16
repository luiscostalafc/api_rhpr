<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IpPMPR implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected $msg = 'The ip must be a valid ip in PMPR network.';
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cleanedValue = $this->cleanValue($value);
        if (!$cleanedValue) return false;
        $checkedIp = $this->checkIfIsIpOfPMPR($cleanedValue);
        if (!$checkedIp) return false;
        return true;
    }

    public function cleanValue($value)
    {
        $cleanedValue = preg_replace("/[^0-9.]/", "", $value);
        if (!$cleanedValue || !strpos($cleanedValue, '.')) {
            $this->msg = 'The ip must be numbers (0-9) and dots.';
            return false;
        }
        return $cleanedValue;
    }

    public function checkIfIsIpOfPMPR($ip)
    {
        $ipParts = explode('.', $ip);
        if (!$ipParts[0] || intval($ipParts[0]) !== 10) return false;
        if (count($ipParts) < 4 || strlen($ipParts[1]) < 2 || strlen($ipParts[2]) < 2) {
            $this->msg = 'The ip must be 4 parts in this format (xx.xxx.xxx.xx?)';
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->msg;
    }
}
