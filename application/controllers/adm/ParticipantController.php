<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class ParticipantController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != "0"){
            redirect('/');
        }
        $this->load->model('Admin');
        $this->load->model('User');
        $this->load->model('ParticipantDetail');
    }
    public function index(){
        $data['title']          = 'Participant';
        $data['sidebar']        = 'participant';
        $data['participants']   = $this->getQueryData();
        
        $this->template->admin('adm/participant/index', $data);
    }
    public function detail($id){
        $data['title']      = 'Detail Participant';
        $data['sidebar']    = 'participant';
        $data['pDetail']    = $this->ParticipantDetail->getById($id);

        $this->template->admin('adm/participant/detail', $data);
    }
    public function add(){
        print_r("sjd");
    }
    public function edit($id){
        $data['title']      = 'Edit Participant';
        $data['sidebar']    = 'participant';
        $data['pDetail']    = $this->ParticipantDetail->getById($id);

        $this->template->admin('adm/participant/detail', $data);
    }
    public function changePassword(){
        $this->User->update(['id_user' => $_POST['id'], 'password' => hash('sha256', md5($_POST['pass']))]);
        $this->session->set_flashdata('succ_msg', 'Successfully change password!');
        redirect('admin/participant');
    }
    public function checked(){
        $this->ParticipantDetail->update(['id_user' => $_POST['id'], 'is_checked' => '1']);
        $this->session->set_flashdata('succ_msg', 'Successfully checked user!');
        redirect('admin/'.$_POST['page']);
    }
    public function export($status){
        $currDate   = date('F j, Y H:i');
        $currDate2  = date('YmdHi');

        if($status == '1'){
            $filter = "";
            $title = "All";
        }else if($status == '2'){
            $filter = "u.is_verif = '1' AND";
            $title = "Verified";
        }else if($status == '3'){
            $filter = "pd.is_submited = '1' AND";
            $title = "Submited";
        }else if($status == '4'){
            $filter = "pd.is_checked = '1' AND";
            $title = "Checked";
        }
        
        $datas = $this->getQueryDataExport($filter);

        // === STYLING SHEETS ===
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->getPageSetup()->setOrientation(PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);


        $styleHeading1['font']['bold'] = true;
        $styleHeading1['font']['size'] = 20;
        
        $styleHeading2['font']['bold'] = true;
        $styleHeading2['font']['size'] = 14;
        
        $styleHeading3['font']['bold'] = true;
        $styleHeading3['font']['size'] = 12;
        
        $styleTitle['font']['bold']                         = true;
        $styleTitle['font']['size']                         = 11;
        $styleTitle['font']['color']['argb']                = \PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE;
        $styleTitle['fill']['fillType']                     = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID;
        $styleTitle['fill']['color']['argb']                = 'FF7124B5';
        $styleTitle['alignment']['horizontal']              = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleTitle['alignment']['vertical']                = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;
        $styleTitle['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;

        $styleTitle2['font']['bold']                         = true;
        $styleTitle2['font']['size']                         = 11;
        $styleTitle2['font']['color']['argb']                = \PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE;
        $styleTitle2['fill']['fillType']                     = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID;
        $styleTitle2['fill']['color']['argb']                = 'FF595959';
        $styleTitle2['alignment']['horizontal']              = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleTitle2['alignment']['vertical']                = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;
        $styleTitle2['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        
        $styleContent['font']['size']                         = 11;
        $styleContent['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        $styleContent['alignment']['vertical']                = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;
        
        $styleContentCenter['font']['size']                         = 11;
        $styleContentCenter['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        $styleContentCenter['alignment']['horizontal']              = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleContentCenter['alignment']['vertical']                = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;

        $styleBorder['borders']['outline']['borderStyle']       = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        $styleBorderTop['borders']['top']['borderStyle']        = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        
        $styleContentWithoutBorder['font']['size']  = 11;
        $styleContentWithoutBorderBold['font']['size']  = 11;
        $styleContentWithoutBorderBold['font']['bold']  = true;

        $sheet->getColumnDimension('A')->setWidth(7);
        $sheet->getColumnDimension('B')->setWidth(15);
        $sheet->getColumnDimension('C')->setWidth(15);
        $sheet->getColumnDimension('D')->setWidth(15);
        $sheet->getColumnDimension('E')->setWidth(15);
        $sheet->getColumnDimension('F')->setWidth(15);
        $sheet->getColumnDimension('G')->setWidth(15);
        $sheet->getColumnDimension('H')->setWidth(15);
        $sheet->getColumnDimension('I')->setWidth(15);
        $sheet->getColumnDimension('J')->setWidth(15);
        $sheet->getColumnDimension('K')->setWidth(15);
        $sheet->getColumnDimension('L')->setWidth(15);
        $sheet->getColumnDimension('M')->setWidth(15);
        $sheet->getColumnDimension('N')->setWidth(15);
        $sheet->getColumnDimension('O')->setWidth(15);
        $sheet->getColumnDimension('P')->setWidth(15);
        $sheet->getColumnDimension('Q')->setWidth(15);
        $sheet->getColumnDimension('R')->setWidth(15);
        $sheet->getColumnDimension('S')->setWidth(15);
        $sheet->getColumnDimension('T')->setWidth(15);
        $sheet->getColumnDimension('U')->setWidth(15);
        $sheet->getColumnDimension('V')->setWidth(15);
        $sheet->getColumnDimension('W')->setWidth(15);
        $sheet->getColumnDimension('X')->setWidth(15);
        $sheet->getColumnDimension('Y')->setWidth(15);
        $sheet->getColumnDimension('Z')->setWidth(15);
        $sheet->getColumnDimension('AA')->setWidth(15);
        $sheet->getColumnDimension('AB')->setWidth(15);
        $sheet->getColumnDimension('AC')->setWidth(15);
        $sheet->getColumnDimension('AD')->setWidth(15);
        $sheet->getColumnDimension('AE')->setWidth(15);
        $sheet->getColumnDimension('AF')->setWidth(15);

        
        $sheet->getRowDimension('12')->setRowHeight(20);
        $row = 13;
         

         // HEADER
         $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
         $drawing->setName('Paid');
         $drawing->setDescription('Paid');
         $drawing->setPath("assets/img/logo/logo-25.png"); /* put your path and image here */
         $drawing->setCoordinates('A1');
         $drawing->setWorksheet($sheet);
         $sheet->setCellValue('A8', 'Participant Detail "'.$title.'"')->getStyle('A8')->applyFromArray($styleHeading1);
         $sheet->setCellValue('A9', 'Data taken on '.$currDate)->getStyle('A9')->applyFromArray($styleHeading3);

         // WRITE DATA
         $sheet->setCellValue('A12', 'NO')->getStyle('A12')->applyFromArray($styleTitle);
         $sheet->setCellValue('B12', 'EMAIL')->getStyle('B12')->applyFromArray($styleTitle);
         $sheet->setCellValue('C12', 'FULLNAME')->getStyle('C12')->applyFromArray($styleTitle);
         $sheet->setCellValue('D12', 'IS VERIF')->getStyle('D12')->applyFromArray($styleTitle);
         $sheet->setCellValue('E12', 'IS SUBMITED')->getStyle('E12')->applyFromArray($styleTitle);
         $sheet->setCellValue('F12', 'IS CHECKED')->getStyle('F12')->applyFromArray($styleTitle);
         $sheet->setCellValue('G12', 'DATE REGISTER')->getStyle('G12')->applyFromArray($styleTitle);
         $sheet->setCellValue('H12', 'NATIONALITY')->getStyle('H12')->applyFromArray($styleTitle);
         $sheet->setCellValue('I12', 'ADDRESS')->getStyle('I12')->applyFromArray($styleTitle);
         $sheet->setCellValue('J12', 'BIRTHDATE')->getStyle('J12')->applyFromArray($styleTitle);
         $sheet->setCellValue('K12', 'OCCUPATION')->getStyle('K12')->applyFromArray($styleTitle);
         $sheet->setCellValue('L12', 'FIELD OF STUDY')->getStyle('L12')->applyFromArray($styleTitle);
         $sheet->setCellValue('M12', 'INSTITUTION WORKPLACE')->getStyle('M12')->applyFromArray($styleTitle);
         $sheet->setCellValue('N12', 'WHATSAPP NUMBER')->getStyle('N12')->applyFromArray($styleTitle);
         $sheet->setCellValue('O12', 'INSTAGRAM')->getStyle('O12')->applyFromArray($styleTitle);
         $sheet->setCellValue('P12', 'EMERGENCY CONTACT')->getStyle('P12')->applyFromArray($styleTitle);
         $sheet->setCellValue('Q12', 'CONTACT RELATION')->getStyle('Q12')->applyFromArray($styleTitle);
         $sheet->setCellValue('R12', 'DISEASE HISTORY')->getStyle('R12')->applyFromArray($styleTitle);
         $sheet->setCellValue('S12', 'TSHIRT SIZE')->getStyle('S12')->applyFromArray($styleTitle);
         $sheet->setCellValue('T12', 'ACHIEVEMENTS')->getStyle('T12')->applyFromArray($styleTitle);
         $sheet->setCellValue('U12', 'EXPERIENCE')->getStyle('U12')->applyFromArray($styleTitle);
         $sheet->setCellValue('V12', 'SOCIAL PROJECT')->getStyle('V12')->applyFromArray($styleTitle);
         $sheet->setCellValue('W12', 'TALENTS')->getStyle('W12')->applyFromArray($styleTitle);
         $sheet->setCellValue('X12', 'ESSAY TYPE')->getStyle('X12')->applyFromArray($styleTitle);
         $sheet->setCellValue('Y12', 'ESSAY')->getStyle('Y12')->applyFromArray($styleTitle);
         $sheet->setCellValue('Z12', 'SOURCE')->getStyle('Z12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AA12', 'SOURCE ACCOUNT')->getStyle('AA12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AB12', 'TWIBBON LINK')->getStyle('AB12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AC12', 'SHARE PROOF LINK')->getStyle('AC12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AD12', 'REFERRAL CODE')->getStyle('AD12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AE12', 'REGISTER AFFILIATE')->getStyle('AE12')->applyFromArray($styleTitle);
         $sheet->setCellValue('AF12', 'PHOTO')->getStyle('AF12')->applyFromArray($styleTitle);

         $no = 1;
         foreach ($datas as $data) {
            $sheet->getRowDimension($row)->setRowHeight(20);
            $sheet->setCellValue('A'.$row, $no++)->getStyle('A'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('B'.$row, $data->email)->getStyle('B'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('C'.$row, $data->fullname)->getStyle('C'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('D'.$row, $data->is_verif == '1' ? "VERIFIED" : "NOT VERIFIED")->getStyle('D'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('E'.$row, $data->is_submited == '1' ? "SUBMITED" : "NOT SUBMITED")->getStyle('E'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('F'.$row, $data->is_checked == '1' ? "CHECKED" : "NOT CHECKED")->getStyle('F'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('G'.$row, $data->created_at)->getStyle('G'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('H'.$row, $data->nationality)->getStyle('H'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('I'.$row, $data->detail_address.', '.$data->postal_code.", ".$data->city.", ".$data->province)->getStyle('I'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('J'.$row, $data->birth_date)->getStyle('J'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('K'.$row, $data->occupation)->getStyle('K'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('L'.$row, $data->field_of_study)->getStyle('L'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('M'.$row, $data->institution_workplace)->getStyle('M'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('N'.$row, $data->whatsapp_number)->getStyle('N'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('O'.$row, $data->instagram)->getStyle('O'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('P'.$row, $data->emergency_contact)->getStyle('P'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('Q'.$row, $data->contact_relation)->getStyle('Q'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('R'.$row, $data->disease_history)->getStyle('R'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('S'.$row, $data->tshirt_size)->getStyle('S'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('T'.$row, $data->achievements)->getStyle('T'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('U'.$row, $data->experience)->getStyle('U'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('V'.$row, $data->social_projects)->getStyle('V'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('W'.$row, $data->talents)->getStyle('W'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('X'.$row, $data->essay_type)->getStyle('X'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('Y'.$row, $data->essay)->getStyle('Y'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('Z'.$row, $data->source)->getStyle('Z'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AA'.$row, $data->source_account)->getStyle('AA'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AB'.$row, $data->motivation_link)->getStyle('AB'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AC'.$row, $data->share_proof_link)->getStyle('AC'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AD'.$row, $data->referral_code)->getStyle('AD'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AE'.$row, $data->register_affiliate)->getStyle('AE'.$row)->applyFromArray($styleContent);
            $sheet->setCellValue('AF'.$row, $data->photo)->getStyle('AF'.$row)->applyFromArray($styleContent);
            $row++;
         }
         $sheet->setCellValue('A10', 'Total '.count($datas).' Data')->getStyle('A10')->applyFromArray($styleHeading3);

         $fileName = "Participant_Detail_".$currDate2;
         $writer = new Xlsx($spreadsheet);
         
         header('Content-Type: application/vnd.ms-excel'); // generate excel file
         header('Content-Disposition: attachment;filename="'. $fileName .'.xlsx"'); 
         header('Cache-Control: max-age=0');
         $writer->save('php://output');
        
    }
    public function getQueryData(){
        return $this->db->query("
            SELECT
                pd.id_user ,
                u.email ,
                u.name ,
                pd.step ,
                u.is_verif ,
                pd.is_submited ,
                pd.is_checked
            FROM
                participant_details pd ,
                users u 
            WHERE 
                u.id_user_role = '1'
                AND pd.id_user = u.id_user
            ORDER BY pd.fullname ASC
        ")->result();
    }
    public function getQueryDataExport($filter){
        return $this->db->query("
            SELECT
                u.email, 
                u.is_verif, 
                pd.*
            FROM
                participant_details pd ,
                users u 
            WHERE 
                ".$filter."
                u.id_user_role = '1'
                AND pd.id_user = u.id_user
        ")->result();
    }
}