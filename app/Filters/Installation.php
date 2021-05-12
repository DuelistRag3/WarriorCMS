<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Installation implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $config = config('Warrior');
        // If migration is not done redirect to install
        if ($config->installstatus == '%FALSE%')
    			return redirect()->to(BASEURL.'install');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
