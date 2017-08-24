<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
    	return "这是后台首页";
    }

    public function register() {
    	return "这是注册页面";
    }

    public function login() {
    	session(['admin'=>'user']);
    	return "<h1>这是登录界面666</h1>";
    }
}
