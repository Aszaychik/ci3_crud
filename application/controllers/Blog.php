<?php 
class Blog extends CI_Controller{
  public function index(){
    $this->load->database();
    $query = $this->db->query("SELECT * FROM blog");
    $data['blogs'] = $query->result_array();
    
    // $data['blogs'] = [
    //   [
    //     'title' => 'First Article',
    //     'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam."
    //   ],
    //   [
    //     'title' => 'Second Article',
    //     'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam."
    //   ],
    //   [
    //     'title' => 'Third Article',
    //     'content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, aliquam. Molestiae, nostrum aperiam. Sapiente quasi placeat ab optio impedit adipisci iure accusantium, vero culpa commodi, doloribus error quia, praesentium veniam."
    //   ],
    // ];

    $this->load->view('blog', $data);
  }
} 
?>