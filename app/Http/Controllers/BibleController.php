<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class BibleController extends BaseController
{
    public function __construct()
    {

    }

    /**
     * Get the list of the types of bibles
     *
     * @return Response
     */
    public function getBibles()
    {
        return "This is a test";
    }
}
