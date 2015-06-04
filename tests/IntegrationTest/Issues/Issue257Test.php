<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace DI\Test\IntegrationTest\Issues;

use DI\ContainerBuilder;
use DI\Test\IntegrationTest\Issues\Issue257\SubClass;

/**
 * Test injections in private properties of a parent class that have the Inject annotation.
 *
 * @see https://github.com/mnapoli/PHP-DI/issues/257
 *
 * @coversNothing
 */
class Issue257Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function should_inject_annotated_private_properties_of_parent_classes()
    {
        $builder = new ContainerBuilder;
        $builder->useAnnotations(true);
        $container = $builder->build();

        /** @var SubClass $obj */
        $obj = $container->get(__NAMESPACE__ . '\Issue257\SubClass');

        $this->assertInstanceOf('stdClass', $obj->getProperty());
    }
}
