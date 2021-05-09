<?php

	namespace Panth\Student\Block;
 
	use Magento\Framework\View\Element\Template\Context;
	use Panth\Student\Model\PostFactory;
	 
	class Index extends \Magento\Framework\View\Element\Template
	{
		protected $_filesystem;
	 
		public function __construct(
			\Magento\Framework\View\Element\Template\Context $context,
			\Panth\Student\Model\PostFactory $postFactory
			)
		{			
			parent::__construct($context);
			$this->_postFactory = $postFactory;
		}
		public function _prepareLayout()
	    {
	        $this->pageConfig->getTitle()->set(__('Data List Page'));
	        
	        if ($this->getResult()) {
		        $pager = $this->getLayout()->createBlock(
		            'Magento\Theme\Block\Html\Pager',
		            'Panth.Student.pager'
		        )->setAvailableLimit(array(5=>5,10=>10,15=>15))->setShowPerPage(true)->setCollection(
		            $this->getResult()
		        );
		        $this->setChild('pager', $pager);
		        $this->getResult()->load();
		    }
	        return parent::_prepareLayout();
	    }

	 
	    public function getResult()
	    {	
	    	$page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        	$pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;

			$post = $this->_postFactory->create();
			$collection = $post->getCollection();
			$collection->setPageSize($pageSize);
        	$collection->setCurPage($page);
			return $collection;
		}
		public function getPagerHtml()
		{
		    return $this->getChildHtml('pager');
		}
	}

?>