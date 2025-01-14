<?php
namespace Lokeshyourfriend\BasicMsgQueue\Api;

interface TopicRequestInterface
{
    
    /**
     * getData function
     * @return array
     */  
    public function getData();
    
    /**
     * setData function
     * @param array $data
     * @return TopicRequestInterface
     */ 
    public function setData(array $data);
}
