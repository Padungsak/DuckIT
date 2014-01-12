<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shop_page_controller extends CI_Controller {

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
            $data['item_number'] = 1;
        }
       
        $data['title'] = $this->shop_model->getShopData('title', $data['item_number'],'');
        $data['price'] = $this->shop_model->getShopData('price', $data['item_number'],'');
        $data['review_mark'] = $this->shop_model->getShopPageData('review_mark', $data['item_number']);
        $data['short_description'] = $this->shop_model->getShopPageData('short_description', $data['item_number']);
        $data['full_description'] = $this->shop_model->getShopPageData('full_description', $data['item_number']);
        $data['additional_info'] = $this->shop_model->getShopPageData('additional_info', $data['item_number']);
        $data['image_folder'] = $this->shop_model->getShopPageData('image_folder', $data['item_number']);

        $data['record_count'] = $this->shop_model->getRecordCount(); 
        $this->load->view('shop_page_view', $data);
    }
}
