<?php

declare(strict_types=1);

namespace Francken\Tests\Infrastructure\EventSourcing;

use Broadway\EventHandling\EventBus;
use Broadway\EventSourcing\AggregateFactory\AggregateFactory;
use Broadway\EventSourcing\EventSourcingRepository;
use Broadway\EventStore\EventStore;
use Francken\Infrastructure\EventSourcing\Factory;
use Francken\Domain\Members\Member;
use PHPUnit\Framework\TestCase as TestCase;

class FactoryTest extends TestCase
{
    /** @test */
    function it_builds_a_new_event_sourcing_repository()
    {
        $store = $this->prophesize(EventStore::class);
        $bus = $this->prophesize(EventBus::class);
        $aggregateFactory = $this->prophesize(AggregateFactory::class);

        $factory = new Factory($store->reveal(), $bus->reveal(), $aggregateFactory->reveal());

        $repository = $factory->buildForAggregate(Member::class);

        $this->assertInstanceOf(
            EventSourcingRepository::class,
            $repository,
            'This should have been caught by the type system'
        );
    }

    /** @test */
    function it_throws_when_building_a_repository_for_a_non_aggregate_root_class()
    {
        $store = $this->prophesize(EventStore::class);
        $bus = $this->prophesize(EventBus::class);
        $aggregateFactory = $this->prophesize(AggregateFactory::class);

        $factory = new Factory($store->reveal(), $bus->reveal(), $aggregateFactory->reveal());

        $this->expectException(\Assert\InvalidArgumentException::class);
        $factory->buildForAggregate('Cat');
    }
}
