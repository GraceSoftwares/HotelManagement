<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model {

    private $booking = 'tablebooking';
    private $guest = 'tableguest';
    private $property = 'tableproperty';

    function add_booking($id, $guest_id, $property_id, $customer_contact, $customer_checkIn, $customer_checkOut, $customer_price) {
        $data = array('id' => $id, 'guestid' => $guest_id, 'propertyid' => $property_id, 'checkindate' => $customer_checkIn, 'checkoutdate' => $customer_checkOut, 'totalprice' => $customer_price, 'phone' => $customer_contact, 'status' => 'ACTIVE');
        $this->db->insert($this->booking, $data);
    }

    function add_guest($guest_id, $customer_noofguest){
        $data = array('guestid' => $guest_id, 'noofguest' => $customer_noofguest);
        $this->db->insert($this->guest, $data);
    }

    function add_property($property_id, $customer_price){
        $data = array('propertyid' => $property_id, 'price' => $customer_price);
        $this->db->insert($this->property, $data);
    }

}