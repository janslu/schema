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
 * The act of physically/electronically dispatching an object for transfer from an origin to a destination.Related actions:
 */
final class SendAction extends AbstractType
{
    use TypeTrait\ActionTrait;
    use TypeTrait\SendActionTrait;
    use TypeTrait\ThingTrait;
    use TypeTrait\TransferActionTrait;
}
