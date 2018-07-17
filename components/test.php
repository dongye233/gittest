<?php
/**
 * Created by PhpStorm.
 * User: founq
 * Date: 2018/7/12
 * Time: 16:21
 */

namespace app\components;


class test
{
    protected $bookingService;

    public function __construct( BookingInterface $bookingService, $config = [])
    {
        $this->bookingService = $bookingService;

    }
}