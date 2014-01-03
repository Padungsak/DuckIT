<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function getBlogData($dataName, $pageNumber)
    {
        $resultIndex = (($pageNumber - 1) * BLOG_IN_PAGE_NUMBER) + 1;
            $query = $this->db->query('SELECT '. $dataName . ' FROM blog_page where no BETWEEN '. $resultIndex . ' AND ' . ($resultIndex + BLOG_IN_PAGE_NUMBER));
            
            if( $query->num_rows() > 0)
            {
                return $query->result();
            }
            else 
            {
                return NULL;
            }
    }
    
    function getBlogRecord($recordNo)
    {
            $query = $this->db->query('SELECT * FROM blog_page where no='.$recordNo);
            
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
            return $this->db->count_all('blog_page');                  
    }
}
