<?php

namespace Lof\HaHelloMagento\Helper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper
{
    protected $scopeConfig;
    const XML_PATH_HELLOWORLD = 'helloworld/';
    public function __construct(Context $context,ScopeConfigInterface $scopeConfig)
    {
        parent::__construct($context);
        $this->scopeConfig=$scopeConfig;
    }
	public function getConfigValue($field, $storeId = null)
	{
		return $this->scopeConfig->getValue(
			$field, ScopeInterface::SCOPE_STORE, $storeId
		);
    }
	public function getGeneralConfig($code, $storeId = null)
	{

		return $this->getConfigValue(self::XML_PATH_HELLOWORLD .'general/'. $code, $storeId);
	}
}