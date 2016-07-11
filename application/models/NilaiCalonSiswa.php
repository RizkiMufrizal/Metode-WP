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
class NilaiCalonSiswa extends CI_Model {

    public function ambilCalonSiswaDanNilai() {
        return $this->db->get('tb_calon_siswa_nilai')->result();
    }

    public function ambilNilaiCalonSiswaArray() {
        return $this->db->get('tb_calon_siswa_nilai')->result_array();
    }

    public function tambahNilaiCalonSiswa($nilaiCalonSiswa) {
        $this->db->insert('tb_nilai_calon_siswa', $nilaiCalonSiswa);
    }

    public function ambilNilaiCalonSiswaBerdasakanNisn($nisn) {
        $this->db->where('nisn', $nisn);
        return $this->db->count_all_results('tb_calon_siswa_nilai');
    }

    public function ambilJumlahNilaiCalonSiswa() {
        return $this->db->count_all_results('tb_nilai_calon_siswa');
    }

    public function ambilNilaiMaxBerdasarkanKriteria($kriteria) {
        $this->db->select_max($kriteria);
        return $this->db->get('tb_nilai_calon_siswa')->result_array();
    }

}
