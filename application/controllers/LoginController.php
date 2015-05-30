<?php
    error_reporting(E_ALL & ~E_WARNING);
?>

<?php
class LoginController extends CI_Controller{
    public function index(){
        $this->load->view('forum-forum');
    }
    
    public function akun(){
        $this->load->view('forum-forum');
    }
    
    public function checkLogin() {
        $this->form_validation->set_rules('username','Username','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|callback_verifyUser');
        
        if($this->form_validation->run() == false){
            $this->load->view('forum-category');
        }
        else{
            redirect('page/forum');
        }
    }
    
    public function account() {
        $this->form_validation->set_rules('sign-email','Email','required|valid_email');
        $this->form_validation->set_rules('sign-password','Password','required');
        
        if($this->form_validation->run() == false){
            $this->form_validation->set_message('Incorrect Email.');
            $this->load->view('forum-category');
        }
        else{
            $signusername = $this->input->post('sign-username');
            $signemail = $this->input->post('sign-email');
            $signpassword = $this->input->post('sign-password');
            
            if(isset($_FILES['image'])){
                $file = $_FILES['image']['tmp_name'];
                if(!isset($file)){
                    echo "Please select an image.";
                }
                else{
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    $this->load->model('LoginModel');
                    $this->LoginModel->insert($signusername, $signemail, $signpassword);
                    $this->LoginModel->upload_photo($image, $image_name);
                    $this->load->view('forum-category');
                }
            }
        }
    }
    
    public function verifyUser(){
        $name = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $this->load->model('LoginModel');
        $this->load->library('session');
        if($this->LoginModel->login($name, $pass)){
            return true;
        }
        else{
            $this->form_validation->set_message('verifyUser','Incorrect Email or Password. Please try again.');
            return false;
        }
    }
    
    public function logout(){
        $this->load->library('session');
        $this->load->view('logout');
        $this->load->view('forum-category');
    }
}

?>