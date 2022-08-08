<?php

class Dashboard extends CI_Model{
    public function getParticipantVerif(){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL FROM users u WHERE u.is_verif = '1' AND u.id_user_role = '1'
        ")->row();
    }
    public function getParticipantUnVerif(){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL FROM users u WHERE u.is_verif = '0' AND u.id_user_role = '1'
        ")->row();
    }
    public function getParticipantSubmited(){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL FROM participant_details pd WHERE pd.is_submited = '1'
        ")->row();
    }
    public function getParticipantChecked(){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL FROM participant_details pd WHERE pd.is_checked = '1'
        ")->row();
    }
    public function getParticipantAll(){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL FROM participant_details
        ")->row();
    }
    public function getRegistrationChart(){
        return $this->db->query("
            SELECT
                COUNT(*) AS TOTAL,
                DATE_FORMAT(pd.created_at, '%d/%m') AS `DATE` 
            FROM 
                participant_details pd 
            GROUP BY DATE(pd.created_at) 
        ")->result();
    }
    public function getAgeChart(){
        return $this->db->query("
            SELECT
                DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),pd.birth_date)), '%Y')+0 AS AGE,
                COUNT(DATE_FORMAT(FROM_DAYS(DATEDIFF(now(),pd.birth_date)), '%Y')+0) AS TOTAL
            FROM 
                participant_details pd 
            WHERE 
                pd.is_submited = '1'
            GROUP BY YEAR(pd.birth_date) 
            ORDER BY YEAR(pd.birth_date) ASC
        ")->result();
    }
    public function getAmbassadorChart(){
        return $this->db->query("
            SELECT
                COUNT(*) AS TOTAL,
                a.name  AS NAME
            FROM 
                participant_details pd ,
                ambassador a 
            WHERE 
                pd.is_submited = '1'
                AND pd.referral_code = a.referral_code 
            GROUP BY pd.referral_code 
        ")->result();
    }
}