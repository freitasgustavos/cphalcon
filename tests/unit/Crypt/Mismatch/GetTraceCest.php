<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Crypt\Mismatch;

use UnitTester;

/**
 * Class GetTraceCest
 */
class GetTraceCest
{
    /**
     * Tests Phalcon\Crypt\Mismatch :: getTrace()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cryptMismatchGetTrace(UnitTester $I)
    {
        $I->wantToTest('Crypt\Mismatch - getTrace()');
        $I->skipTest('Need implementation');
    }
}
