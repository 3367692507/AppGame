<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Redirect;
class CommonController extends Controller
{
    public function __construct(Request $request)
    {
        $session = new Session;
        if(empty($session->get('uid'))){
            echo "<script>alert('请先登录');location.href='login'</script>";
            exit;
        }
    }
}
