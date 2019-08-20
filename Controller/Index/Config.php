<?php

namespace Lof\HaHelloMagento\Controller\Index;

class Config extends \Magento\Framework\App\Action\Action
{
    protected $helperData;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Lof\HaHelloMagento\Helper\Data $helperData

	)
	{
		$this->helperData = $helperData;
		return parent::__construct($context);
	}

	public function execute()
	{

		// TODO: Implement execute() method.
        echo $this->helperData->getGeneralConfig('display_text');
        ?>
        <head><title>
            <?php
            echo $this->helperData->getGeneralConfig('title');
            ?>
        </title></head>
        <?php
		exit();
	}
}