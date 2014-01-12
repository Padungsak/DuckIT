<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shop_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getShopData($columnName, $itemNumber, $categoryName)
    {
        if(empty($categoryName))
        {
            $query = $this->db->query('SELECT '. $columnName . ' FROM shop_table where no='. $itemNumber);
        }
        else 
        {
            $query = $this->db->query('SELECT '. $columnName . ' FROM shop_table where no>'. $itemNumber . ' AND category=\'' . $categoryName . '\'');
        }
            
      
            if( $query->num_rows() > 0)
            {
                return $query->result();
            }
            else 
            {
                return NULL;
            }
    }
    
    
    function getShopPageData($columnName, $itemNumber)
    { 
            $query = $this->db->query('SELECT '. $columnName . ' FROM shop_page_table where no='. $itemNumber);
            
            if( $query->num_rows() > 0)
            {
                return $query->result();
            }
            else 
            {
                return NULL;
            }
    }
    
    function getRecordCount()
    {
            return $this->db->count_all('shop_table');                  
    }

}