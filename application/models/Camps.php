<?php
    // system/application/models/user.php

    class Camps extends CI_Model {

            function __construct()
            {
                // Call the Model constructor
                parent::__construct();
            }

             function add_camp($lat, $lng, $uid) {
                $this->lat = $lat;
                $this->lng = $lng;
                $this->uid = $uid;
                $this->db->insert('camps', $this);
              }

              function get_user($name, $password)  {
                $this->db->select('*');
                $this->db->from('camps');
                $this->db->where('name', $name);
                $this->db->where('password', $password);
                $query = $this->db->get();

                return $query->result();
              }
    }
?>
