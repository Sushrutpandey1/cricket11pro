<?php  defined('BASEPATH') OR exit('No direct script access allowed');
    //website controller
class Website extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('Website_model');        
        $this->load->library(array('form_validation'));   
        // $this->load->library('Stack_web_gateway_paytm_kit');
        $this->load->library('email',array(
            'mailtype'  => 'html',
            'newline'   => '\r\n'
        ));

        
    }
   
    public function how_to_play()
    {
        $this->load->view('website/how_to_play');
    }
    
    public function termsandconditions()
    {
        $data['title'] = 'Terms and Condition' ;
        $this->load->view('website/header');
        $this->load->view('website/termsandcondition',$data);
        $this->load->view('website/footer');
    }

    public function pointsystem()
    {
        $data = array();
        $data['title'] = 'Point System' ;
        $data['points'] = $this->Website_model->pointsystem();
        $this->load->view('website/header');
        $this->load->view('website/PointSystem',$data);
        $this->load->view('website/footer');
    }

    public function aboutus()
    {   
        $data['title'] = 'About Us' ;
        $this->load->view('website/header');
        $this->load->view('website/aboutus');
        $this->load->view('website/footer');
    }


    public function contactus()
    {   
        $data['title'] = 'Contact Us' ;
        $this->load->view('website/header');
        $this->load->view('website/contactus');
        $this->load->view('website/footer');
    }
 
}
