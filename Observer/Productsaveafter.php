<?php

namespace Lokeshyourfriend\BasicMsgQueue\Observer;

use Magento\Framework\Event\ObserverInterface;

class Productsaveafter implements ObserverInterface {

    const TOPIC_NAME = 'lokeshyourfriend.basic.msg.queue.topic';

    const TOPIC_NAME_TWO = 'lokeshyourfriend.basic.msg.queue.topic.two';

    const TOPIC_NAME_THREE = 'lokeshyourfriend.basic.msg.queue.topic.three';

    private \Magento\Framework\MessageQueue\PublisherInterface $publisher;
    private \Lokeshyourfriend\BasicMsgQueue\Api\TopicRequestInterfaceFactory $topicRequestFactory;

    public function __construct(
            \Magento\Framework\MessageQueue\PublisherInterface $publisher,
            \Lokeshyourfriend\BasicMsgQueue\Api\TopicRequestInterfaceFactory $topicRequestFactory
    ) {
        $this->publisher = $publisher;
        $this->topicRequestFactory = $topicRequestFactory;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $this->publisher->publish(self::TOPIC_NAME, "new method one.");
        $this->publisher->publish(self::TOPIC_NAME_TWO, ['one', 'two', 'three']);
        /* Below topic for request type object is not worked when i tried to impelment it */
        //$topicRequest = $this->topicRequestFactory->create();
        //$topicRequest->setData(['one', 'two', 'three', 'four', 'five']);
        //$this->publisher->publish(self::TOPIC_NAME_THREE, $topicRequest);
    }
}
