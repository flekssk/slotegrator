<?php

namespace Meals\Domain\Poll;

use Assert\Assertion;

class PollList
{
    /**
     * @var Poll[]
     */
    private array $polls;

    public function __construct(Poll ...$polls)
    {
        $this->polls = $polls;
    }

    /**
     * @return Poll[]
     */
    public function getPolls(): array
    {
        return $this->polls;
    }
}
