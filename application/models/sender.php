<?php
class Sender extends CI_Model {
    // table name
    private $tbl_senders= 'tbl_senders';
 
    function __construct(){
      parent::__construct();
    }
    // get number of senders in database
    function count_all(){
        return $this->db->count_all($this->tbl_senders);
    }
    // get senders with paging
    function get_list(){
        $this->db->order_by('id','asc');
        return $this->db->get($this->tbl_senders);
    }
    // get sender by id
    function get_by_id($id){
        $this->db->where('id', $id);
        return $this->db->get($this->tbl_senders);
    }
    // add new sender
    function save($sender){
        $this->db->insert($this->tbl_senders, $sender);
        return $this->db->insert_id();
    }
    // update sender by id
    function update($id, $sender){
        $this->db->where('id', $id);
        $this->db->update($this->tbl_senders, $sender);
    }
    // delete sender by id
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete($this->tbl_senders);
    }
}
?>