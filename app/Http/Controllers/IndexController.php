<?php 
namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
	// laravel中所有的方法都需要在路由中配置路径才能访问
	public function index() {
		return view('commons\index');
	}
	public  function article() {
		return view('commons\article');
	}
	public function layout() {
		return view('layout');
	}

	//测试控制器
	public function test() {
//		$pdo = DB::connection()->getPdo();
//		dd($pdo);

        //在控制器中，直接操作数据库
//        $users = DB::table('user')
//            ->where('user_id',2)
//            ->get();
//        dd($users);

        //使用模型操作数据库
//        $userId = User::where('user_id',3)->get();
//        dd($userId);

        $user = User::find(3);
        $user->user_name = '李四';
        $user->update();
        dd($user);
	}
}


























