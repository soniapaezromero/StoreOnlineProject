<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Timestampable\Mapping\Event\Adapter;

use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Gedmo\Mapping\Event\Adapter\ODM as BaseAdapterODM;
use Gedmo\Mapping\Event\ClockAwareAdapterInterface;
use Gedmo\Timestampable\Mapping\Event\TimestampableAdapter;
use Psr\Clock\ClockInterface;

/**
 * Doctrine event adapter for ODM adapted
 * for Timestampable behavior
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 */
final class ODM extends BaseAdapterODM implements TimestampableAdapter, ClockAwareAdapterInterface
{
    /**
     * @var ClockInterface|null
     */
    private ?ClockInterface $clock = null;

    public function setClock(ClockInterface $clock): void
    {
        $this->clock = $clock;
    }

    /**
     * @param ClassMetadata $meta
     */
    public function getDateValue($meta, $field)
    {
        $datetime = $this->clock instanceof ClockInterface ? $this->clock->now() : new \DateTimeImmutable();
        $mapping = $meta->getFieldMapping($field);
        $type = $mapping['type'] ?? null;

        if ('timestamp' === $type) {
            return (int) $datetime->format('U');
        }

        if (in_array($type, ['date_immutable', 'time_immutable', 'datetime_immutable', 'datetimetz_immutable'], true)) {
            return $datetime;
        }

        return \DateTime::createFromImmutable($datetime);
    }
}
