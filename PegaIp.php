<?php

//Cesar Henrique

class pegaIp {
    private $ipInterno;
    private $ipExterno;
    private $cidade;
    private $pais;
    private $isp;
    private $regiao;
    private $status;
    private $countryCode;

    public function __construct(){
        $this->ipInterno = $_SERVER["REMOTE_ADDR"];
        $json = json_decode(file_get_contents('http://ip-api.com/json'));
        if ($json->status == 'success'){
            $this->ipExterno = $json->query;
            $this->cidade = $json->city;
            $this->pais = $json->country;
            $this->isp = $json->isp;
            $this->regiao = $json->region;
            $this->status = $json->status;
            $this->countryCode = $json->countryCode;
        }
    }

    /**
     * @return mixed
     */
    public function getIpInterno()
    {
        return $this->ipInterno;
    }

    /**
     * @return mixed
     */
    public function getIpExterno()
    {
        return $this->ipExterno;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @return mixed
     */
    public function getIsp()
    {
        return $this->isp;
    }

    /**
     * @return mixed
     */
    public function getRegiao()
    {
        return $this->regiao;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
