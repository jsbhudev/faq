<?php


namespace jsbhudev\faq\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseApiController extends Controller
{

    public function handleResponse($result =array(), $msg)
    {
    	$res = [
            'status' => 1,
            'message' => $msg,
        ];

        if(!empty($result)){
            $res['data'] = $result;
        }
        return response()->json($res, 200);
    }

    public function handleError($error,$status = "0", $errorMsg = [], $code = 200)
    {
    	$res = [
            'status' => (int)$status,
            'message' => $error,
        ];
        if(!empty($errorMsg)){
            $res['data'] = $errorMsg;
        }
        return response()->json($res, $code);
    }
}
