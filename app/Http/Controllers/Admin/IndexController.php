<?php
/**
 * User: zxg
 * Date: 2018/12/7
 * Time: 6:15 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {

    }
}