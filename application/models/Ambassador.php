<?php

class Ambassador extends CI_Model{
    public function getAll(){
        return $this->db->get('ambassador')->result();
    }
    public function getById($id){
        return $this->db->get_where('ambassador', ['id_ambassador' => $id])->row();
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

        return $this->db->get_where('ambassador', $param)->result();
    }
    public function insert($param){
        $this->db->insert('ambassador', $param);
    }
    public function update($param){
        $this->db->where('id_ambassador', $param['id_ambassador'])->update('ambassador', $param);
    }
    public function delete($param){
        $this->db->delete('ambassador', $param);
    }
    public function getAllWithTotalReferral(){
        return $this->db->query("
            SELECT 
                a.*,
                (
                    SELECT COUNT(*)
                    FROM participant_details pd 
                    WHERE
                        pd.is_submited = '1'
                        AND UPPER(pd.referral_code) = a.referral_code  
                ) as referral_total
            FROM ambassador a 
        ")->result();
    }
}