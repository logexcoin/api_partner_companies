<?php

/*
*
*   @marinetraffic API for LogeX
*
*/

class apiMarineTraffic{

    public $testMMSI = '240391000';

    public function getRealtimeCoordinate($mmsi){

        $coordinates = file_get_contents('https://services.marinetraffic.com/api/exportvessel/v:5/d151ee6893d48f9ae5d080531dce0ede9201770d/timespan:20/mmsi:310627000');
        
        $getCoordinates = json_encode($coordinates);
        
        return $getCoordinates;

    }


    public function getPortData(){

        //portdata api here

    }

}




