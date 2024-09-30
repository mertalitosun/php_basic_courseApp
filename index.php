<?php

    $kategoriler = ["Programlama", "Web Geliştirme", "Mobil Programlama", "Ofis Uygulamalar"];
    $kurslar = [
        [
            "id" => 1,
            "baslik" => "Web Geliştirme Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "1.jpg",
            "onay" => true
        ],
        [
            "id" => 2,
            "baslik" => "Python Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "2.jpg",
            "onay" => true
        ],
        [
            "id" => 1,
            "baslik" => "Javascript Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "3.jpg",
            "onay" => false
        ],
    ]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-primary navbar dark">
        <div class="container">
            <a href="/" class="navbar-brand">Course App</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a href="#">Kurslar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="list-group">
                    <?php foreach($kategoriler as $kategori): ?>
                        <a href="" class="list-group-item list-group-item-action"><?php echo $kategori;?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <?php foreach($kurslar as $kurs):?>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/<?php echo$kurs["resim"]?>" alt="" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="cart-title"><?php echo $kurs["baslik"]?></h5>
                                <p><?php echo $kurs["aciklama"]?></p>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>