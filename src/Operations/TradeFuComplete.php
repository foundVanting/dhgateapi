<?php

namespace DhgateApi\Operations;

class TradeFuComplete extends AbstractOperation
{
    public function __construct()
    {
        $this->parameter['v'] = '1.0';
    }

    public function getName()
    {
        return 'dh.servicemarket.tradefuwu.get';
    }

    public function setOrderFuwuId($orderFuwuId)
    {
        $this->parameter['orderFuwuId'] = $orderFuwuId;

        return $this;
    }

    public function setStartTime($startTime)
    {
        $this->parameter['startTime'] = $startTime < 10000000000 ? $startTime * 1000 : $startTime;

        return $this;
    }

    public function setEndTime($endTime)
    {
        $this->parameter['endTime'] = $endTime < 10000000000 ? $endTime * 1000 : $endTime;

        return $this;
    }

}