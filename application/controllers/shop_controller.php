<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shop_controller extends CI_Controller {

    public function index()
    {
        $this->load->database();
        $this->initial();
    }
    
    public function initial()
    {
        $this->load->model('shop_model');
        $data['controller'] = 'shop';
        
        if(isset($_GET['item_number']))
        {
            $data['item_number'] = $_GET['item_number'];            
        }
        else 
        {
            $data['item_number'] = 0;
        }
        
        if(isset($_GET['page_number']))
        {
            $data['page_number'] = $_GET['page_number'];            
        }
        else 
        {
            $data['page_number'] = 1;
        }
        
        $data['category_name'] = 'gadjet';
        
        $data['no'] = $this->shop_model->getShopData('no', $data['item_number'] , $data['category_name']);
        $data['title'] = $this->shop_model->getShopData('title', $data['item_number'] , $data['category_name']);
        $data['price'] = $this->shop_model->getShopData('price', $data['item_number'] , $data['category_name']);
        $data['image_folder'] = $this->shop_model->getShopData('image_folder', $data['item_number'] , $data['category_name']);

        $data['record_count'] = $this->shop_model->getRecordCount(); 
        $this->load->view('shop_view', $data);
    }
}
