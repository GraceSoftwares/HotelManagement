<?php 
class Controller extends CI_Controller{

    

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper  
        $this->load->model('Countries');  
        $this->load->library('pagination');
    } 

    public function index()
    {
        //echo "Hello World";
        //$this->load->helper('url');
        $this->load->view('dashboard');
    }
    
    public function dashboard(){
        $this->load->view('dashboardcontent');
    }

    private function dashData($tab){
        /*$config = array();
        $config["base_url"] = base_url() . "Controller/example1";
        $config["total_rows"] = $this->Countries->record_count();
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;*/
        $data["results"] = $this->Countries->
            fetch_data($tab);
        //$data["links"] = $this->pagination->create_links();
        return $data;
    }


    // Dashboard Tables 
    
    //show booking table in dashboard
    public function bookingtable(){
        $this->load->view('bookingtable', $this->dashData('booking'));
    }

    //show checkin table in dashboard
    public function checkintable(){
        $this->load->view('checkintable',$this->dashData('checkin'));
    }

    //show checkout table in dashboard
    public function checkouttable(){
        $this->load->view('checkouttable',$this->dashData('checkout'));
    }
    //-------------Dashboard Tables-------------//

    // checkout
    public function checkout(){
        $roomnum = $this->uri->segment(3);
        $data["results"] = $this->Countries->checkout($roomnum);
        $this->load->view('checkout');
    }


    public function listall(){
        $this->load->view('report');
    }

    private function reportData($selector){
        $data["results"] = $this->Countries->getall($selector);
        return $data;
    }


    // Report Tables 

    public function upcoming(){
        $this->load->view('upcoming',$this->reportData('upcoming'));
    }

    public function ongoing(){
        $this->load->view('ongoing',$this->reportData('ongoing'));
    }

    public function completed(){
        $this->load->view('completed',$this->reportData('completed'));
    }

    public function tax(){
        $this->load->view('tax',$this->reportData('tax'));
    }

    //-------------Report Tables-------------//

    public function regform(){
        $this->load->view('regform');
    }

    // presenter
    public function presenter() {
        $id = $this->uri->segment(3);
        $data["results"] = $this->Countries->cust($id);
        $this->load->view('presenter', $data);
    }


    
    /*public function formPage(){
        $this->load->view('registrationform');
    }*/
    

}

?>