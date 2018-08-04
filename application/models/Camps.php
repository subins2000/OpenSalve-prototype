<?php
    // system/application/models/user.php

    class Camps extends CI_Model {

            function __construct()
            {
                // Call the Model constructor
                parent::__construct();
            }

             function add_camp($lat, $lng, $title, $people, $uid) {
                $this->lat = $lat;
                $this->lng = $lng;
                $this->title = $title;
                $this->people = $people;
                $this->uid = $uid;
                $this->db->insert('camps', $this);
              }

              function get_all()  {
                $this->db->select('*');
                $this->db->from('camps');
                $query = $this->db->get();

                return $query->result();
              }
    }
?>
