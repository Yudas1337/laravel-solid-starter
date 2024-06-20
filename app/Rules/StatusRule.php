<?php

namespace App\Rules;

use App\Enums\ArticleStatusEnum;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StatusRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (in_array($value, [ArticleStatusEnum::DRAFT->value, ArticleStatusEnum::PUBLISHED->value])) {
            $fail("Status tidak valid");
        }
    }
}
