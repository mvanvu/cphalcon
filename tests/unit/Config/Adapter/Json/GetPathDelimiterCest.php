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

namespace Phalcon\Test\Unit\Config\Adapter\Json;

use Phalcon\Test\Fixtures\Traits\ConfigTrait;
use UnitTester;

class GetPathDelimiterCest
{
    use ConfigTrait;

    /**
     * Tests Phalcon\Config\Adapter\Json :: getPathDelimiter()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function configAdapterJsonGetPathDelimiter(UnitTester $I)
    {
        $I->wantToTest('Config\Adapter\Json - getPathDelimiter()');
        $this->checkGetPathDelimiter($I, 'Json');
    }
}
