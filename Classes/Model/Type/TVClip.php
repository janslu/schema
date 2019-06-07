<?php
declare(strict_types = 1);

namespace Brotkrueml\Schema\Model\Type;

/**
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * A short TV program or a segment/part of a TV program.
 *
 * schema.org version 3.6
 */
class TVClip extends Clip
{
    public function __construct()
    {
        parent::__construct();
    }
}