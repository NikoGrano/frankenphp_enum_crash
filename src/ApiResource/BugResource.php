<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;
use ApiPlatform\OpenApi\Model\Operation;
use ApiPlatform\Symfony\Messenger\Processor;
use App\DTO\BugInput;
use App\Processor\BugProcessor;

#[ApiResource(
    operations: [
        new Post(
            uriTemplate: '/bugs',
            openapi: new Operation(
                operationId: 'BugsPostV1',
                tags: ['Bugs'],
            ),
            input: BugInput::class,
            name: 'BugsPostV1',
            processor: BugProcessor::class
        )
    ]
)]
class BugResource
{

}
