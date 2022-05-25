<?php

class PaymentTransaction extends CI_Model{
    public function getAll(){
        return $this->db->get('payment_transaction')->result();
    }
    public function getById($id){
        return $this->db->get_where('payment_transaction', ['id_payment_transaction' => $id])->row();
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

        return $this->db->get_where('payment_transaction', $param)->result();
    }
    public function insert($param){
        $this->db->insert('payment_transaction', $param);
    }
    public function update($param){
        $this->db->where('id_payment_transaction', $param['id_payment_transaction'])->update('payment_transaction', $param);
    }
    public function delete($param){
        $this->db->delete('payment_transaction', $param);
    }
}