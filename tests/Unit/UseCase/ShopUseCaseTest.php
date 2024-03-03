<?php

namespace Tests\Unit\UseCase;

use App\UseCase\ShopUseCase;
use PHPUnit\Framework\TestCase;

class ShopUseCaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_すべての店情報を取得する()
    {
        $shopUseCase = new ShopUseCase();
        
        $actual = $shopUseCase->getAllShops();
        $expected = [
            ['name' => '1'],
            ['name' => '2'],
        ];

        $this->assertEquals($expected, $actual);
    }
}
