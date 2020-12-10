<?php

class Users extends CI_Controller{
   

    public function show($userId){
        // $this->load->model('user_model');
        // $data['results']= $this->user_model->get_users($userId);

        // $this->load->view('user_view',$data);

        // foreach($result as $value){
        //     echo $value->username."<br>";
        // }
    }

//   public function insert(){
//       $this->user_model->create_users([
//         'username'=>"Sodabeh",
//         'password'=>'4040'
//       ]);
//   }




//   public function update(){
//       $id=3;
//       $this->user_model->update_users([
//           'username'=>'Atefa'
//       ],$id);
//   }

//   public function delete(){
//       $id=2;
//       $this->user_model->delete_users($id);
//   }
   
  public function register(){
      $this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
      $this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
      $this->form_validation->set_rules('user_name','User Name','trim|required|min_length[3]');
      $this->form_validation->set_rules('email','Email','trim|required|min_length[3]');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
      $this->form_validation->set_rules('confirmPassword','Confirm Password','trim|required|min_length[3]|matches[password]');

      if($this->form_validation->run() == FALSE){
        $data['main_view']='users/register_view';
        $this->load->view('layouts/main',$data);
      }else{

       if($this->user_model->create_user()){
           $this->session->set_flashdata('user_registred','User has been registred');
           redirect('home/index');
       }else{

       }
      }
    
  }



public function login(){
    $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
    $this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
    $this->form_validation->set_rules('confirmPassword','Confirm Password','trim|required|min_length[3]|matches[password]');
    if($this->form_validation->run() == FALSE){
        $data=array(
            'errors'=>validation_errors()
        );
        $this->session->set_flashdata($data);
        redirect('home');
    }
    else{
        $username=$this->input->post('username');
        $password=$this->input->post('password');
       $userId= $this->user_model->login_user($username,$password);
        if($userId){
            $user_data=array(
                'user_id'=>$userId,
                'username'=>$username,
                'logged_in'=>true
            );
        $this->session->set_userdata($user_data);
        $this->session->set_flashdata('login_success','You are now logged in!');
        // $data['main_view']='admin_view';
        // $this->load->view('layouts/main',$data);
        redirect('home/index');
        }
        else{
        $this->session->set_flashdata('login_failed','You are not logged in!');

        redirect('home/index');
            
        }
    }
    // echo "works<br>";
    // echo $this->input->post('username');
}



public function logout(){
    $this->session->sess_destroy();
    redirect('home/index');
}
}

?>