<?php
declare(strict_types=1);

namespace Brotkrueml\Schema\Model\Type;

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Brotkrueml\Schema\Core\Model\AbstractType;
use Brotkrueml\Schema\Model\TypeTrait;

/**
 * Structured values are used when the value of a property has a more complex structure than simply being a textual value or a reference to another thing.
 */
final class StructuredValue extends AbstractType
{
    use TypeTrait\ThingTrait;
}
