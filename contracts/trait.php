<?php

trait logger{
    public function log($data){
        echo "$data logged.";
    }
}

class sample{
    use logger;
}

(new sample())->log('zimakrimi');