<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model {

    private $booking = 'tablebooking';
    private $guest = 'tableguest';
    private $property = 'tableproperty';

    function add_booking($id, $guest_id, $property_id, $customer_name, $customer_days, $customer_gateway, $customer_contact, $customer_checkIn, $customer_checkOut, $customer_price){
        $data = array(
        'id' => $id, 
        'guestid' => $guest_id, 
        'propertyid' => $property_id, 
        'name' => $customer_name, 
        'checkindate' => $customer_checkIn, 
        'checkoutdate' => $customer_checkOut,
        'totalnights' => $customer_days,  
        'totalprice' => $customer_price,
        'gateway' => $customer_gateway, 
        'bookedby' => 'Anonymous', 
        'phone' => $customer_contact, 
        'status' => 'ACTIVE');
        $this->db->insert($this->booking, $data);
    }

    function add_guest($guest_id, $customer_noofguest){
        $data = array(
        'guestid' => $guest_id, 
        'noofguest' => $customer_noofguest);
        $this->db->insert($this->guest, $data);
    }

    function add_property($property_id, $customer_property, $customer_roomtype, $customer_roomno, $customer_price, $customer_extra, $customer_cgstpct, $customer_cgstamt){
        $data = array(
        'propertyid' => $property_id,
        'property'=>$customer_property,
        'roomtype'=>$customer_roomtype,
        'roomno' => $customer_roomno,
        'price' => $customer_price,
        'additionalprice' => $customer_extra,
        'cgstpct' => $customer_cgstpct,
        'cgstamt' => $customer_cgstamt
        );
        $this->db->insert($this->property, $data);
    }

}