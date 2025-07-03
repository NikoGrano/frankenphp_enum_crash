<?php

namespace App\DTO;

use PrinsFrank\Standards\Country\CountryAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha2;

final class BugInput
{
    public function __construct(
        public CountryAlpha2 $country,
        public LanguageAlpha2 $language,
    )
    {
    }
}
