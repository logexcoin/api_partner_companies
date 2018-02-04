<?php

/*
*
*   @here we track the Logex Fleet MMSI numbers
*
*/


class mmsi{

    protected $freet = [];

    protected $vesselName = "";

    protected $imo = "";

    protected $lat = "";

    protected $long = "";
    
    protected $destination = "";
    
    protected $flag = "";
    
    protected $callsign = "";
    

    public function getVesselNameByMMSI($mmsi){

        //$this->fleet = $fleet;
        //fleet for realtime data dev. 

        $testFleet = [
            'DELPHIS GDANSK' => 477850500,
            'NYK OWL' => 431772000,
            'STAR AMETHYST' => 311000630,
            'CORATO' => 249431000
        ];

        foreach($testFleet as $key => $tf){

            if(tf == $mmsi){
                return $key;
            }
            else{
                return null;
            }

        }


    }


    public function getVesselNameByIMO($imo){
        
        //todo dev live api $this->imo = $imo;
                $testFleet = [
                    'DELPHIS GDANSK' => 9780653,
                    'NYK OWL' => 9741449,
                    'STAR AMETHYST' => 9523251,
                    'CORATO' => 9749829
                ];
        
                foreach($testFleet as $key => $tf){
        
                    if(tf == $imo){
                        return $key;
                    }
                    else{
                        return null;
                    }
        
                }
        
        
            }

}