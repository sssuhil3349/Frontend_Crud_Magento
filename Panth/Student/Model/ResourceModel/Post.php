<?php
	namespace Panth\Student\Model\ResourceModel;
	class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
	{
	    /**
	     * Define main table
	     */
	    protected function _construct()
	    {
	        $this->_init('student', 'id');   //here "crud_test_emp1" is table name, "id" is the primary key
	    }
	}
?>