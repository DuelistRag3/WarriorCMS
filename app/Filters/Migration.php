<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Migration implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $config = config('warrior');
        // If migration is not done redirect to install
        if ($config->installstatus == '%FALSE%')
    			return redirect()->to('/migrate');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
