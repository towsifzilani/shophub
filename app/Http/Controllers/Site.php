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
    public $site_user_id;

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
        if($engaeType=="" || ($engaeType !="signup" && $engaeType != "login")) return Redirect::route("site-login")->with('status',__('You are trying to access an unaccesible scope.'));
        if($engaeType=="signup") {
            $rules = [
                'name' => 'required',
                'email' => 'required|unique:users,email'
            ];
        } else if($engaeType=='login') {

        }

    }

    private function validate_rules($data)
    {
        
    }

    private function validate_error_messages($value='')
    {
        // code...
    }
}
