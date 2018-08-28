<?php

namespace App\Http\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ApiController extends Controller
{

    /**
     * @var HTTP Status code
     */
    protected $statusCode = Response::HTTP_OK;

    /**
     * @return int
     */
    public function getStatusCode() {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode) {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @param object    $data
     * @param array     $headers
     * @return Response
     */
    public function respond($data, $headers = []) {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function respondWithSuccess($resources = []) {
        return $this->respond($resources);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondWithError($message) {
        return $this->respond([
            'status_code' => $this->getStatusCode(),
            'message' => $message
        ]);
    }

    /**
     * @return mixed
     * @param $message
     */
    public function respondUnauthorized($message = 'The requested resource failed authorization') {
        return $this->setStatusCode(Response::HTTP_UNAUTHORIZED)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondNotFound($message = 'The requested resource could not be found') {
        return $this->setStatusCode(Response::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondInternalError($message = 'An internal server error has occurred') {
        return $this->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return mixed
     */
    public function respondUnprocessableEntity($message = 'The request cannot be processed with the given parameters') {
        return $this->setStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY)->respondWithError($message);
    }

    /**
     * @param array $resources
     * @return mixed
     */
    public function respondCreated($resources = []) {
        return $this->setStatusCode(Response::HTTP_CREATED)->respondWithSuccess($resources);
    }

    /**
     * @param array $resources
     * @return mixed
     */
    public function respondUpdated($resources = []) {
        return $this->setStatusCode(Response::HTTP_UPDATED)->respondWithSuccess($resources);
    }

    /**
     * @return mixed
     */
    public function respondNoContent() {
        return $this->setStatusCode(Response::HTTP_NO_CONTENT)->respondWithSuccess();
    }

    /**
     * @param string|null $message
     * @return mixed
     */
    public function respondHttpConflict($message = null) {
        return $this->setStatusCode(Response::HTTP_CONFLICT)->respondWithError($message);
    }
}
