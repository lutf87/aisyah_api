<?php
namespace App\Traits;

use Symfony\Component\HttpFoundation\Response;

trait ApiResponser
{
    protected function success($data, $message = null, $statusCode = Response::HTTP_OK)
    {
        return response()->json(
            [
                'status' => 'success',
                'message' => $message,
                'data' => $data
            ], $statusCode
        );
    }

    protected function error($message = null, $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return response()->json(
            [
                'status' => 'error',
                'message' => $message,
                'data' => null
            ], $statusCode
        );
    }
}
?>
