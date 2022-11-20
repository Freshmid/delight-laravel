<?php

namespace App\Http\Controllers;

use Exception;

class ApiFormat
{
  public static function json($data, $status = true, $code = 200)
  {
    $response = [
      "data" => $data,
      "status" => $status,
    ];
    return response()->json($response, $code);
  }
}
