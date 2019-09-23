<?php namespace Lovata\Shopaholic\Classes\Store\PromoBlock;

use Lovata\Toolbox\Classes\Store\AbstractStoreWithoutParam;

use Lovata\Shopaholic\Models\PromoBlock;

/**
 * Class NotHiddenListStore
 * @package Lovata\Shopaholic\Classes\Store\PromoBlock
 * @author  Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * Saving to the cache array with IDs of not hidden elements
 *
 * Cache data:
 * ['element_id_1', 'element_id_2', ...]
 *
 * Clear cache in:
 * @see \Lovata\Shopaholic\Classes\Event\PromoBlock\PromoBlockModelHandler::afterSave()
 * @see \Lovata\Shopaholic\Classes\Event\PromoBlock\PromoBlockModelHandler::afterDelete()
 */
class NotHiddenListStore extends AbstractStoreWithoutParam
{
    protected static $instance;

    /**
     * Get ID list from database
     * @return array
     */
    protected function getIDListFromDB() : array
    {
        $arElementIDList = (array) PromoBlock::notHidden()->lists('id');

        return $arElementIDList;
    }
}
