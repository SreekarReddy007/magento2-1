<?php
namespace Conversionbug\CrudFrontend\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function getFormAction()
    {
        return '/crud/insert/index ';
    }
}