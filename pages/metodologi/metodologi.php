<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Metodologi</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">

        <form action="">
            <label for="">Kebutuhan Awal : </label> <br>
            <input type="radio" name="kebutuhan_awal" id="belum_jelas" value="Belum Jelas">Belum Jelas
            <input type="radio" name="kebutuhan_awal" id="dapat_jelas" value="Dapat Dijelaskan">Dapat Dijelaskan <br><br>
            
            <label for="">Kompleksitas : </label> <br>
            <input type="radio" name="kompleksitas" id="sederhana" value="Sederhana">Sederhana
            <input type="radio" name="kompleksitas" id="kompleks" value="Kompleks">Kompleks
            <input type="radio" name="kompleksitas" id="sangat_kompleks" value="Sangat Kompleks">Sederhana
            <br><br>
            <button type="button" onclick="lihat()" >Cek Metodologi</button>
        </form>
        <br>
        <p id="hasil" style="color:green; font-size:18px; font-weight:bold;"></p>
    </div>

    <!--<script src="cek_metodologi.js"></script>-->
</body>
<script>
    function lihat(){
        var a = 'apel';
        var b = 'mangga';
        var c = 'jeruk';
        var d = 'melon';
        var e = 'jambu';
        var f = 'semangka';
        var g = 'cerry';
        if(document.getElementById('belum_jelas').checked){
            var a = 'apel';
            var b = 'mangga';
            var c = 'jeruk';
            var d = 'melon';
            var e = null;
            var f = null;
            var g = null;
            if(document.getElementById('sederhana').checked){
                var b = null;
                break;
            }
            else if(document.getElementById('kompleks').checked){
                var c = null;
                var a = null;
                break;
            }
            else(document.getElementById('sangat_kompleks').checked);{
                var b = null;
                var c = null;
                var d = null;
                break;
            }
        }
        else(document.getElementById('dapat_jelas').checked);{
            var a = null;
            var b = null;
            var c = null;
            var d = null;
            var e = 'jambu';
            var f = 'semangka';
            var g = 'cerry';
            break;
        }

        var metodo = [a,b,c,d,e,f,g]
        var i = 0;
        var text = "";
        while (metodo[i]){
            text += metodo[i] + "<br>";
            i++
        }
        document.getElementById("hasil").innerHTML = text;
    }
</script>
</html>