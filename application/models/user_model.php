<?php


class User_model extends CI_Model{

//     public function get_users($userId){
//         // $this->db->where('id',$userId);
//         // in another way..
//         $this->db->where(['id'=>$userId,'username'=>'Aqida']);
//        $query= $this->db->get('user');
//        return $query->result();//array of objects.....
//     }

//     public function create_users($data){
//         $this->db->insert('user',$data);
//     }


//     public function update_users($data,$id){
//         $this->db->where(['id'=>$id]);
//         $this->db->update('user',$data);
//     }

//     public function delete_users($id){
//         $this->db->where(['id'=>$id]);
//         $this->db->delete('user');
//     }

public function create_user(){
    $options=['cost'=>12];
    $encripted_pass=password_hash($this->input->post('password'),PASSWORD_BCRYPT,$options);
    $data=array(
        'first_name' =>$this->input->post('first_name'),
        'last_name' =>$this->input->post('last_name'),
        'email' =>$this->input->post('email'),
        'username' =>$this->input->post('user_name'),
        'password' =>$encripted_pass
    );
    $insert_data=$this->db->insert('user',$data);
    return $insert_data;
}

public function login_user($username,$password){
    $this->db->where(['username'=>$username]);
   
    $result=$this->db->get('user');
    $db_password=$result->row(6)->password;
    if(password_verify($password,$db_password)){

       return $result->row(0)->id;
    }
    else{
        return false;
    }

}


}




?>