<?php

namespace App\Processor;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use PrinsFrank\Standards\Language\LanguageAlpha2;
use PrinsFrank\Standards\Language\LanguageAlpha3Terminology;

class BugProcessor implements ProcessorInterface
{

    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        print_r(enum_exists(LanguageAlpha2::class));
    }
}
