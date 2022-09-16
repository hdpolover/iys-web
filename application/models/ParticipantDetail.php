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
    public function getStatusStep($id){
        $this->db->select('fullname, gender, birth_date, nationality, occupation, field_of_study, institution_workplace, whatsapp_number, instagram, emergency_contact, contact_relation, disease_history, tshirt_size, province, city, postal_code, detail_address');
        $basic = $this->db->where('id_user', $id)->get('participant_details')->row_array();

        $this->db->select('achievements, experience, social_projects, talents');
        $other = $this->db->where('id_user', $id)->get('participant_details')->row_array();

        $this->db->select('essay_type, essay');
        $essay = $this->db->where('id_user', $id)->get('participant_details')->row_array();

        $this->db->select('source, source_account, motivation_link, share_proof_link, referral_code');
        $program = $this->db->where('id_user', $id)->get('participant_details')->row_array();

        $this->db->select('photo, , termsncondition');
        $selfPhoto = $this->db->where('id_user', $id)->get('participant_details')->row_array();


        return ['basic' => $basic, 'other' => $other, 'essay' => $essay, 'program' => $program, 'selfPhoto' => $selfPhoto];
    }
    public function insert($param){
        $this->db->insert('participant_details', $param);
    }
    public function update($param){
        $this->db->where('id_user', $param['id_user'])->update('participant_details', $param);
    }
    public function newAnnouncement($idSummit){
        $this->db->query("
            update participant_details pd 
            set pd.alert_announcement = pd.alert_announcement + 1
            where pd.id_summit = '".$idSummit."'	
        ");
    }
    public function resetAnnouncement($param){
        $this->db->query("
            update participant_details pd 
            set pd.alert_announcement = 0
            where pd.id_user = '".$param['id_user']."' AND pd.id_summit = '".$param['id_summit']."'	
        ");
    }
    public function delete($param){
        $this->db->delete('participant_details', $param);
    }
    public function getDataTable($param){
        $filter = "";
        if($param['filter'] != null){
            $filter = " AND ".implode(' AND ', $param['filter']);
        }

        $filteredRecords = $this->db->query("
            SELECT
                pd.id_user ,
                u.email ,
                u.name ,
                pd.step ,
                u.is_verif ,
                pd.is_submited ,
                pd.is_checked ,
                pd.agreement_status,
                pd.agreement_path
            FROM
                participant_details pd ,
                users u 
            WHERE 
                u.id_user_role = '1' 
                ".$filter."
                AND pd.id_user = u.id_user
            ORDER BY pd.fullname ASC
            LIMIT ".$param['limit']."
            OFFSET ".$param['offset']."
        ")->result();

        $realRecords = $this->db->query("
            SELECT
                pd.id_user ,
                u.email ,
                u.name ,
                pd.step ,
                u.is_verif ,
                pd.is_submited ,
                pd.is_checked ,
                pd.agreement_status,
                pd.agreement_path
            FROM
                participant_details pd ,
                users u 
            WHERE 
                u.id_user_role = '1'
                ".$filter."
                AND pd.id_user = u.id_user
            ORDER BY pd.fullname ASC
        ")->result();
        
        return ['records' => $filteredRecords, 'totalDisplayRecords' => count($filteredRecords), 'totalRecords' => count($realRecords)];
    }
}