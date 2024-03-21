<?php declare(strict_types = 1);

  class View{
    private readonly array $view_data;
    public string $dir_path;

    function __construct(array $view_data, string $dir_path) {
      $this->view_data = $view_data;
      $this->dir_path = $dir_path;
    }

    function get_title(): string{
      return $this->view_data['title'];
    }
    
    function get_content(): string{
      return $this->view_data['content'];
    }

    function get_dir_path(): string{
      return $this->dir_path;
    }

    function get_page_stylesheet(): string{
      return $this->view_data['stylesheet'];
    }
  }
  
?>