<?php

abstract class onlineGateway
{
    protected $options;

    public function __construct()
    {
        $this->options = array(
            'mellat' => array(
                'merchant' => '123456354',
                'username' => 'azimkarimi',
                'password' => 'Alsd9543fD#$dodsa'
            ),
            'saman' => array(
                'api_key' => '3409rfmwa25ujrroe5u34ojrf0uwer',

            ),
            'parsian' => array(
                'username'=>'azimkarimi',
                'password'=>'AS4k324jflsDsd8342'
            )
        );
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();
}

class Mellat extends onlineGateway
{
    private $gatewayName;
    private $mellat_options;
    public function __construct()
    {
        $this->gatewayName = 'mellat';
        parent::__construct();
        $this->mellat_options = $this->options[$this->gatewayName];
    }

    public function sendRequest()
    {

        var_dump($this->mellat_options);

    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }
}

$mellat = new Mellat();
//$mellat->sendRequest();


$gatway = Factory::make('mellat');
$gatway->sendRequest();

class Factory{
    public static function make($class){
        $className = ucfirst($class);
        if (!class_exists($className)){
            return false;
        }else{
            return new $className;
        }
    }
}