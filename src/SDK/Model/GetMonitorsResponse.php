<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class GetMonitorsResponse
{
    /**
     *
     *
     * @var string
     */
    protected $stat;
    /**
     *
     *
     * @var string
     */
    protected $offset;
    /**
     *
     *
     * @var string
     */
    protected $limit;
    /**
     *
     *
     * @var string
     */
    protected $total;
    /**
     *
     *
     * @var MonitorArray
     */
    protected $monitors;
    /**
     *
     *
     * @var string
     */
    protected $id;
    /**
     *
     *
     * @var string
     */
    protected $message;
    /**
     *
     *
     * @return string
     */
    public function getStat() : string
    {
        return $this->stat;
    }
    /**
     *
     *
     * @param string $stat
     *
     * @return self
     */
    public function setStat(string $stat) : self
    {
        $this->stat = $stat;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getOffset() : string
    {
        return $this->offset;
    }
    /**
     *
     *
     * @param string $offset
     *
     * @return self
     */
    public function setOffset(string $offset) : self
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getLimit() : string
    {
        return $this->limit;
    }
    /**
     *
     *
     * @param string $limit
     *
     * @return self
     */
    public function setLimit(string $limit) : self
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getTotal() : string
    {
        return $this->total;
    }
    /**
     *
     *
     * @param string $total
     *
     * @return self
     */
    public function setTotal(string $total) : self
    {
        $this->total = $total;
        return $this;
    }
    /**
     *
     *
     * @return MonitorArray
     */
    public function getMonitors() : MonitorArray
    {
        return $this->monitors;
    }
    /**
     *
     *
     * @param MonitorArray $monitors
     *
     * @return self
     */
    public function setMonitors(MonitorArray $monitors) : self
    {
        $this->monitors = $monitors;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     *
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     *
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}
