<?php

namespace XEngine\Contracts\Support;

interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \XEngine\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}
