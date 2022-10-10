<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Clients\BibleClient\Api\BiblesApi;

class BibleController extends BaseController
{
    private BiblesApi $biblesApi;

    public function __construct(BiblesApi $biblesApi)
    {
        $this->biblesApi = $biblesApi;
    }

    /**
     * Get the list of the types of bibles
     *
     * @return Response
     */
    public function getBibles()
    {
        return $this->biblesApi->getBibles();
    }
}
