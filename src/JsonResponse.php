<?php

namespace Yuanxiansen\CiApiResponse;

trait JsonResponse
{
    /**
     * success.
     *
     * @param array $data
     *
     * @return resource
     *
     */
    public function success($data = [])
    {
        $msg = 'ok';
        if(is_string($data)){
            $msg = $data;
            $data = [];
        }
        return $this->jsonReturn(1,$msg,$data);
    }

    /**
     * error.
     *
     * @param string $msg
     * @param array $data
     * @param int $code
     *
     * @return resource
     *
     */
    public function error($msg = '操作失败', $data = [], $code = 0)
    {
        return $this->jsonReturn($code,$msg,$data);
    }

    /**
     * jsonReturn.
     *
     * @param int $code
     * @param string $msg
     * @param array $data
     *
     * @return array
     *
     */
    public function jsonReturn($code,$msg,$data=[]){
        return [
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ];
    }


}