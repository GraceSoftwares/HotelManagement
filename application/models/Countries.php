<?php
class Countries extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("tablebooking");
    }

    //for dashboard table
    public function fetch_data($tab) {
        $date = new DateTime("now");
        $curr_date = $date->format('Y-m-d ');

//        $this->db->limit($limit, $start);
        $this->db->from('tablebooking b'); 
        $this->db->join('tableguest g','g.guestid = b.guestid');
        $this->db->join('tableproperty p','p.propertyid=b.propertyid');
        switch($tab){
            case 'booking':$this->db->where('DATE(bookingdate)',$curr_date);break;
            case 'checkin':$this->db->where('DATE(checkindate)',$curr_date);break;
            case 'checkout':$this->db->where('DATE(checkoutdate)',$curr_date);break;
        }
        $this->db->where('DATE(bookingdate)',$curr_date);//use date function
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


    public function checkout($roomnum){
        $this->db->from('tablebooking b');
        $this->db->join('tableguest g','g.guestid=b.guestid');
        $this->db->join('tableproperty p','p.propertyid=b.propertyid');
        $qu = '(p.roomno = "'.$roomnum.'" and (status = "out" or status = "in"))';
        $this->db->where($qu);
        $queryb = $this->db->get();
        //$queryc = $this->db->get_where( 'tableproperty', array('propertyid' => $varb) );
        if($queryb->num_rows() > 0){
            return $queryb->row();
        }
        return false;
    }

    // presenter
    public function cust($id){
        $this->db->from('tablebooking b');
        $this->db->join('tableguest g','g.guestid=b.guestid');
        $this->db->join('tableproperty p','p.propertyid=b.propertyid');
        $this->db->where('b.id',$id);
        $queryb = $this->db->get();
        //$queryc = $this->db->get_where( 'tableproperty', array('propertyid' => $varb) );
        if($queryb->num_rows() > 0){
            return $queryb->row();
        }
        return false;
    }

    //report
    public function getall($selector){
        $this->db->from('tablebooking b');
        $this->db->join('tableguest g','g.guestid=b.guestid');
        $this->db->join('tableproperty p','p.propertyid=b.propertyid');
        switch($selector){
            case 'upcoming':$this->db->where('b.status', 'yet to come');break;
            case 'ongoing':$this->db->where('(b.status ="in" or status = "out" )');break;
            case 'completed':$this->db->where('b.status','vaccated');break;
            default: $this->db->select('*');
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

}
?>