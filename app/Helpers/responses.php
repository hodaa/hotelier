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
