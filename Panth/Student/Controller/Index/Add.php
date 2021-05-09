<?php
	namespace Panth\Student\Controller\Index;
	 
	use Magento\Framework\App\Filesystem\DirectoryList;
	 
	class Add extends \Magento\Framework\App\Action\Action
	{
		protected $_pageFactory;
		protected $_postFactory;
		protected $_filesystem;
	 
		public function __construct(
			\Magento\Framework\App\Action\Context $context,
			\Magento\Framework\View\Result\PageFactory $pageFactory,
			\Magento\Framework\Message\ManagerInterface $messageManager,
			\Panth\Student\Model\PostFactory $postFactory,
			\Magento\Framework\Filesystem $filesystem
			)
		{
			$this->_pageFactory = $pageFactory;
			$this->_postFactory = $postFactory;
			$this->_filesystem = $filesystem;
			return parent::__construct($context);
		}
	 
		public function execute()
		{		
				
				$name = $this->getRequest()->getPost('name');
				$last = $this->getRequest()->getPost('last');
				$email = $this->getRequest()->getPost('email');   
				$post = $this->_postFactory->create();
				$post->setData('name',$name);
				$post->setData('last',$last);
				$post->setData('email',$email);
				$post->save();
				$this->messageManager->addSuccess(__("data Add Success"));
			    return $this->_redirect('student/index/index');
			
		}	
	}

?>