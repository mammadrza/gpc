<?php
class Home extends CI_Controller{



    public function index(){

        $check_site_lang = $this->session->userdata('site_lang');

        if($check_site_lang == ''){
            $this->session->set_userdata('site_lang','azerbaijan');
        }

        $this->load->view('index');
    }

    public function about(){

        $check_site_lang = $this->session->userdata('site_lang');

        if($check_site_lang == ''){
            $this->session->set_userdata('site_lang','azerbaijan');
        }
        $this->load->view('front/about');
    }

    public function register()
    {

        $this->load->helper('captcha');

        if(!is_dir('captcha/register')){
            mkdir('./captcha/register', 0777, true);
        }

        $linkUrl =  base_url('captcha/register/');


        $vals = array(
            // 'word'          => 'Random word',
            'img_path'      => 'captcha/register/',
            'img_url'       => $linkUrl,
            'font_path'     => './path/to/fonts/texb.ttf',
            'img_width'     => 150,
            'img_height'    => 40,
            'expiration'    => 7200,
            'word_length'   => 6,
            'font_size'     => 200,
            'img_id'        => 'captchaImageid',
            'pool'          => '123456789abcdefghijkmnpqrstuvwxyz',

            // White background and border, black text and red grid
            'colors'        => array(
                'background' => array(0, 0, 0),
                'border' => array(255, 40, 40),
                'text' => array(255, 255, 255),
                'grid' => array(255, 0, 0)
            )
        );

        $captcha = create_captcha($vals);

        $data = array(
            "captcha" => $captcha,
        );

        $this->session->set_userdata("captcha_code", $captcha["word"]);


        $data['category'] = $this->db->select('type')->get('category')->result_array();
        $data['gender'] = $this->db->select('user_gender')->get('gender')->result_array();
        $data['education'] = $this->db->select('user_education')->get('education')->result_array();
        $data['member'] = $this->db->select('user_member')->get('select_member')->result_array();

        $this->load->view('front/register',$data);
    }

    public function registerAct(){


        $captcha      = $_POST['captcha'];
        $captcha      = $this->security->xss_clean($captcha);
        $captcha_code = $this->session->userdata("captcha_code");

        if($captcha == $captcha_code){
            $this->session->unset_userdata('captcha_code');


            $name               = $_POST['name'];
            $surname            = $_POST['surname'];
            $gender             = $_POST['gender'];
            $birthday           = $_POST['birthday'];
            $email              = $_POST['email'];
            $phone              = $_POST['phone'];
            $address            = $_POST['address'];
            $type               = $_POST['type'];

            $student_uni        = $_POST['student_uni'];
            $education          = $_POST['education'];

            $work_company_name  = $_POST['work_company_name'];
            $work_status        = $_POST['work_status'];

            $member             = $_POST['member'];

            if(!empty($name) && !empty($surname) && !empty($gender) && !empty($birthday) && !empty($email) && !empty($phone) && !empty($address) && !empty($type) && !empty($member) ){


                if(!is_dir('upload/cv')){
                    mkdir('./upload/cv', 0777, true);
                }

                $config['upload_path'] = './upload/cv/';
                $config['allowed_types'] = 'pdf|jpg|png|jpeg|doc|docx';
                $config['max_size'] = 20000;
                $config['max_width'] = 15000;
                $config['max_height'] = 15000;
                $config['encrypt_name'] = true;

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if (!$this->upload->do_upload('file')) {

                    $this->session->set_flashdata('err',$this->lang->line('err_cv'));
                    redirect($_SERVER['HTTP_REFERER']);
                    exit();

                }else{

                    $cv = $this->upload->data('file_name');





                    $checkGender = $this->db->where('user_gender',$gender)->get('gender')->result_array();

                    if(empty($checkGender)){
                        $this->session->set_flashdata('err',$this->lang->line('err_select'));
                        redirect($_SERVER['HTTP_REFERER']);
                        exit();
                    }









                    $checkMember = $this->db->where('user_member',$member)->get('select_member')->result_array();

                    if(empty($checkMember)){
                        $this->session->set_flashdata('err',$this->lang->line('err_select'));
                        redirect($_SERVER['HTTP_REFERER']);
                        exit();
                    }






                    $checkType = $this->db->where('type',$type)->get('category')->result_array();

                    if(empty($checkType)){
                        $this->session->set_flashdata('err',$this->lang->line('err_select'));
                        redirect($_SERVER['HTTP_REFERER']);
                        exit();
                    }






                    if($type == 'student'){

                        if(!empty($student_uni) && !empty($education)){
                            $checkEducation = $this->db->where('user_education',$education)->get('education')->result_array();

                            if(empty($checkEducation)){
                                $this->session->set_flashdata('err',$this->lang->line('err_select'));
                                redirect($_SERVER['HTTP_REFERER']);
                                exit();
                            }
                            $student_university = $student_uni;
                            $student_education  = $education;
                            $work_company_name  = NULL;
                            $work_status        = NULL;
                        }else{
                            $this->session->set_flashdata('err',$this->lang->line('err_empty'));
                            redirect($_SERVER['HTTP_REFERER']);
                            exit();
                        }
                    }

                    if($type == 'nonstudent'){
                        if(!empty($work_company_name) && !empty($work_status)){
                            $student_university = NULL;
                            $student_education  = NULL;
                            $work_company_name  = $work_company_name;
                            $work_status        = $work_status;
                        }else{
                            $this->session->set_flashdata('err',$this->lang->line('err_empty'));
                            redirect($_SERVER['HTTP_REFERER']);
                            exit();
                        }
                    }






                    $data = array(

                        'name'            => $name,
                        'surname'         => $surname,
                        'gender'          => $gender,
                        'birthday_date'   => $birthday,
                        'email'           => $email,
                        'phone'           => $phone,
                        'address'         => $address,
                        'type'            => $type,
                        'university_name' => $student_university,
                        'education'       => $student_education,
                        'company_name'    => $work_company_name,
                        'work_status'     => $work_status,
                        'cv'              => $cv,
                        'user_member'     => $member,
                        'register_date'   => date('Y-m-d H:i:s'),
                    );

                    $data = $this->security->xss_clean($data);

                    $this->db->insert('register',$data);
                    $this->session->set_flashdata('success',$this->lang->line('success_register'));
                    redirect(base_url('register'));

                }


            }else{
                $this->session->set_flashdata('err',$this->lang->line('err_empty'));
                redirect($_SERVER['HTTP_REFERER']);
                exit();
            }





        }else{
            $this->session->set_flashdata('err',$this->lang->line('err_captcha'));
            redirect($_SERVER['HTTP_REFERER']);
            exit();
        }

    }

}