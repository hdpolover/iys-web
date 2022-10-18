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

    public function getDataTable($param){
        $filter1 = "";
        if($param['filter1'] != null){
            $filter1 = " AND ".implode(' AND ', $param['filter1']);
        }
        $filter2 = "";
        if($param['filter2'] != null){
            $filter2 = " AND ".implode(' AND ', $param['filter2']);
        }

        $filteredRecords = $this->db->query("
            SELECT 
                u.id_user ,
                u.name,
                u.email ,
                pd.institution_workplace,
                pt2.description as payment_type,
                ps.status 
            FROM
                payment_status ps ,
                participant_details pd , 
                users u ,
                payment_types pt2 
            WHERE 
                ps.id_payment_status = (
                    SELECT ps2.id_payment_status
                    FROM payment_status ps2  
                    WHERE 
                        ps2.is_active = '1' 
                        ".$filter1."
                        AND ps2.id_user = pd.id_user 
                    ORDER BY ps2.id_payment_type DESC
                    LIMIT 1
                )
                ".$filter2."
                AND ps.id_user = pd.id_user
                AND	pd.id_user = u.id_user
                AND ps.id_payment_type = pt2.id_payment_type 
            LIMIT ".$param['limit']."
            OFFSET ".$param['offset']."
        ")->result();

        $realRecords = $this->db->query("
            SELECT 
                u.id_user ,
                u.name,
                u.email ,
                pd.institution_workplace,
                pt2.description as payment_type,
                ps.status 
            FROM
                payment_status ps ,
                participant_details pd , 
                users u ,
                payment_types pt2 
            WHERE 
                ps.id_payment_status = (
                    SELECT ps2.id_payment_status
                    FROM payment_status ps2  
                    WHERE 
                        ps2.is_active = '1' 
                        ".$filter1."
                        AND ps2.id_user = pd.id_user 
                    ORDER BY ps2.id_payment_type DESC
                    LIMIT 1
                )
                ".$filter2."
                AND ps.id_user = pd.id_user
                AND	pd.id_user = u.id_user
                AND ps.id_payment_type = pt2.id_payment_type 
        ")->result();
        
        return ['records' => $filteredRecords, 'totalDisplayRecords' => count($filteredRecords), 'totalRecords' => count($realRecords)];
    }
}