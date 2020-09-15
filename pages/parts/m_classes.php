<?php
          if (isset($_POST['cek']))
            {
              $reqs = $_POST["requirement"];
              $comp = $_POST["complexity"];
              $time = $_POST["time"];
              $team = $_POST["team"];
              $skll = $_POST["skill"];
              $clnt = $_POST["client"];
            }
            
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
              public $mc_like = 0;

            }

            $inc = new methodology();
            $inc->mc_name = "Incremental";
            $inc->mc_reqs = 1;
            $inc->mc_comp = 1;
            $inc->mc_time = 2;
            $inc->mc_team = 1;
            $inc->mc_skll = 2;
            $inc->mc_clnt = 2;
            $inc->mc_link = "metodologi/m_incremental.html";

            $vsh = new methodology();
            $vsh->mc_name = "V - Shaped";
            $vsh->mc_reqs = 1;
            $vsh->mc_comp = 3;
            $vsh->mc_time = 4;
            $vsh->mc_team = 2;
            $vsh->mc_skll = 2;
            $vsh->mc_clnt = 2;
            $vsh->mc_link = "metodologi/m_vshaped.html";

            $spi = new methodology();
            $spi->mc_name = "Spiral";
            $spi->mc_reqs = 2;
            $spi->mc_comp = 3;
            $spi->mc_time = 3;
            $spi->mc_team = 2;
            $spi->mc_skll = 3;
            $spi->mc_clnt = 2;
            $spi->mc_link = "metodologi/m_spiral.html";

            $rad = new methodology();
            $rad->mc_name = "Rapid Agile Development";
            $rad->mc_reqs = 2;
            $rad->mc_comp = 3;
            $rad->mc_time = 2;
            $rad->mc_team = 1;
            $rad->mc_skll = 2;
            $rad->mc_clnt = 2;
            $rad->mc_link = "metodologi/m_rad.html";

            $pro = new methodology();
            $pro->mc_name = "Prototyping";
            $pro->mc_reqs = 1;
            $pro->mc_comp = 3;
            $pro->mc_time = 1;
            $pro->mc_team = 1;
            $pro->mc_skll = 3;
            $pro->mc_clnt = 2;
            $pro->mc_link = "metodologi/m_prototyping.html";

            $scr = new methodology();
            $scr->mc_name = "Scrum";
            $scr->mc_reqs = 2;
            $scr->mc_comp = 3;
            $scr->mc_time = 1;
            $scr->mc_team = 1;
            $scr->mc_skll = 3;
            $scr->mc_clnt = 1;
            $scr->mc_link = "metodologi/m_scrum.html";

            $xpr = new methodology();
            $xpr->mc_name = "Extreme Programming";
            $xpr->mc_reqs = 2;
            $xpr->mc_comp = 1;
            $xpr->mc_time = 1;
            $xpr->mc_team = 1;
            $xpr->mc_skll = 3;
            $xpr->mc_clnt = 2;
            $xpr->mc_link = "metodologi/m_xp.html";

            $ans = array($reqs,$comp,$time,$team,$skll,$clnt);
            $mtd = array($inc,$vsh,$spi,$rad,$pro,$scr,$xpr);

          ?>