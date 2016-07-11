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
class User extends CI_Model {

    public function ambilUserUntukLogin($username) {
        $this->db->where('username', $username);
        $this->db->select('password');
        return $this->db->get('tb_user')->result();
    }

}
