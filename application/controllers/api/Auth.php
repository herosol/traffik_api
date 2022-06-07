<?php
class Auth extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        header('Content-Type: application/json');
        $this->load->model('Member_model', 'member');
    }

    function sign_up()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $res['validationErrors'] = '';
            $this->form_validation->set_rules('firstName', 'First Name', 'trim|required|alpha|min_length[2]|max_length[20]', 
                [
                    'alpha' => 'First Name should contains only letters and avoid space.',
                    'min_length' => 'First Name should contains atleast 2 letters.',
                    'max_length' => 'First Name should not be greater than 20 letters.'
                ]);
            $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required|alpha|min_length[2]|max_length[20]', 
                [
                    'alpha' => 'Last Name should contains only letters and avoid space.',
                    'min_length' => 'Last Name should contains atleast 2 letters.',
                    'max_length' => 'Last Name should not be greater than 20 letters.'
                ]);
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[members.mem_email]', 
                [
                    'valid_email' => 'Please enter a valid email.',
                    'is_unique' => 'This email is already in use.'
                ]);
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|callback_is_password_strong', 
                [
                    'is_password_strong' => 'Password should contains alteast 1 small letter, 1 capital letter, 1 number, and one special characher.'
                ]);
            $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[password]', 
                [
                    'matches' => 'Confirm password must be the as the password.'
                ]);

            if ($this->form_validation->run() === FALSE) {
                $res['validationErrors'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());

                $rando = doEncode(rand(99, 999) . '-' . $post['email']);
                $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;
                $save_data = [
                    'mem_fname' => ucfirst($post['firstName']),
                    'mem_lname' => ucfirst($post['lastName']),
                    'mem_email' => $post['email'],
                    'mem_pswd' => doEncode($post['password']),
                    'mem_code' => $rando,
                    'mem_type' => $post['applicant'],
                    'mem_status' => 1,
                    'mem_last_login' => date('Y-m-d h:i:s')
                ];
                $mem_id = $this->member->save($save_data);
                // $this->session->set_userdata('mem_id', $mem_id);
                // $this->session->set_userdata('mem_type', $as);

                $res['msg'] = showMsg('success', getSiteText('alert', 'registration'));

                $verify_link = site_url('verification/' . $rando);
                $mem_data = array('name' => ucfirst($post['firstName']) . ' ' . ucfirst($post['lasName']), "email" => $post['email'], "link" => $verify_link);
                $this->send_site_email($mem_data, 'signup');

                if($mem_id)
                {
                    $res['status'] = 1;
                }
            }
            echo json_encode($res);
            exit;
        }
    }

    function sign_in()
    {
        if($this->input->post())
        {
            $res = [];
            $res['status'] = 0;
            $res['validationErrors'] = '';
            $res['msg'] = '';
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() === FALSE) {
                $res['validationErrors'] = validation_errors();
            }
            else
            {
                $data = $this->input->post();
                $row = $this->member->authenticate($data['email'], $data['password']);
                if (count($row) > 0) {
                    // if ($row->mem_status == 0) {
                    //     $res['msg'] = showMsg('error', 'Your account has been blocked!');
                    //     exit(json_encode($res));
                    // }

                    $this->member->save(['mem_first_time_login' => 'no'], $row->mem_id);
                    $this->member->update_last_login($row->mem_id, $remember_token);
                    // $this->session->set_userdata('mem_id', $row->mem_id);
                    // $this->session->set_userdata('mem_type', $row->mem_type);

                    $res['status'] = 1;
                } else {
                    $res['msg'] = 'Worng email or password.';
                }
            }
            echo json_encode($res);
            exit;
        }
    }

    ### callback functions
    public function is_password_strong($password)
    {
        $whiteListedSpecial = "\$\@\#\^\|\!\~\=\+\-\_\.";
        if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password) && preg_match('/[' . $whiteListedSpecial . ']/', $password)) {
            return TRUE;
        }
        return FALSE;
    }

}
