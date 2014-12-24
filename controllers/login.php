<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lib_login');
    }

    /**
     * facebook login
     *
     * @return void
     * @editor ryo
     **/
    public function facebook()
    {
		//使用javascript sdk登入
		$fb_data =$this->lib_login->js_fb();
		if( isset ($fb_data['me'])){
			echo '<pre>' . print_r( $fb_data, 1 ) . '</pre>';
			echo $fb_data['me']->getProperty('name');
		} else {
			echo "no me";
		}
		
		
		//使用php sdk登入方式
		$fb_data = $this->lib_login->facebook();

        // check login data
        if (isset($fb_data['me'])) {
            var_dump($fb_data);
        } else {
            echo '<a href="' . $fb_data['loginUrl'] . '">Login</a>';
        }
    }
}

/* End of file login.php */
