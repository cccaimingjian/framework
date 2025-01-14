<?php

namespace Shopper\Framework\Repositories;

use Shopper\Framework\Models\Shop\Inventory\Inventory;

class InventoryRepository extends BaseRepository
{
    /**
     * Specify Model class name.
     *
     * @return mixed
     */
    public function model()
    {
        return Inventory::class;
    }
}
