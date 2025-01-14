<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\BasicMsgQueue\Model;

/**
 * Class for testing queue handlers.
 */
class HandlerOne
{
    private \Psr\Log\LoggerInterface $_logger;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {        
        $this->_logger = $logger;
    }
    /**
     * function handlerMethodOne
     * @param string $request
     * @return void
     */    
    public function handlerMethodOne(string $request): void
    {
        $this->_logger->debug("Lokeshyourfriend_BasicMsgQueue::handlerMethodOne::This is called from queue_consumer.xml");
    }
    /**
     * function handlerMethod
     * @param string $request
     * @return void
     */    
    public function handlerMethod(string $request): void
    {
        $this->_logger->debug("Lokeshyourfriend_BasicMsgQueue::handlerMethod::This is called from queue_consumer.xml, params: "  . $request);
    }
    /**
     * function handlerMethodTwo
     * @param array $request
     * @return void
     */    
    public function handlerMethodTwo(array $request): void
    {
        $this->_logger->debug("Lokeshyourfriend_BasicMsgQueue::handlerMethodTwo::This is called from queue_consumer.xml");
        $this->_logger->debug(print_r($request, true));
        $this->_logger->debug("#########End print array########");
    }
    /**
     * function handlerMethodThree
     * @param \Lokeshyourfriend\BasicMsgQueue\Model\TopicRequestInterface $request
     * @return void
     */    
    public function handlerMethodThree(\Lokeshyourfriend\BasicMsgQueue\Model\TopicRequestInterface $request): void
    {
        $this->_logger->debug("Lokeshyourfriend_BasicMsgQueue::handlerMethodThree::This is called from queue_consumer.xml");
        $this->_logger->debug(print_r($request->getData(), true));
        $this->_logger->debug("#########End print array########");
    }
}
