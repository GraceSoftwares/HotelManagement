<?php 
class Controller extends CI_Controller{

    

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url'); //Loading url helper    
    } 

    public function index()
    {
        //echo "Hello World";
        //$this->load->helper('url');
        $this->load->view('dashboard');
    }  
    
    public function formPage(){
        $this->load->view('registrationform');
    }

    public function dashboard(){
        $this->load->view('dashboardcontent');
    }

}

?>