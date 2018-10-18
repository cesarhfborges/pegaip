<?php

/**
*  Classe Funciona para qualquer lugar do mundo.
*  @author CeSaR HenriQ...
*  Classe Aberta ao uso..........
*/

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
     * @return Ip Externo formato 000.000.000.000
     */
    public function getIpInterno()
    {
        return $this->ipInterno;
    }

    /**
     * @return Ip Local formato 000.000.000.000
     */
    public function getIpExterno()
    {
        return $this->ipExterno;
    }

    /**
     * @return Cidade Ex. Brasília
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @return País Ex. Brazil
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @return Provedor de Serviços Internet (ISP) Ex. Vivo, GVT, NET...
     */
    public function getIsp()
    {
        return $this->isp;
    }

    /**
     * @return UF estado ex. DF, GO, PR, SP, AM...
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
