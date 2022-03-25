<?php

class User extends CI_Model{
    public function getAll(){
        return $this->db->get('users')->result();
    }
    public function getById($id){
        return $this->db->get_where('users', ['id_user' => $id])->row();
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

        return $this->db->get_where('users', $param)->result();
    }
    public function insert($param){
        $this->db->insert('users', $param);
    }
    public function update($param){
        $this->db->where('id_user', $param['id_user'])->update('users', $param);
    }
    public function delete($param){
        $this->db->delete('users', $param);
    }

    public function got($param) {
        return $this->db->get_where('users', $param)->result();
    }
}