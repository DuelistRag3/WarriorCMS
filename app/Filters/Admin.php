<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Logged implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do authentication here
        if (!session()->get('isLoggedIn'))
    			return redirect()->to('/home');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
