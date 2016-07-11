<?php

/**
 *
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com> <https://RizkiMufrizal.github.io>
 * Since Jul 11, 2016
 * Time 4:48:16 PM
 * Encoding UTF-8
 * Project Metode-WP
 * Package Expression package is undefined on line 13, column 14 in Templates/Scripting/PHPClass.php.
 *
 */
class IndexController extends CI_Controller {

    public function index() {
        $session = $this->session->userdata('isLogin');

        if ($session == false) {
            redirect('admin/login');
        } else {
            $this->load->view('admin/IndexView');
        }
    }

}
