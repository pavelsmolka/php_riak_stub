<?php

namespace Riak\Input;

/**
 * Class DeleteInput
 * @package Riak\Input
 * Optional extra input for a riak delete request.
 */
class DeleteInput extends Input
{
    /**
     * @var null|int
     */
    protected $r = null;

    /**
     * @var null|int
     */
    protected $rw = null;

    /**
     * @var null|int
     */
    protected $pr = null;

    /**
     * @var null|int
     */
    protected $w = null;

    /**
     * @var null|int
     */
    protected $dw = null;

    /**
     * @var null|int
     */
    protected $pw = null;

    /**
     * @var null|string
     */
    protected $vClock = null;

    /** Set DW value
     * @param int $dw
     */
    public function setDW($dw) {}

    /** Get DW value
     * @return int|null
     */
    public function getDW() {}

    /** Set PR value
     * @param int $pr
     */
    public function setPR($pr) {}

    /** Get PR Value
     * @return int|null
     */
    public function getPR() {}

    /** Set PW value
     * @param int $pw
     */
    public function setPW($pw) {}

    /** Get PW value
     * @return int|null
     */
    public function getPW() {}

    /** Set R value
     * @param int $r
     */
    public function setR($r) {}

    /** Get R value
     * @return int|null
     */
    public function getR() {}

    /** Set RW value
     * @param int $rw
     */
    public function setRW($rw) {}

    /** Get RW value
     * @return int|null
     */
    public function getRW() {}

    /** Set vclock
     * @param string $vClock
     */
    public function setVClock($vClock) {}

    /** Get vclock
     * @return null|string
     */
    public function getVClock() {}

    /** Set W value
     * @param int $w
     */
    public function setW($w) {}

    /** Get W value
     * @return int|null
     */
    public function getW() {}


}