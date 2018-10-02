<?php 

namespace App\Exceptions;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class InvalidOrgCodeException
{
    public function render($request, Exception $exception)
{
    if ($exception instanceof PDOException) {
        return response()->redirect()->back();
    }
    else if ($exception instanceof QueryException) {
        return response()->redirect()->back();
    }

    return parent::render($request, $exception);
}
    
}

?>