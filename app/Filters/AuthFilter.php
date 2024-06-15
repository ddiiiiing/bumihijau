<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // If user is not logged in, redirect to login page
        if (!session()->get('user')) {
            return redirect()->to('/login');
        }

        // If specific roles are required
        /*if ($arguments && !in_array(session()->get('user')['is_admin'], $arguments)) {
            return redirect()->to('/unauthorized');
        }*/
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something after the request has been processed
    }
}
