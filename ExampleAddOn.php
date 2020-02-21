<?php
declare(strict_types=1);

namespace ArrayIterator\Web\Addons\ExampleAddOn;

use ArrayIterator\Service\Core\Module\AbstractAddOn;

// prevent to call directly
if (!class_exists(AbstractAddOn::class)) {
    header('Location: ../../', true, 302);
    return;
}

/**
 * Class ExampleAddOn
 * @package ArrayIterator\Web\Addons\ExampleAddOn
 */
class ExampleAddOn extends AbstractAddOn
{
    public function afterModulesInit()
    {
        // do after module init
    }
}
