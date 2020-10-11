<?php

class Form extends CI_Controller {


        
        public function index()
        {
                
                // $this->load->


                $this->load->library('form_validation');
                $this->load->helper(array('form', 'url'));
                $this->load->model("Form_model");

                // $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                // $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $data = array(
                                'ids' => $this->Form_model->get_ids()
                        );
                        $this->load->view('myform', $data);
                }
                else
                {
                        $this->id_card();
                        $this->load->view('formsuccess');
                }
        }
        public function proof_of_address(){
                $this->load->library('upload');
                $dataInfo = array();
                $files = $_FILES;

                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                $this->upload->initialize($this->set_upload_options());
                $this->upload->do_upload();
                $dataInfo[] = $this->upload->data();

                $data = array(
                        'address_proof' => $dataInfo[0]['file_name']
                );
                return $data;
        }
        public function id_card(){
                $this->load->library('upload');
                $dataInfo = array();
                $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);
                if($cpt != 2){
                        redirect('Form');
                }
                for($i=0; $i<$cpt; $i++)
                {           
                        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                        $this->upload->initialize($this->set_upload_options());
                        $this->upload->do_upload();
                        $dataInfo[] = $this->upload->data();
                }

                $data = array(
                        'id_front' => $dataInfo[0]['file_name'],
                        'id_back' => $dataInfo[1]['file_name']
                );
                return $data;
        }

        public function products()
        {       
                $this->load->library('upload');
                $dataInfo = array();
                $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);

                for($i=0; $i<$cpt; $i++)
                {           
                        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                        $this->upload->initialize($this->set_upload_options());
                        $this->upload->do_upload();
                        $dataInfo[] = $this->upload->data();
                }

                $data = array(
                        'name' => $this->input->post('pd_name'),
                        'prod_image' => $dataInfo[0]['file_name'],
                        'prod_image1' => $dataInfo[1]['file_name'],
                        'created_time' => date('Y-m-d H:i:s')
                );
        }

        private function set_upload_options()
        {   
            //upload an image options
            $config = array();
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;

            return $config;
        }
}