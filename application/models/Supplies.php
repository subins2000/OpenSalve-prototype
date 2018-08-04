<?php
// system/application/models/user.php

class Supplies extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

     function add_supply($item, $quantity, $campID) {
        $this->camp = $campID;
        $this->item = $item;
        $this->quantity = $quantity;
        $this->db->insert('supplies', $this);
     }

     function update_supply($item, $required_quantity) {
         $this->db->where('item', $item);
         $this->db->update('supplies', array('required_quantity' => $required_quantity));
     }

      function get_all()  {
        $this->db->select('*');
        $this->db->from('supplies');
        $query = $this->db->get();

        return $query->result();
      }
}
?>
