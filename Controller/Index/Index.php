<?php
namespace Lof\HaHelloMagento\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $helperData;
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Lof\HaHelloMagento\Helper\Data $helperData)
	{
		$this->_pageFactory = $pageFactory;
		$this->helperData = $helperData;
		return parent::__construct($context);
	}
	 public function execute(){
		if($this->helperData->getGeneralConfig('enable') == 1){
		?>
		<head>
			<title><?php echo $this->helperData->getGeneralConfig('title');?></title>	
		</head>		
		<?php
		}
		return $this->_pageFactory->create();		
	 }
}

