<?php
namespace Lof\HaHelloMagento\Block;

use Lof\HaHelloMagento\Helper\Data;
use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template
{
	protected $helperData;
	public function __construct(\Magento\Framework\View\Element\Template\Context $context,
	\Lof\HaHelloMagento\Helper\Data $helperData,
	\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		parent::__construct($context);
		$this->helperData = $helperData;
		$this->_pageFactory = $pageFactory;
	}
	public function sayHello()
	{	
		return $this->_pageFactory->create();
	}
	public function GetDisplayText()
    {
		if($this->helperData->getGeneralConfig('enable') == 1){
			return $this->helperData->getGeneralConfig('display_text');
		}		
	}
	
}
