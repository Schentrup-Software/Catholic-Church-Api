<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Clients\BibleClient\Api\BiblesApi;
use App\Clients\CalendarClient\Api\CalendarApi;

class BibleController extends BaseController
{
    private BiblesApi $biblesApi;
    private CalendarApi $calendarApi;

    public function __construct(BiblesApi $biblesApi, CalendarApi $calendarApi)
    {
        $this->biblesApi = $biblesApi;
        $this->calendarApi = $calendarApi;
    }

    /**
     * Get the list of the types of bibles
     *
     * @return Response
     */
    public function getBibles()
    {
        $today = $this->calendarApi->langCalendarsCalendarTodayGet("en", "general-en");
        return $today;
    }
}
