<?php

namespace App\Entity;

class Client {

    private $name;
    private $lastUpdate;
    private $temperature;
    private $airPresure;
    private $humidity;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastUpdate
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set the value of lastUpdate
     *
     * @return  self
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get the value of temprature
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set the value of temprature
     *
     * @return  self
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get the value of airPresure
     */
    public function getAirPresure()
    {
        return $this->airPresure;
    }

    /**
     * Set the value of airPresure
     *
     * @return  self
     */
    public function setAirPresure($airPresure)
    {
        $this->airPresure = $airPresure;

        return $this;
    }

    /**
     * Get the value of humidity
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set the value of humidity
     *
     * @return  self
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }
}