<?php

namespace Assetic\Test\Filter\GoogleClosure;

use Assetic\Filter\GoogleClosure\CompilerJarFilter;

/*
 * This file is part of the Assetic package.
 *
 * (c) Kris Wallsmith <kris.wallsmith@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class CompilerJarFilterTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $filter = new CompilerJarFilter('/path/to/jar');
        $this->assertInstanceOf('Assetic\\Filter\\FilterInterface', $filter, 'CompilerJarFilter implements FilterInterface');
    }
}
