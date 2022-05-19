<?php

class PaymentType extends CI_Model{
    public function getAll(){
        return $this->db->get('v_payment_types')->result();
    }
    public function getById($id){
        return $this->db->get_where('payment_types', ['id_payment_type' => $id])->row();
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

        return $this->db->get_where('payment_types', $param)->result();
    }
    public function insert($param){
        $this->db->insert('payment_types', $param);
    }
    public function update($param){
        $this->db->where('id_payment_type', $param['id_payment_type'])->update('payment_types', $param);
    }
    public function delete($param){
        $this->db->delete('payment_types', $param);
    }
}