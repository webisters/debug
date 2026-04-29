<?php declare(strict_types=1);
/*
 * This file is part of Webisters Debug Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Debug;

use Framework\Debug\Collector;

class CollectorMock extends Collector
{
    public array $activities = [];

    public function getContents() : string
    {
        return '<p>Collector: ' . $this->getName() . '</p>';
    }
}
