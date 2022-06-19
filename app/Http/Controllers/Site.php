<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

class Site extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data['view'] = 'site.home';
        return $this->loadview($data);
    }

    public function loadview($data=[])
    {
        if(!isset($data['view'])) $data['view'] = 'site.home';
        return view($data['view']);

    }

    public function blog_list()
    {
        $data['view'] = 'site.blogs';
        return $this->loadview($data);
    }

    public function site_contact()
    {
        $data['view'] = 'site.contact';
        return $this->loadview($data);
    }

    public function load_shop_page()
    {
        $data['view'] = 'site.shop';
        return $this->loadview($data);
    }
}
