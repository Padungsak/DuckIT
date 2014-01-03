<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_controller extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->initial();
    }
    
    public function initial()
    {
        $this->load->model('blog_model');
        $data['controller'] = 'blog';
        
        if(isset($_GET['page_number']))
        {
            $data['page_number'] = $_GET['page_number'];            
        }
        else 
        {
            $data['page_number'] = 1;
        }
        
        $data['no'] = $this->blog_model->getBlogData('no', $data['page_number']);
        $data['blog_type'] = $this->blog_model->getBlogData('blog_type', $data['page_number']);
        $data['stuff_link'] = $this->blog_model->getBlogData('stuff_link', $data['page_number']);
        $data['post_date'] = $this->blog_model->getBlogData('post_date', $data['page_number']);
        $data['blog_title'] = $this->blog_model->getBlogData('blog_title', $data['page_number']);
        $data['auther_name'] = $this->blog_model->getBlogData('auther_name', $data['page_number']);
        $data['shot_description'] = $this->blog_model->getBlogData('shot_description', $data['page_number']);
        

        
        $data['record_count'] = $this->blog_model->getRecordCount(); 
        $this->load->view('blog_view', $data);
    }
}
