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
    public function getPaymentSuccess($idPaymentType){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL
            FROM payment_transaction pt 
            WHERE pt.id_payment_type = '".$idPaymentType."' AND pt.status = '6'
        ")->row();
    }
    public function getPaymentPending($idPaymentType){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL
            FROM payment_transaction pt 
            WHERE pt.id_payment_type = '".$idPaymentType."' AND pt.status = '2'
        ")->row();
    }
    public function getPaymentCancel($idPaymentType){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL
            FROM payment_transaction pt 
            WHERE pt.id_payment_type = '".$idPaymentType."' AND (pt.status = '3' OR pt.status = '5')
        ")->row();
    }
    public function getPaymentExpired($idPaymentType){
        return $this->db->query("
            SELECT COUNT(*) AS TOTAL
            FROM payment_transaction pt 
            WHERE pt.id_payment_type = '".$idPaymentType."' AND pt.status = '4'
        ")->row();
    }
    public function getIncomeMidtrans(){
        return $this->db->query("
            SELECT SUM(pt.total) AS TOTAL
            FROM payment_transaction pt
            WHERE pt.status = '6' AND pt.method_type != 'paypal'
        ")->row();
    }
    public function getIncomePaypal(){
        return $this->db->query("
            SELECT SUM(pt.total) AS TOTAL
            FROM payment_transaction pt
            WHERE pt.status = '6' AND pt.method_type = 'paypal'
        ")->row();
    }
    public function getPendingPayment(){
        return $this->db->query("
            SELECT ps.id_user , u.name , u.email 
            FROM payment_status ps , users u  
            WHERE ps.status = '2' AND ps.id_user = u.id_user 
            ORDER BY u.name ASC
        ")->result();
    }
    public function getPopularMethod(){
        return $this->db->query("
            SELECT COUNT(pt.id_payment_transaction) AS TOTAL, pt.method_name, pt.method_img  
            FROM payment_transaction pt 
            GROUP BY pt.method_name
            ORDER BY COUNT(pt.id_payment_transaction) DESC
        ")->result();
    }
    public function getSuccessMethod(){
        return $this->db->query("
            SELECT COUNT(pt.id_payment_transaction) AS TOTAL, pt.method_name, pt.method_img  
            FROM payment_transaction pt 
            WHERE pt.status = '6'
            GROUP BY pt.method_name
            ORDER BY COUNT(pt.id_payment_transaction) DESC
        ")->result();
    }
    public function getFailedMethod(){
        return $this->db->query("
            SELECT COUNT(pt.id_payment_transaction) AS TOTAL, pt.method_name, pt.method_img  
            FROM payment_transaction pt 
            WHERE (pt.status = '3' OR pt.status = '4' OR pt.status = '5')
            GROUP BY pt.method_name
            ORDER BY COUNT(pt.id_payment_transaction) DESC
        ")->result();
    }
}