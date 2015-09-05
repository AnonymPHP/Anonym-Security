<?php
/**
 * This file belongs to the AnoynmFramework
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 * Thanks for using
 */


namespace Anonym\Components\Security\Authentication;
use Anonym\Components\HttpClient\Request;
/**
 * Class Guard
 * @package Anonym\Components\Security\Authentication
 */
class Guard extends Authentication
{

    /**
     * the instance of request
     *
     * @var Request
     */
    private $request;

    /**
     *  create a new instance
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->request = new Request();
    }
}
