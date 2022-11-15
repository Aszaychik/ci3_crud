<?php 
class Blog extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    $this->load->database();
    $this->load->helper('url');
    $this->load->model("BlogModel");
  }
  public function index(){
    $query = $this->BlogModel->getBlog();
    $data['blogs'] = $query->result_array();

    $this->load->view('blog', $data);
  }

  public function detail($url){
    $query = $this->BlogModel->getDetail($url);
    $data['blog'] = $query->row_array();

    $this->load->view('detail', $data);
  }

  public function createArticle()
  {
    if($this->input->post()){
      $data['title'] = $this->input->post('title');
      $data['content'] = $this->input->post('content');

      $id = $this->BlogModel->insertBlog($data);
      if($id){
        echo "Data saved";
      }else{
          echo "Save failed";
        }
    }
    $this->load->view('formCreate');
  }
} 
?>