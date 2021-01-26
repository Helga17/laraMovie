<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    public function hosts()
    {
        info('test', $this->allSubdomainsOfApplicationUrl());
        return [
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
