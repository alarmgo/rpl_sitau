<?php
          // mengambil data dari index.html menggunakan metode POST
          // isinya variabel buat nampung jawaban dan dicocokan dengan metodologi
          if (isset($_POST['cek']))
            {
              $reqs = $_POST["requirement"];
              $comp = $_POST["complexity"];
              $time = $_POST["time"];
              $team = $_POST["team"];
              $skll = $_POST["skill"];
              $clnt = $_POST["client"];
            }
            
            // sebuah kelas untuk menggambarkan metodologi
            class methodology {
              //Props
              public $mc_name;
              public $mc_reqs;
              public $mc_comp;
              public $mc_time;
              public $mc_team;
              public $mc_skll;
              public $mc_clnt;
              public $mc_link;
              public $mc_like = 0; // variabel yang menampung poin-poin kesamaan antara jawaban sama kecocokan metodologi
              public $mc_perc; //dalam %

            }

            // metodologi incremental
            $inc = new methodology();
            $inc->mc_name = "Incremental";
            $inc->mc_reqs = 2;
            $inc->mc_comp = 2;
            $inc->mc_time = 2;
            $inc->mc_team = 1;
            $inc->mc_skll = 2;
            $inc->mc_clnt = 2;
            $inc->mc_link = "metodologi/m_incremental.html"; // link penghubung ke metodologi incremental

            // metodologi v-shaped
            $vsh = new methodology();
            $vsh->mc_name = "V - Shaped";
            $vsh->mc_reqs = 2;
            $vsh->mc_comp = 1;
            $vsh->mc_time = 4;
            $vsh->mc_team = 2;
            $vsh->mc_skll = 2;
            $vsh->mc_clnt = 2;
            $vsh->mc_link = "metodologi/m_vshaped.html"; // link penghubung ke metodologi v-shaped

            // metodologi spiral
            $spi = new methodology();
            $spi->mc_name = "Spiral";
            $spi->mc_reqs = 1;
            $spi->mc_comp = 3;
            $spi->mc_time = 3;
            $spi->mc_team = 2;
            $spi->mc_skll = 3;
            $spi->mc_clnt = 2;
            $spi->mc_link = "metodologi/m_spiral.html"; // link penghubung ke metodologi spiral

            // metodologi rapid application development
            $rad = new methodology();
            $rad->mc_name = "Rapid Application Development";
            $rad->mc_reqs = 2;
            $rad->mc_comp = 2;
            $rad->mc_time = 2;
            $rad->mc_team = 1;
            $rad->mc_skll = 2;
            $rad->mc_clnt = 2;
            $rad->mc_link = "metodologi/m_rad.html"; // link penghubung ke rapid agile development

            // metodologi Prototyping
            $pro = new methodology();
            $pro->mc_name = "Prototyping";
            $pro->mc_reqs = 1;
            $pro->mc_comp = 1;
            $pro->mc_time = 1;
            $pro->mc_team = 1;
            $pro->mc_skll = 3;
            $pro->mc_clnt = 2;
            $pro->mc_link = "metodologi/m_prototyping.html"; // link penghubung ke Prototyping

            // metodologi Scrum 
            $scr = new methodology();
            $scr->mc_name = "Scrum";
            $scr->mc_reqs = 2;
            $scr->mc_comp = 3;
            $scr->mc_time = 1;
            $scr->mc_team = 1;
            $scr->mc_skll = 3;
            $scr->mc_clnt = 1;
            $scr->mc_link = "metodologi/m_scrum.html"; // link penghubung ke Scrum 

            // metodologi Extreme Programming
            $xpr = new methodology();
            $xpr->mc_name = "Extreme Programming";
            $xpr->mc_reqs = 1;
            $xpr->mc_comp = 1;
            $xpr->mc_time = 1;
            $xpr->mc_team = 1;
            $xpr->mc_skll = 3;
            $xpr->mc_clnt = 2;
            $xpr->mc_link = "metodologi/m_xp.html"; // link penghubung ke metodologi Extreme Programming

            // Jawaban dari index.html
            // Ditampung dalam bentuk array pada variabel ans
            $ans = array($reqs,$comp,$time,$team,$skll,$clnt);
            
            // Variabel dari masing-masing class metodologi
            // Ditampung dalam bentuk array pada variabel mtd
            $mtd = array($inc,$vsh,$spi,$rad,$pro,$scr,$xpr);

          ?>

<!-- 

LEGEND PERTANYAAN

Requirement :
1 = Belum Jelas
2 = Dapat Dijelaskan

Complexity :
1 = Simpel
2 = Kompleks
3 = Sangat Kompleks

Time :
1 = < 1 Bulan
2 = 1-3 Bulan
3 = 4-6 Bulan
4 = 6-12 Bulan

Team :
1 = < 12 Orang
2 = > 12 Orang

Client :
1 = Tidak Terlibat
2 = Terlibat


 -->