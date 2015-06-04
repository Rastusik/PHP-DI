<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\IntegrationTest\Issues\Issue257;

use DI\Annotation\Inject;

abstract class ParentClass
{
    /**
     * @Inject
     * @var \stdClass
     */
    private $property;

    /**
     * @return \stdClass
     */
    public function getProperty()
    {
        return $this->property;
    }
}
