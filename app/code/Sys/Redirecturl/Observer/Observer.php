<?php
namespace Sys\Redirecturl\Observer;

class Observer implements \Magento\Framework\Event\ObserverInterface
{
	protected $_urlInterface;
	protected $_urlCollection;
	protected $_response;

	public function __construct( 
	\Magento\Framework\UrlInterface $urlInterface, 
	\Sys\Redirecturl\Model\Redirecturl $urlCollection,
	 \Magento\Framework\App\ResponseInterface $response 
	) {
	$this->_urlInterface = $urlInterface;
	$this->_urlCollection = $urlCollection;
	 $this->_response = $response;
	}

  public function execute(\Magento\Framework\Event\Observer $observer)
  { 		
		$currentUrl = $this->_urlInterface->getCurrentUrl(); 
		$collection = $this->_urlCollection->getCollection()->getData(); 
		$currentUrl = rtrim($this->_urlInterface->getCurrentUrl(),'/'); 
		foreach ($collection as $url) { 
			$url_from = rtrim($url['redirect_from'],'/');
			$url_to = rtrim($url['redirect_to'],'/');
			if($currentUrl  == $url['redirect_from']){ 
				$this->_response->setRedirect($url['redirect_to'],301)->sendResponse();exit;
			} 
		} 
     return $this;
  }
}
