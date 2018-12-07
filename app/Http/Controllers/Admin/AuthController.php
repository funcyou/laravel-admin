<?php
/**
 * User: zxg
 * Date: 2018/12/7
 * Time: 5:32 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if ($this->request->isMethod('post')) {
            $this->validate(
                $this->request,
                [
                    'email'    => 'required|email',
                    'password' => 'required'
                ],
                [
                    'email.required'    => '请填写邮箱！',
                    'email.email'       => '邮箱格式不正确！',
                    'password.required' => '请填写密码！',
                ]
            );
            $data = $this->request->only(['email', 'password']);
            $user = User::query()->where('email', $data['email'])->first();
            if (!$user) {
                return $this->fail('该账号不存在！');
            }
            if (!Hash::check($data['password'], $user->password)) {
                return $this->fail('密码错误！');
            }
            Auth::guard('admin')->login($user, true);
            return $this->success();
        }
        return view('admin.auth.login');
    }
}