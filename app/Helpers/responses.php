<?php

function validateErrors($errors)
{
    $data = [
        'status' => 'validations',
        'message' => (empty($message)) ? __('response.invalid_data') : $message,
        'errors' => $errors,
    ];

    return response()->json($data, 422);
}

function successWithResponse($data, $code = 200)
{
    $data = [
        'status' => 'success',
        'data' => $data,
    ];
    return response()->json($data, $code);
}

function success($message, $code=200)
{
    $data = [
        'status' => 'success',
        'message' => $message,
    ];
    return response()->json($data, $code);
}
function fail($message, $code)
{
    $data = [
        'status' => 'success',
        'message' => $message,
    ];
    return response()->json($data, $code);
}
