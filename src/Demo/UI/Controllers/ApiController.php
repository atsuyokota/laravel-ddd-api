<?php

namespace Demo\UI\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $statusCode = 200;
    protected $message = '';

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function respondNotFound($message = 'Not Found')
    {
        return $this->setStatusCode(404)->respondWithError($message, 404);
    }

    public function attachMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    public function respondSuccess($data, $pagination=null)
    {
        $result = [];
        if (!empty($this->message)) {
            $result['message'] = $this->message;
        }
        if (!empty($pagination)) {
            $result['pagination'] = $pagination;
        }
        if (!empty($data)) {
            $result['data'] = $data;
        }
        return $this->respond($result);
    }

    public function respond($data, $headers=[])
    {
        return \Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message, $code)
    {
        $json = [
            'message' => $message
        ];
        return response()->json($json, $code);
    }
}
