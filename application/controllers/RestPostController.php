<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;
require(APPPATH . 'libraries/REST_Controller.php');

class RestPostController extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('FormModel', 'fm');
    }


    function getTax($customer_price, $customer_days){
        $gstp = array(28, 18, 12);
        $gsttax = array(7500, 2500, 1000);
        $pricepd = ($customer_price/$customer_days);
        for($i = 0; $i < sizeof($gsttax); $i++){
            if($pricepd >= $gsttax[$i]){
                return $gstp[$i];
            }
        }
        return 0;
    }

    function add_booking_post() {
        $guest_id = uniqid();
        $property_id = uniqid();
        $customer_name = $this->post('name');
        $customer_contact = $this->post('contact');
        $customer_property = $this->post('selectedp');
        $customer_roomtype = $this->post('roomtype');
        $customer_roomno = $this->post('roomno');
        $customer_checkIn = $this->post('checkIn');
        $customer_checkOut = $this->post('checkOut');
        $customer_gateway = $this->post('selectedName');
        $customer_days = $this->post('days');
        $customer_price = $this->post('price');
        $customer_id_num = $this->post('id_num');
        $customer_extra = $this->post('extra');
        $customer_id_type = $this->post('id_type');
        $customer_id_address = $this->post('id_address');
        $customer_id_contact = $this->post('id_contact');
        $customer_noofguest = $this->post('guest_count');
        //$customer_sgstpct = 
        $customer_cgstpct =  $this->getTax($customer_price, $customer_days);
        $customer_cgstamt = $customer_price*($customer_cgstpct/100); 
        $customer_totalprice = ($customer_price+$customer_cgstamt);
        $result = $this->fm->add_property($property_id, $customer_property, $customer_roomtype, $customer_roomno, $customer_price, $customer_extra, $customer_cgstpct, $customer_cgstamt, $customer_days, $customer_totalprice);
        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } 
        $result = $this->fm->add_guest($guest_id, $customer_noofguest);
        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        }
        $result = $this->fm->add_booking(uniqid(), $guest_id, $property_id, $customer_name, $customer_gateway, $customer_contact, $customer_checkIn, $customer_checkOut, $customer_extra);
        if ($result === FALSE) {
            $this->response(array('status' => 'failed'));
        } else {
            $this->response(array('status' => 'success'));
        }
    }


}