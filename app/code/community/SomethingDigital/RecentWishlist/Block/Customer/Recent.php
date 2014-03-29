<?php

/**
 * Recent Customer Wishlist Block
 */

class SomethingDigital_RecentWishlist_Block_Customer_Recent extends Mage_Wishlist_Block_Customer_Wishlist
{
    protected function _prepareCollection($collection)
    {
        $collection->setCurPage(1)
            ->setPageSize(3)
            ->setInStockFilter(true)
            ->setOrder('added_at');

        return $this;
    }
}
