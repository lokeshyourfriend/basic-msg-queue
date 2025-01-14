<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\BasicMsgQueue\Model;

/**
 * Class for testing synchronous queue handlers.
 */
class SyncHandler
{
    private \Psr\Log\LoggerInterface $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {        
        $this->_logger = $logger;
    }
    
    /**
     * function handlerMethod
     * @param string $request
     * @return void
     */   
    public function handlerMethod(string $request): void
    {
        $this->_logger->debug('Lokeshyourfriend_BasicMsgQueue::handlerMethod::This is called from communication.xml - passed params: ' . $request);
    }
    
    /**
     * function handlerMethodTwo
     * @param array $request
     * @return void
     */   
    public function handlerMethodTwo(array $request): void
    {
        $this->_logger->debug('Lokeshyourfriend_BasicMsgQueue::handlerMethodTwo::This is called from communication.xml');
        $this->_logger->debug(print_r($request, true));
        $this->_logger->debug("#########End print array########");
    }
    
    /**
     * function handlerMethodThree
     * @param \Lokeshyourfriend\BasicMsgQueue\Api\TopicRequestInterface $request
     * @return void
     */   
    public function handlerMethodThree(\Lokeshyourfriend\BasicMsgQueue\Api\TopicRequestInterface $request): void
    {
        $this->_logger->debug('Lokeshyourfriend_BasicMsgQueue::handlerMethodThree::This is called from communication.xml');
        $this->_logger->debug(print_r($request->getData(), true));
        $this->_logger->debug("#########End print array########");
    }
}
