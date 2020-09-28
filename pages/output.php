<html>
    <head>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link href="../resources/css/bootstrap.min.css" rel="stylesheet" />
          <script src="../resources/js/bootstrap.min.js"></script>
         
          <title>
            Hasil Metodologi
          </title>
    </head>
    <body> 
      <!-- TOP BAR -->
      <nav class="navbar navbar-dark bg-primary shadow sticky-top">
        <div class="container-fluid">
            <a href="../index.html" class="navbar-brand mx-auto">
              <img src="../resources/images/tech.png" style="width: 5em;"/>
            </a>
        </div>    
      </nav>


      <!-- CONTAINER UTAMA -->
      <div class="container-fluid bg-white" style="height: 90vh;">
        <div class="mx-auto w-75 py-5">
          <div class="w-100 py-5">

          <?php

          include 'parts/m_classes.php';

          // mengambil scores berdasarkan jawaban di m_classes.php
          // untuk menambahkan ppin kecocokan metode -- secara teoritis -- dengan jawaban yang diberikan
          foreach ($mtd as $m){
            if ($m->mc_reqs == $ans[0]){
              $m->mc_like += 1;
            }
            if ($m->mc_comp == $ans[1]){
              $m->mc_like += 1;
            }
            if ($m->mc_time == $ans[2]){
              $m->mc_like += 1;
            }
            if ($m->mc_team == $ans[3]){
              $m->mc_like += 1;
            }
            if ($m->mc_skll == $ans[4]){
              $m->mc_like += 1;
            }
            if ($m->mc_clnt == $ans[5]){
              $m->mc_like += 1;
            }
          }

          
          $cocok = array();
          foreach ($mtd as $m){
           if ($m->mc_like >= 3){
              $cocok[] = $m;
            }

          }


          //echo ("<a href='".$inc->mc_link."'> Detail </a>");


          include 'parts/table_head.html';

          foreach ($cocok as $c){
            echo ("<tr>");
            echo ("<th scope='row'>".$c->mc_name."</th>");
            echo ("<td><a href='".$c->mc_link."'>Detail</a></td>");
            echo ("</tr>");
          }

          include 'parts/table_foot.html';
          ?>


              
            </div>
        </div>
      </div>

      
          
   

      <div id="start" class="container-fluid bg-primary">

      </div>

    </body>
</html>

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