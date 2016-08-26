<?php

namespace XEngine\Contracts\Filesystem;

interface Factory
{
    /**
     * Get a filesystem implementation.
     *
     * @param  string  $name
     * @return \XEngine\Contracts\Filesystem\Filesystem
     */
    public function disk($name = null);
}
