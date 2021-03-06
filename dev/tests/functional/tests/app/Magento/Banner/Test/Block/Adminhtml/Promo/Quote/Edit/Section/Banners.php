<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Banner\Test\Block\Adminhtml\Promo\Quote\Edit\Section;

use Magento\Ui\Test\Block\Adminhtml\Section;

/**
 * Class Banners
 * 'Related Banners' section on Cart Price Rules form
 */
class Banners extends Section
{
    /**
     * Banners grid locator
     *
     * @var string
     */
    protected $bannersGrid = '#related_salesrule_banners_grid';

    /**
     * Get banners grid on Cart Price Rules form
     *
     * @return \Magento\Banner\Test\Block\Adminhtml\Promo\Quote\Edit\Section\BannersGrid
     */
    public function getBannersGrid()
    {
        return $this->blockFactory->create(
            'Magento\Banner\Test\Block\Adminhtml\Promo\Quote\Edit\Section\BannersGrid',
            ['element' => $this->_rootElement->find($this->bannersGrid)]
        );
    }
}
