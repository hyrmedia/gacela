<?php

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-10-21 at 14:11:44.
 */
class MapperTest extends \Test\GUnit\Extensions\Database\TestCase
{
	public function testSleep()
	{
		$mapper = \Gacela::instance()->loadMapper('house');

		$str = serialize($mapper);

		$this->assertEquals($mapper, unserialize($str));
	}

    /**
     * @covers Gacela\Mapper\Mapper::debug
     * @todo   Implement testDebug().
     */
    public function testDebug()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

	/**
	 * @covers Gacela\Mapper\Mapper::findAllByAssociation
	 * @todo   Implement testFindAllByAssociation().
	 */
	public function testFindAllByAssociation()
	{
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
			'This test has not been implemented yet.'
		);
	}

	/**
	 * @covers Gacela\Mapper\Mapper::findRelation
	 */
	public function testFindRelation()
	{

	}


}
