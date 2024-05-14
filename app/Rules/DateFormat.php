<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class DateFormat implements Rule
{
    public function passes($attribute, $value)
    {
        // Explode the input value by the delimiter '/'
        $parts = explode('/', $value);

        // Check if there are exactly three parts (day, month, year)
        if (count($parts) !== 3) {
            return false;
        }

        // Extract day, month, and year from the parts
        [$day, $month, $year] = $parts;

        // Check if the extracted values are valid integers
        if (!ctype_digit($day) || !ctype_digit($month) || !ctype_digit($year)) {
            return false;
        }

        // Check if the date is valid
        return checkdate($month, $day, $year);
    }

    public function message()
    {
        return 'The :attribute must be in the format dd/mm/yyyy.';
    }

}
