<?php

namespace Custompackage\Custommodule\Model;

class Test extends \Magento\Catalog\Model\Product
{
	public function getPrice()
    {	
        return 2000;
    }

}