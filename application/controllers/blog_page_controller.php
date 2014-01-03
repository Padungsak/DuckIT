<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_page_controller extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->initial();
    }
    
    public function initial()
    {
        $this->load->model('blog_model');
        $data['controller'] = 'blog';
        $data['blog_data'] = $this->blog_model->getBlogRecord($_GET["no"]);      
        
        $this->load->view('blog_page_view', $data);
    }
}
