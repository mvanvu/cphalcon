<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Http\Request;

use UnitTester;

class HasQueryCest
{
    /**
     * Tests Phalcon\Http\Request :: hasQuery()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function httpRequestHasQuery(UnitTester $I)
    {
        $I->wantToTest('Http\Request - hasQuery()');

        $I->skipTest('Need implementation');
    }
}
