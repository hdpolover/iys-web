<?php

class Admin extends CI_Model{
    public function getAll(){
        return $this->db->get('admins')->result();
    }
    public function getById($id){
        return $this->db->get_where('admins', ['id_admin' => $id])->row();
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

        return $this->db->get_where('admins', $param)->result();
    }
    public function insert($param){
        $this->db->insert('admins', $param);
    }
    public function update($param){
        $this->db->where('id_admin', $param['id_admin'])->update('admins', $param);
    }
    public function delete($param){
        $this->db->delete('admins', $param);
    }

    public function got($param) {
        return $this->db->get_where('admins', $param)->result();
    }
}