<?php

namespace XEngine\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string  $name
     * @return \XEngine\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
