<?php
/**
 * Created by PhpStorm.
 * User: zhaoweijie
 * Date: 2019-11-06
 * Time: 10:12
 */
namespace Zwei\Collection\Tests\Support;

use PHPUnit\Framework\TestCase;
use Zwei\Collection\Support\Collection;

class CollectionTest extends TestCase
{
    public function test()
    {
        $collection = new Collection();
        $collection->offsetSet(null, [1]);
        $collection->offsetSet(null, [2]);
        $this->assertEquals($collection->offsetGet(1), [2]);
        $this->assertTrue($collection->count() == 2);
    }
}
