<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('email', 'E-Mail', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Login Page | SIAKAD SMKN 2';
            $this->load->view('template_administrator/header', $data);
            $this->load->view('login');
            $this->load->view('template_administrator/footer');
        } else {
            $this->_login();
        }
    }

    private function _login() {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        
        // if the user is existed
        if ($user) {
            // if the user is active`
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    print_r($data);
                    // $this->session->set_userdata($data);
                    // redirect('administrator/dashboard');
                } else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">Wrong Password</div>
                    ');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Your E-Mail Not Activated</div>
                ');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Wrong E-mail</div>
            ');
            redirect('login');
        }
    }

    public function register()
    {
        $this->rules();

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = 'Register Page | SIAKAD SMKN 2';
            $this->load->view('template_administrator/header', $data);
            $this->load->view('register');
            $this->load->view('template_administrator/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">Success Registering</div>
            ');
            redirect('login');
        }

    }

    private function rules() {
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'E-Mail', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[confirmPassword]', [
            'matches' => 'Password doesn\'t match',
        ]);
		$this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|trim|matches[password]');
	}

}

?>