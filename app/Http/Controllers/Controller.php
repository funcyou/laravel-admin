<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    /**
     * User: zxg
     * @var $request Request
     * @var $user \App\Models\User
     */
    public $request;
    public $user;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * User: zxg
     * @param string $guard
     * @return \App\Models\User
     */
    public function getUser($guard = 'admin')
    {
        return $this->user ? $this->user : $this->request->user($guard);
    }

    public function success($data = [], $message = 'ok')
    {
        return response()->json([
            'status'  => 1,
            'message' => $message,
            'data'    => $data,
        ]);
    }

    public function fail($message = 'fail', $status = 0, $data = [])
    {
        return response()->json([
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
        ]);
    }
}
