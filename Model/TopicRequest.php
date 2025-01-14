<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Lokeshyourfriend\BasicMsgQueue\Model;

/**
 * Class for testing synchronous queue handlers.
 */
class TopicRequest implements \Lokeshyourfriend\BasicMsgQueue\Api\TopicRequestInterface
{
    private \Psr\Log\LoggerInterface $_logger;
    private array $data;
 
    public function __construct(
        \Psr\Log\LoggerInterface $logger, 
            array $data = []
            )
    {        
        $this->_logger = $logger;
        $this->data = $data;
    }
    
    /**
     * setData function
     * @param array $data
     * @return $this|TopicRequestInterface
     */    
    public function setData(array $data): TopicRequest
    {
        $this->data = $data;
        return $this;
    }
    
    /**
     * getData function
     * @return array
     */    
    public function getData(): array
    {
        return $this->data;
    }
}
