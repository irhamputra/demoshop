<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Module;

use Codeception\Module;

class Zed extends Module
{

    /**
     * @return $this
     */
    public function amZed()
    {
        $this->getModule('WebDriver')->_reconfigure(['url' => 'http://zed.de.spryker.dev']);

        return $this;
    }

}
