<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    function index(Request $request)
    {
        // Lấy dữ liệu Email từ URL
        $email = $request->email;
        if ($email) {
            // Kiểm tra validate email theo hàm mặc định thư viện PHP
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message = "Email đúng định dạng";
            } else {
                $message = "Email không đúng định dạng";
            }
        } else {
            $message = "Vui lòng nhập email cần kiểm tra";
        }

        return view('index', compact('message'));
    }
}
