<?php

namespace WellmedLite\MsHr;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsHrServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsHr::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
