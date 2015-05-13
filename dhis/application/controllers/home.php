<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
 {
   function __construct()
    {
       parent::__construct();
       $this->load->model('main_model','',TRUE);
    }

    public function index()
    {
      $this->load->helper(array('form'));
      $this->home_load();
    }

    //Home page
    //First page that is loaded
    public function home_load()
    {
      $this->load->helper(array('form'));     
      $this->load->view('index');
      $this->load->view('footer');


   }

   public function view()
    {
      $data['details'] = $this->main_model->fetch();
      $this->load->helper(array('form'));     
      $this->load->view('details',$data);
      $this->load->view('footer');


   }

   public function details()
   {

      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $address = $this->input->post('address');

      if($name == "")
      {
        echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Name field is empty</span>";
      }

      else
      {
        if($email == "")
        {
          echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Email field is empty</span>";
        }

        else
        {
          if($phone=="")
          {
            echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Phone field has no value</span>";
          }

          else
          {
            if($address=="")
            {
              echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Provide your address</span>";
            }

            else
            {
              if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
              {
                echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Invalid email.<br>Email should follow the form <i>youreamil@example.com</span>";
              }

              else
              {
                $count = $this->db->count_all_results('details');
                $id = $count + 1;
                $Data= array(
                        'id'=>$id,
                        'name' => $name,
                        'email' => $email,
                        'phone' => $phone,
                        'address' => $address
                        );

                $result = $this->main_model->details($Data);

                if($result == "SUCCESS")
                {
                  echo "<span class = 'icon-thumbs-up-alt' style = 'color:green;font-weight:7pt;margin-left:10px'>Details have been successfully entered into the database</span>";
                }

                else if($result == "EXISTS")
                {
                  echo "<span class = 'fa fa-edit' style = 'color:red;margin-left:10px'> Details already inserted</span>"; 
                }
              }
            }
          }
        }

      }
   }
}
?>