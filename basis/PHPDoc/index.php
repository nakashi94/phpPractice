<?php

/**
 * 税率計算のための関数を記述するファイル
 * 
 * @author nakashi94
 * @since 1.0.0
 */

/**
 * 税込み金額を取得する関数
 * 
 * @param int $base_price 価格
 * @param float $tax_rate 税率
 * 
 * @return int 税込み金額
 * @see https://example.com
 */

function with_tax(int $base_price, float $tax_rate = 0.1): int
{
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
