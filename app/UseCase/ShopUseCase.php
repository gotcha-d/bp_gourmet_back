<?php

namespace App\UseCase;

class ShopUseCase
{
    public function getAllShops()
    {
        $shops = [
            ['name' => '1'],
            ['name' => '2'],
        ];
        return $shops;
    }
}