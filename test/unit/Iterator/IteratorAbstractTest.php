<?php

/**
 * Abstract Iterator test
 *
 * @version     $Id$
 * @package     Venues
 * @author      Pau Gay <pau.gay@gmail.com> 
 */

class IteratorAbstractTest
    extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function buildDomainObject()
    {
        return $this->getMockForAbstractClass(
            'Venues\Iterator\IteratorAbstract'
        );
    }

    public function testCanConstruct()
    {
        $it = $this->buildDomainObject();

        $this->assertEquals($it->count(), 0);
    }
}
