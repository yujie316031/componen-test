<?php
/**
 * Created by PhpStorm.
 * User: wyung
 * Date: 19-4-19
 * Time: 下午3:11
 */
namespace Yuj\LaraPack;

class test
{
    public function respSuccess($message = '', $data = null)
    {
        return $this->responseOver(true, \App\Constants\CommonRespCode::SUCCESS, $message, $data);
    }

    public function respFail($code, $message, $data = null)
    {
        return $this->responseOver(false, $code, $message, $data);
    }

    protected function responseOver($success, $code, $message, $data)
    {
        if(is_null($data)) {
            $data = new \stdClass();
        }
        return [
            'succ' => $success,
            'code' => intval($code),
            'msg' => $message,
            'data' => $data,
            'timestamp' => time()
        ];
    }
}