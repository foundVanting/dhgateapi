<?php
namespace DhgateApi\Operations;

class TradeFuWuGet extends AbstractOperation
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
}