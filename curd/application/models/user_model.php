<?php

class user_model extends CI_model
{
    function updateuser($userid,$fromArray)
    {
        $this->db->where('user_id',$userid);
        $this->db->update('users',$fromArray);  //  update users SET name=? ,email = ? where user_id = ?;


    }
    
    function getuser($userid)
    {
        $this->db->where('user_id',$userid);
        return $user = $this->db->get('users')->row_array();  // select * from users where user_id = ?;
    }
    function all()
    {
            return $users =$this->db->get('users')->result_array(); // select * from users
    }
    function create($fromArray)
    {
            $this->db->insert('users',$fromArray); //insert into users() values()

    }
    function deleteuser($userid)
    {
        $this->db->where('user_id',$userid);
        $this->db->delete('users');
    }
}

?>