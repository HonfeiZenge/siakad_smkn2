<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('email')) {
			if($this->session->userdata('role_id') == 1) redirect('administrator/dashboard');
            else if ($this->session->userdata('role_id') == 2) redirect('administrator/dashboard');
            else redirect('siswa/siswa');
		}

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
        $email = htmlspecialchars($this->input->post('email', true));
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
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) redirect('administrator/dashboard');
                    else if ($user['role_id'] == 2) redirect('administrator/dashboard');
                    else redirect('siswa/siswa');
                } else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">Wrong Password</div>
                    ');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">Your E-Mail Not Activated</div>
                ');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">Wrong E-mail</div>
            ');
            redirect('auth');
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
            redirect('auth');
        }

    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">You are Logged Out</div>
        ');
        redirect('auth');
    }

    public function blocked()
    {
        $data['judul'] = 'Forbidden';
        $this->load->view('template_administrator/header', $data);
        $this->load->view('403');
        $this->load->view('template_administrator/footer');
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