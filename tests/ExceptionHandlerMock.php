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

use Framework\Debug\ExceptionHandler;

class ExceptionHandlerMock extends ExceptionHandler
{
    public bool $testing = true;
    public ?bool $cli = null;

    protected function isCli() : bool
    {
        if ($this->cli) {
            return true;
        }
        if ($this->cli === false) {
            return false;
        }
        return parent::isCli();
    }
}
