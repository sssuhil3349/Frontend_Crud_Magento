<?php

	namespace Panth\Student\Controller\Index;
	 
	class Index extends \Magento\Framework\App\Action\Action
	{
		protected $_pageFactory;
	 
		public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Magento\Framework\View\Result\PageFactory $pageFactory
			)
		{
			$this->_pageFactory = $pageFactory;
			return parent::__construct($context);
		}
	 
		public function execute()
		{	
			echo "Module Created Successfully";
			$pageFactory = $this->_pageFactory->create();
			//$pageFactory->getConfig()->getTitle()->set(__('Custom Pagination'));
			return $pageFactory;		
		}
	}
?>