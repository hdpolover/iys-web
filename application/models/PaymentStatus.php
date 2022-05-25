<?php

class PaymentStatus extends CI_Model{
    public function getAll(){
        return $this->db->get('payment_status')->result();
    }
    public function getById($id){
        return $this->db->get_where('payment_status', ['id_payment_status' => $id])->row();
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

        return $this->db->get_where('payment_status', $param)->result();
    }
    public function insert($param){
        $this->db->insert('payment_status', $param);
    }
    public function update($param){
        $this->db->where('id_payment_status', $param['id_payment_status'])->update('payment_status', $param);
    }
    public function delete($param){
        $this->db->delete('payment_status', $param);
    }
}