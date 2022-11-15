<?php 
class BlogModel extends CI_Model{
  public function getBlog()
  {
    return $this->db->get("blog");
  }

  public function getDetail($url)
  {
    $this->db->where("url", $url);
    return $this->db->get("blog");
  }
}

?>