<?php

class ParticipantDetail extends CI_Model{
    public function getAll(){
        return $this->db->get('participant_details')->result();
    }
    public function getById($id){
        return $this->db->get_where('participant_details', ['id_user' => $id])->row();
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

        return $this->db->get_where('participant_details', $param)->result();
    }
    public function insert($param){
        $this->db->insert('participant_details', $param);
    }
    public function update($param){
        $this->db->where('id_user', $param['id_user'])->update('participant_details', $param);
    }
    public function delete($param){
        $this->db->delete('participant_details', $param);
    }
}