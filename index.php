<!DOCTYPE html>
<html>
    <head>
        <title>Calkulator Sederhana</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <style>
            body{
                background: #F2F2F2;
                font-family: sans-serif;
                }
 
            .kalkulator{
                width: 335px;
                background: #0168f0;
                margin: 100px auto;
                padding: 10px 20px 50px 20px;
                border-radius: 5px;
                box-shadow: 0px 10px 20px 0px #d3d3d3;
            }
            
            .bil{
                width: 300px;
                margin: 5px;
                border: none;
                font-size: 16pt;
                border-radius: 5px;
                padding: 10px;	
            }
            
            .opt{
                font-size: 16pt;
                border: none;
                width: 60px;
                margin: 5px;
                border-radius: 5px;
                padding: 10px;
            }
            
            .tombol{
                background: #EC5159;
                border-top: none;
                border-right: none;
                border-left: none;
                border-radius: 5px;
                padding: 10px 20px;
                color: #eee;
                font-size: 15pt;
                border-bottom:4px solid #BF3D3D;
            }
            
            .judul{
                text-align: center;
                color: #eee;
                font-weight: normal;
            }
        </style>
        <?php
        if(isset($_POST['hitung'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            switch ($operasi) {
                case "tambah" :
                    $hasil = $bil1 + $bil2;
                break;
                case 'kurang':
                    $hasil = $bil1-$bil2;
                break;
                case 'kali':
                    $hasil = $bil1*$bil2;
                break;
                case 'bagi':
                    $hasil = $bil1/$bil2;
                break;			
            }
        }
        ?>
        <div class="kalkulator">
            <h2 class="judul">KALKULATOR</h2>
            <form method="post" action="index.php">			
                <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukan Bilangan">
                <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukan BIlangan">
                <select class="opt" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
                </select>
                <input type="submit" name="hitung" value="Hitung" class="tombol">											
            </form>
            <?php if(isset($_POST['hitung'])){ ?>
                <input type="text" value="<?php echo $hasil; ?>" class="bil">
            <?php }else{ ?>
                <input type="text" value="0" class="bil">
            <?php } ?>			
        </div>
    </body>
</html>
