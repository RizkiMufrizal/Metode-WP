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
class NormalisasiController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Normalisasi');
        $this->load->model('NilaiCalonSiswa');
        $this->load->model('Kriteria');
    }

    public function index() {
        $session = $this->session->userdata('isLogin');

        if ($session == false) {
            redirect('admin/login');
        } else {
            $data['normalisasi'] = $this->Normalisasi->ambilNormalisasi();
            $this->load->view('admin/NormalisasiView', $data);
        }
    }

    public function prosesNormalisasi() {

        //jumlah calon siswa
        $jumlahCalonSiswaDenganNilai = $this->NilaiCalonSiswa->ambilJumlahNilaiCalonSiswa();

        //data kriteria
        $kriteria = $this->Kriteria->ambilKriteria();

        $nilaiCalonSiswa = $this->NilaiCalonSiswa->ambilNilaiCalonSiswaArray();

        $jumlahTotalBobotSeluruhKriteria = 0;

        if ($jumlahCalonSiswaDenganNilai > 0) {

            //mencari total bobot dari kriteria
            foreach ($kriteria as $k) {

                $jumlahTotalBobotSeluruhKriteria = $jumlahTotalBobotSeluruhKriteria + $k->bobot;
            }

            $kriteriaSementara = array();

            foreach ($kriteria as $k) {
                array_push($kriteriaSementara, array(
                    'kriteria' => $k->kriteria,
                    'bobot' => $k->bobot / $jumlahTotalBobotSeluruhKriteria
                ));
            }

            $hasilSementaraVektor = array();

            //mencari nilai normalisasi karena faktor kriteria benefit berdasarkan nilai maksimal
            foreach ($nilaiCalonSiswa as $n) {
                array_push($hasilSementaraVektor, array(
                    'nisn' => $n['nisn'],
                    'c1' => (pow($n['c1'], $kriteriaSementara[0]['bobot'])),
                    'c2' => (pow($n['c2'], $kriteriaSementara[1]['bobot'])),
                    'c3' => (pow($n['c3'], $kriteriaSementara[2]['bobot'])),
                    'c4' => (pow($n['c4'], $kriteriaSementara[3]['bobot'])),
                    'c5' => (pow($n['c5'], $kriteriaSementara[4]['bobot'])),
                    'hasil' =>
                    (pow($n['c1'], $kriteriaSementara[0]['bobot'])) *
                    (pow($n['c2'], $kriteriaSementara[1]['bobot'])) *
                    (pow($n['c3'], $kriteriaSementara[2]['bobot'])) *
                    (pow($n['c4'], $kriteriaSementara[3]['bobot'])) *
                    (pow($n['c5'], $kriteriaSementara[4]['bobot']))
                ));
            }
            //nilai seluruh vektor
            $jumlahHasilSeluruhVektor = 0;

            foreach ($hasilSementaraVektor as $v) {
                $jumlahHasilSeluruhVektor = $jumlahHasilSeluruhVektor + $v['hasil'];
            }
            //nilai akhir
            foreach ($hasilSementaraVektor as $v) {

                if ($this->Normalisasi->ambilNormalisasiBerdasakanNisn($v['nisn']) == 0) {

                    $val = array(
                        'total_nilai' => $v['hasil'] / $jumlahHasilSeluruhVektor,
                        'nisn' => $v['nisn'],
                        'nilai_c1' => $v['c1'],
                        'nilai_c2' => $v['c2'],
                        'nilai_c3' => $v['c3'],
                        'nilai_c4' => $v['c4'],
                        'nilai_c5' => $v['c5']
                    );

                    $this->Normalisasi->tambahNormalisasi($val);
                }
            }
        }
        redirect('admin/NormalisasiController');
    }

}
