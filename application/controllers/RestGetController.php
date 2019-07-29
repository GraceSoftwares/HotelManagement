<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require(APPPATH . 'libraries/REST_Controller.php');

/**
 * Description of RestGet
 *
 * @author https://roytuts.com
 */
class RestGetController extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Countries', 'c');
    }


    function customer_get() {
        $roomnum = $this->get('id');    
        if ($roomnum < 0 && $roomnum > 500) {
            $this->response(NULL, 400);
        }
        $data = $this->c->checkout('12');
        if ($data) {
            $this->response($data, 200); // 200 being the HTTP response code
        } else {
            $this->response(NULL, 404);
        }
    }


}