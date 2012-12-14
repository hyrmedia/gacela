<?php
namespace Gacela\Field;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 05:16:46.
 */
class DecimalTest extends \PHPUnit_Framework_TestCase
{
	protected $meta = null;

	/**
	 * @var Decimal
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = new Decimal;

		$this->meta = (object) array(
			'type' => 'decimal',
			'length' => 15,
			'scale' => 5,
			'null' => false
		);
	}

	public function providerPass()
	{
		return array(
			array('15.003'),
			array(1536225648.52136),
			array(123456789012345),
			array(1.12345),
			array("987.321")
		);
	}

	public function providerTransformEmpty()
	{
		return array(
			array(''),
			array(null),
			array(false)
		);
	}

	/**
	 * @covers Gacela\Field\Decimal::transform
	 */
	public function testTransformIsString()
	{
		$this->assertInternalType('string', $this->object->transform($this->meta, 123.45));
	}

	/**
	 * @covers Gacela\Field\Decimal::transform
	 */
	public function testTransform()
	{
		$this->assertSame(strval(15.0003), $this->object->transform($this->meta, 15.0003));
	}

	/**
	 * @param $value
	 * @dataProvider providerTransformEmpty
	 */
	public function testTransformEmptyValue($value)
	{
		$this->assertNull($this->object->transform($this->meta, $value));
	}

	public function testValidateNullCode()
	{
		$this->assertEquals(
			Decimal::NULL_CODE,
			$this->object->validate(
				$this->meta,
				null
			)
		);
	}

	public function testValidateLengthCode()
	{
		$this->assertEquals(Decimal::LENGTH_CODE, $this->object->validate($this->meta, 1234567890123456));
	}

	public function testValidateScaleCode()
	{
		$this->assertEquals(Decimal::SCALE_CODE, $this->object->validate($this->meta, 12.555675));
	}

	/**
	 * @param $value
	 */
	public function testValidateTypeCode()
	{
		$this->assertEquals(Decimal::TYPE_CODE, $this->object->validate($this->meta, '1 @m 4n alnum 5tr1ng'));
	}

    /**
     * @covers Gacela\Field\Decimal::validate
     * @dataProvider providerPass
     */
    public function testValidatePass($value)
    {
		$this->assertTrue($this->object->validate($this->meta, $value));
    }

	public function testValidatePassNull()
	{
		$this->meta->null = true;

		$this->assertTrue($this->object->validate($this->meta, null));
	}
}
