<?php
class Paymentconf {
    public function methodDetail($resultMidtrans, $site_url){
        if($resultMidtrans->payment_type == 'bank_transfer'){
            if(empty($resultMidtrans->permata_va_number)){ // non bank permata
                $data[0]['column']  = 'method_type';
                $data[0]['value']   = $resultMidtrans->payment_type;
                $data[1]['column']  = 'method_name';
                $data[1]['value']   = $resultMidtrans->va_numbers[0]->bank;
                $data[2]['column']  = 'virtual_number';
                $data[2]['value']   = $resultMidtrans->va_numbers[0]->va_number;
                $data[3]['column']  = 'method_guide';
                $data[3]['value']   = $resultMidtrans->pdf_url;
                $data[4]['column']  = 'method_img';
    
                if($resultMidtrans->va_numbers[0]->bank == 'bni'){
                    $data[4]['value']   = $site_url."assets/img/payment/bni.png";
                }else if($resultMidtrans->va_numbers[0]->bank == 'bri'){
                    $data[4]['value']   = $site_url."assets/img/payment/briva.png";
                }
            }else{
                $data[0]['column']  = 'method_type';
                $data[0]['value']   = $resultMidtrans->payment_type;
                $data[1]['column']  = 'method_name';
                $data[1]['value']   = 'permata';
                $data[2]['column']  = 'virtual_number';
                $data[2]['value']   = $resultMidtrans->permata_va_number;
                $data[3]['column']  = 'method_guide';
                $data[3]['value']   = $resultMidtrans->pdf_url;
                $data[4]['column']  = 'method_img';
                $data[4]['value']   = $site_url."assets/img/payment/permata.png";
            }
        }else if($resultMidtrans->payment_type == 'echannel'){
            $data[0]['column']  = 'method_type';
            $data[0]['value']   = 'mandiri bill';
            $data[1]['column']  = 'method_name';
            $data[1]['value']   = 'mandiri bill';
            $data[2]['column']  = 'bill_key';
            $data[2]['value']   = $resultMidtrans->bill_key;
            $data[3]['column']  = 'biller_code';
            $data[3]['value']   = $resultMidtrans->biller_code;
            $data[4]['column']  = 'method_guide';
            $data[4]['value']   = $resultMidtrans->pdf_url;
            $data[5]['column']  = 'method_img';
            $data[5]['value']   = $site_url."assets/img/payment/mandiri.png";
        }else if($resultMidtrans->payment_type == 'gopay'){
            $data[0]['column']  = 'method_type';
            $data[0]['value']   = $resultMidtrans->payment_type;
            $data[1]['column']  = 'method_name';
            $data[1]['value']   = 'gopay';
            $data[2]['column']  = 'method_img';
            $data[2]['value']   = $site_url."assets/img/payment/gopay.png";
        }

        return $data;
    }
    public function convertStatus($status){
        if($status == 'pending'){
            return '2';
        }else if($status == 'cancel'){
            return '3';
        }else if($status == 'expire'){
            return '4';
        }else if($status == 'deny'){
            return '5';
        }else if($status == 'settlement'){
            return '6';
        }
    }

    public function convertStatusTitle($status){
        if($status == '2'){
            return 'pending';
        }else if($status == '3'){
            return 'cancel';
        }else if($status == '4'){
            return 'expire';
        }else if($status == '5'){
            return 'deny';
        }else if($status == '6'){
            return 'success';
        }
    }
}