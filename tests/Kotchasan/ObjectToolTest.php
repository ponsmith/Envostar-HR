<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2020-08-31 at 22:55:49.
 */
class ObjectToolTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ObjectTool
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new ObjectTool();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * Generated from @assert (array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'three')), 'name') [==] (object)array(0 => 'one', 1 => 'two', 2 => 'three').
     *
     * @covers Kotchasan\ObjectTool::columns
     */
    public function testColumns()
    {

        $this->assertEquals(
          (object)array(0 => 'one', 1 => 'two', 2 => 'three'),
          \Kotchasan\ObjectTool::columns(array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'three')), 'name')
        );
    }

    /**
     * Generated from @assert (array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'three')), 'name', 'id') [==] (object)array(1 => 'one', 2 => 'two', 3 => 'three').
     *
     * @covers Kotchasan\ObjectTool::columns
     */
    public function testColumns2()
    {

        $this->assertEquals(
          (object)array(1 => 'one', 2 => 'two', 3 => 'three'),
          \Kotchasan\ObjectTool::columns(array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'three')), 'name', 'id')
        );
    }

    /**
     * Generated from @assert ((object)array('one' => 1), array('two' => 2)) [==] (object)array('one' => 1, 'two' => 2).
     *
     * @covers Kotchasan\ObjectTool::replace
     */
    public function testReplace()
    {

        $this->assertEquals(
          (object)array('one' => 1, 'two' => 2),
          \Kotchasan\ObjectTool::replace((object)array('one' => 1), array('two' => 2))
        );
    }

    /**
     * Generated from @assert ((object)array('one' => 1), (object)array('two' => 2)) [==] (object)array('one' => 1, 'two' => 2).
     *
     * @covers Kotchasan\ObjectTool::replace
     */
    public function testReplace2()
    {

        $this->assertEquals(
          (object)array('one' => 1, 'two' => 2),
          \Kotchasan\ObjectTool::replace((object)array('one' => 1), (object)array('two' => 2))
        );
    }

    /**
     * Generated from @assert (array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'one')), 'name', 'one') [==] array(0 => (object)array('id' => 1, 'name' => 'one'), 2 => (object)array('id' => 3, 'name' => 'one')).
     *
     * @covers Kotchasan\ObjectTool::search
     */
    public function testSearch()
    {

        $this->assertEquals(
          array(0 => (object)array('id' => 1, 'name' => 'one'), 2 => (object)array('id' => 3, 'name' => 'one')),
          \Kotchasan\ObjectTool::search(array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'one')), 'name', 'one')
        );
    }

    /**
     * Generated from @assert (array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'one')), 'id', 'one') [==] array().
     *
     * @covers Kotchasan\ObjectTool::search
     */
    public function testSearch2()
    {

        $this->assertEquals(
          array(),
          \Kotchasan\ObjectTool::search(array((object)array('id' => 1, 'name' => 'one'), (object)array('id' => 2, 'name' => 'two'), (object)array('id' => 3, 'name' => 'one')), 'id', 'one')
        );
    }
}