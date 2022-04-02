<?php

class Announcement extends CI_Model{
    public function getAll(){
        return $this->db->get('v_announcement')->result();
    }
    public function getById($id){
        return $this->db->get_where('v_announcement', ['id_announcement' => $id])->row();
    }
    public function get($param){
        if(!empty($param['orderBy'])){ // order by
            $this->db->order_by($param['orderBy']);
            unset($param['orderBy']);
        }
        if(!empty($param['limit'])){ // limit
            $this->db->limit($param['limit']);
            unset($param['limit']);
        }

        return $this->db->get_where('v_announcement', $param)->result();
    }
    public function insert($param){
        $this->db->insert('announcements', $param);
    }
    public function update($param){
        $this->db->where('id_announcement', $param['id_announcement'])->update('announcements', $param);
    }
    public function delete($param){
        $this->db->delete('announcements', $param);
    }
}