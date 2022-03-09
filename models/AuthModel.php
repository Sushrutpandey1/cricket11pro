<?php 

class AuthModel extends CI_Model
{

    function check_login(){
    //     $this->db->select('*');
    //     $this->db->from('admin');
    //     $this->db->where('emailaddress',$emailaddress);
    //     $this->db->where('loginpassword',md5($loginpassword));


    //     $query = $this->db->get();



    //     if($query->num_rows()>0){
    //         return $query->result_array();
    //     }else{
    //         return "user not found";
        
    //     }

    // }

    // function signup($data){

    //     $this->db->insert('user',$data);
    //     return $this->db->insert_id();
         


    $emailaddress = $this->input->post('emailaddress');
    $loginpassword = $this->input->post('loginpassword');


    if (!empty($emailaddress) && !empty($loginpassword)) 
        {
            $this->db->select('*');
            $this->db->where('emailaddress',$emailaddress);
            $this->db->where('loginpassword',md5($loginpassword));
            $datas = $this->db->get('admin')->row_array();

            if ($datas) {
                // $datas = $query->result_array();
                 $data = array(
                    
                     'id' => trim($datas['id']),                       
                     'name' => trim($datas['fullname']),
                     'user_type' => 1
                     );
                    
                     $this->session->set_userdata($data);
                 return true;
             
            }     
        }

    }

}





// AIRC0000001
// raxib31449@xindax.com
// Tomharry123@


// 1 - php our sikho ci,and laravel   
// 2 - aws cloud  
// 3 - github 