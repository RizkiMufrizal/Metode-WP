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
class Kriteria extends CI_Model {

    public function tambahKriteria($kriteria) {
        $this->db->insert('tb_kriteria', $kriteria);
    }

    public function ambilKriteria() {
        $this->db->order_by('kriteria', 'asc');

        return $this->db->get('tb_kriteria')->result();
    }

    public function ambilKriteriaBerdasarkanId($idKriteria) {
        $this->db->where('id_kriteria', $idKriteria);

        return $this->db->get('tb_kriteria')->result();
    }

    public function ubahKriteria($kriteria, $idKriteria) {
        $this->db->where('id_kriteria', $idKriteria);
        $this->db->update('tb_kriteria', $kriteria);
    }

    public function hapusKriteria($idKriteria) {
        $kriteria = array(
            'id_kriteria' => $idKriteria,
        );
        $this->db->delete('tb_kriteria', $kriteria);
    }

}
