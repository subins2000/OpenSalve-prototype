<?php
    // system/application/models/user.php

    class User extends CI_Model {

            function __construct()
            {
                // Call the Model constructor
                parent::__construct();
            }

             function save_user($username,$password)  {

                $this->name   = $username; 
                $this->password = $password;
                $this->db->insert('users', $this);
              }

               function get_user($name,$password)  {

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('name', $name);
                $this->db->where('password', $password);
                $query = $this->db->get();

                return $query->result();
              }

    }
?>