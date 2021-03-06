<?php

declare(strict_types=1);

namespace Francken\Domain\Members;

use DateTimeImmutable;
use Broadway\Serializer\Serializable as SerializableInterface;
use Francken\Domain\Serializable;

final class Study implements SerializableInterface
{
    use Serializable;

    private $study;
    private $startDate;
    private $graduationDate;

    public function __construct(
        string $study,
        DateTimeImmutable $startDate,
        DateTimeImmutable $graduationDate = null
    ) {
        $this->study = $study;
        $this->startDate = $startDate;
        $this->graduationDate = $graduationDate;
    }

    public function study() : string
    {
        return $this->study;
    }

    public function startDate() : DateTimeImmutable
    {
        return $this->startDate;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function graduationDate()
    {
        return $this->graduationDate;
    }
}
