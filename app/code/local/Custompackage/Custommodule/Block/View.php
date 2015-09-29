<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Custompackage\Custommodule\Block;

class View extends \Magento\Framework\View\Element\Template
{
    /**
     * Index action
     *
     * @return $this
     */
    public function _prepareLayout()
    {
      return parent::_prepareLayout(); 
    }
}
