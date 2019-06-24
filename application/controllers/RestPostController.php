<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require(APPPATH . 'libraries/REST_Controller.php');

class RestPostController extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('FormModel', 'fm');
    }

    function add_guest_post() {
        $guest_noofguest = $this->post('guestcount');
        $result = $this->fm->add_guest($guest_noofguest);

        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }

}