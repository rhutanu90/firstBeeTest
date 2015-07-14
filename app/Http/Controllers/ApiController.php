<?php
/**
 * Created by PhpStorm.
 * User: Hutanu
 * Date: 7/14/15
 * Time: 10:25 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class ApiController extends Controller{

    protected $statusCode = 200;

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }


    public function respondNotFound($msg = "Not found!"){
        return $this->setStatusCode(404)->respondWithError($msg);
    }

    public function respondInternalError($msg = "Internal Error!"){
        return $this->setStatusCode(500)->respondWithError($msg);
    }

    public function respond($data, $headers = []){
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($msg){
        return $this->respond([
            'error' => [
                'message' => $msg,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }








}
