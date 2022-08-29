<?php

class Document extends CI_Model{
    public function getAll(){
        return $this->db->get('documents')->result();
    }
    public function getById($id){
        return $this->db->get_where('documents', ['id_document' => $id])->row();
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

        return $this->db->get_where('documents', $param)->result();
    }
    public function insert($param){
        $this->db->insert('documents', $param);
    }
    public function update($param){
        $this->db->where('id_document', $param['id_document'])->update('documents', $param);
    }
    public function delete($param){
        $this->db->delete('documents', $param);
    }
}