<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AgeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dateOfBirth = Carbon::parse($value);
        $age = Carbon::now()->diffInYears($dateOfBirth);

        if ($age < 24) {
            $fail('You must be at least 24 years old to register.');
        }
    }
}
