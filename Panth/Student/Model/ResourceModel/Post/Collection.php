<?php

	namespace Panth\Student\Model\ResourceModel\Post;
	 
	class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
	{
	        /**
	         * Define resource model
	         *
	         * @return void
	         */
	        protected function _construct()
	        {
	                $this->_init('Panth\Student\Model\Post', 'Panth\Student\Model\ResourceModel\Post');
	        }
	}

?>