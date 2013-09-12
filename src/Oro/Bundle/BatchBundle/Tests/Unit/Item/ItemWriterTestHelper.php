<?php

namespace Oro\Bundle\BatchBundle\Tests\Unit\Item;

use Oro\Bundle\BatchBundle\Item\AbstractConfigurableStepElement;
use Oro\Bundle\BatchBundle\Item\ItemWriterInterface;

/**
 * Test helpers class needed as there is no way to create a mock from
 * phpUnit that extends and implements as the same time
 */
abstract class ItemWriterTestHelper extends AbstractConfigurableStepElement implements ItemWriterInterface
{
}
