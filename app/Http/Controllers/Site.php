<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class Site extends Home
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data['view'] = 'site.home';
        return $this->viewLoader($data);
    }

    public function blog_list()
    {
        $data['view'] = 'site.blogs';
        return $this->viewLoader($data);
    }

    public function site_contact()
    {
        $data['view'] = 'site.contact';
        return $this->viewLoader($data);
    }

    public function load_shop_page()
    {
        $data['view'] = 'site.shop';
        return $this->viewLoader($data);
    }

    public function login_page()
    {
        $data['view'] = 'site.login';
        return $this->viewLoader($data);
    }

    public function user_engage(Request $request)
    {
        $engaeType = $request->engageType;
        
    }
}
