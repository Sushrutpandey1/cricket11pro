<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('AuthModel');
        // $this->load->helper('varifyAuthToken');
    }


    public function index(){
        $this->load->view('admin/adminlogin');
    }



    public function login(){

    //     $jwt = new JWT();
    //     $JwtSecretkey = "adminsecreate";

    //     $emailaddress = $this->input->post('emailaddress');
    //     $loginpassword = $this->input->post('loginpassword');

    // //    $data = $this->AuthModel->check_login($emailaddress,$loginpassword);

    //      $data = $this->AuthModel->check_login($emailaddress,$loginpassword);

    //      if($data===false){
    //          echo "user not found";
    //      }else{
    //      $token = $jwt->encode($data,$JwtSecretkey,'HS256');
    //      echo json_encode($token);
    //      }

    $data = array();
    if ($this->AuthModel->check_login() || isset($_SESSION['id'])) {
            $user_id = $this->session->userdata('id');           
            $user_name = $this->session->userdata('name');
            
            if($user_id ==1){
                
                $this->load->view('admin/dashboard',$data);
                
                // echo "this is dashbord";
            }else{
                redirect(base_url());
            }
        }
        else{
        if ($this->input->post()) {
            $data = array('error_msg' => 'Invalid username or password.');
        } else {
            $data = array();
        }
        $data['js_script'] = 'login';
        $this->load->view('login', $data);

        // print_r($data);

    }

         
    }
   


    // public function decode_token(){
    //     $token = $this->uri->segment(3);

    //     $jwt = new JWT();

    //     $JwtSecretkey = "Myscretwordshare";

    //     $decode_token = $jwt->decode($token,$JwtSecretkey,'HS256');

    //     // echo '<pre>';
    //     // print_r($decode_token);


    //     // $token1 = $jwt->jsonEncode($decode_token);
    //     // echo $token1;
    // }


    // public function signup(){
    //     if($this->input->post()){
    //         $name = $this->input->post('name');
    //         $email = $this->input->post('email');
    //         $password = $this->input->post('password');
    //         $data = array(
    //             'name'=>$name,
    //             'email'=>$email,
    //             'password'=>$password,
    //         );

    //        $userid =  $this->AuthModel->signup($data);

    //        if($userid){
    //            echo 'user register successfully';
    //        }else{
    //            echo 'user registration faild';
    //        }
    
    //     }
    // }












    public function logout()
	{

        if($this->session->userdata('id')){
            /***Activity Logs***/
          
           /***Activity Logs End***/
            $this->session->sess_destroy();
        }

       

        //if (isset($_SESSION['id'])) {
        //    unset($_SESSION);
        //    session_destroy();
        //}
        $this->load->view('admin/adminlogin');
	}


}
