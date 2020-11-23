<?php


namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

class ResultInfo
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $departure;

    /**
     * @MongoDB\Field(type="int", name="input_count")
     */
    protected $inputCount;

    /**
     * @MongoDB\Field(type="int", name="output_count")
     */
    protected $outputCount;

    /**
     * @MongoDB\Field(type="timestamp", name="created_at")
     */
    protected $createdAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return ResultInfo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param $departure
     * @return ResultInfo
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getInputCount()
    {
        return $this->inputCount;
    }

    /**
     * @param $inputCount
     * @return ResultInfo
     */
    public function setInputCount($inputCount)
    {
        $this->inputCount = $inputCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOutputCount()
    {
        return $this->outputCount;
    }

    /**
     * @param $outputCount
     * @return ResultInfo
     */
    public function setOutputCount($outputCount)
    {
        $this->outputCount = $outputCount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param $createdAt
     * @return ResultInfo
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }


}