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
 * Classification of the album by it\&#039;s type of content: soundtrack, live album, studio album, etc.
 */
final class MusicAlbumProductionType extends AbstractType
{
    use TypeTrait\ThingTrait;
}
