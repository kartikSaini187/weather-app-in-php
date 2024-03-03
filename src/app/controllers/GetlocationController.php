<?php

use Phalcon\Mvc\Controller;

class GetlocationController extends Controller
{
    public function indexAction()
    {
    }

    public function getCurrentAction()
    {

        $location = $this->request->get('location');
        $location = urlencode($location);
        $weatherresult = $this->api->currentweather($location);
        $this->session->set('result', $weatherresult);
        $this->view->weatherresult = $weatherresult;
    }
    public function getHistoryAction()
    {
        $date = $this->request->get('date');
        $location = $this->request->get('location');
        $history = $this->api->History($date, $location);
        $this->view->data = $history;
    }
    public function getSportsAction()
    {
        $location = $this->request->get('location');
        $sports = $this->api->Sports($location);
        $this->view->sports = $sports;
    }
    public function getAstronomyAction()
    {
        $location = $this->request->get('location');
        $date = $this->request->get('date');
        $astronomy = $this->api->Astronomy($date, $location);
        $this->view->astronomy = $astronomy;
    }
    public function getAqiAction()
    {
        $location = $this->request->get('location');
        $aqiresult = $this->api->currentweather($location);
        $this->view->aqiresult = $aqiresult;
    }
    public function getForecastAction()
    {
        $location = $this->request->get('location');
        $forecast = $this->api->Forecast($location);
        $this->view->forecast = $forecast;
    }
    public function getAlertAction()
    {
        $location = $this->request->get('location');
        $forecast = $this->api->Forecast($location);
        $this->view->alert = $forecast;
    }
    public function getTimeZoneAction()
    {
        $location = $this->request->get('location');
        $timezone = $this->api->Timezone($location);
        $this->view->timezone = $timezone;
    }
}
