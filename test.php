<?php
/**
 * COPYRIGHT (C), Yun Shang. Co., Ltd.
 * Author:  曾鑫
 * Date:    2020/11/20 20:00
 * Desc:
 */

require_once __DIR__.'/vendor/autoload.php';

use Uupt\Uupt;
use Uupt\Traits\Tools;

$from_lnglat = ['lng' => '113.000613', 'lat' => '28.174556'];
$to_lnglat   = ['lng' => '112.996851', 'lat' => '28.184188'];

$from_lnglat = Tools::bd_encrypt($from_lnglat['lng'],$from_lnglat['lat']);

$uu  = new Uupt([]);
$res = $uu->getOrderPirce([
    'origin_id'     => 'SP202011201755090089879',
    'from_address'  => '长沙市',
    'from_lat'      => $from_lnglat['lng'],
    'from_lng'      => $from_lnglat['lat'],
    'to_address'    => '长沙市',
    'to_usernote'   => '1421',
    'to_lat'        => $to_lnglat['lng'],
    'to_lng'        => $to_lnglat['lat'],
    'city_name'     => '长沙市',
    'goods_type'    => '其他',
    'send_type'     => '0',


]);

var_dump($res);