<?php
	namespace Panth\Student\Controller\Index;
	 
	class Delete extends \Magento\Framework\App\Action\Action
	{
		protected $_pageFactory;
		protected $_request;
		protected $_postFactory; 	
	 
		public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Magento\Framework\View\Result\PageFactory $pageFactory,
			\Magento\Framework\Message\ManagerInterface $messageManager,
			\Magento\Framework\App\Request\Http $request,
			\Panth\Student\Model\PostFactory $postFactory
			)
		{
			$this->_pageFactory = $pageFactory;
			$this->_request = $request;
			$this->_postFactory = $postFactory;
			return parent::__construct($context);
		}
	 
		public function execute()
		{	
	        $id = $this->_request->getParam('id');       
			$post = $this->_postFactory->create();
			$result = $post->setId($id);
			$result = $result->delete();
			$this->messageManager->addSuccess(__("data Delete Success"));
			return $this->_redirect('student/index/index');	
		}
	}

?>