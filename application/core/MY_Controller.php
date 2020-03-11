<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . '/interfaces/CrudModelInterface.php';

class MY_Controller extends \CI_Controller
{
    /**
     * @var array
     */
    protected $_js = array();
    /**
     * @var array
     */
    protected $_css = array();

    /**
     * @var array
     */
    protected $data = array('MY_Controller');

    public function __construct()
    {
        parent::__construct();

        $this->verifyUser(true);
    }

    /**
     * @param $user
     */
    public function verifyUser($user)
    {
        if ($user) {
            return true;
        } else {
            exit("Permission Denied");
        }
    }
}
