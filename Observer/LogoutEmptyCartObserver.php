<?php 
namespace Gim\Emptycart\Observer;
use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;
class LogoutEmptyCartObserver implements ObserverInterface
{
    public function execute(EventObserver $observer)
    {
    	$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
         $cartObject = $objectManager->create('Magento\Checkout\Model\Cart')->truncate(); 
         $cartObject->saveQuote();
    }
}