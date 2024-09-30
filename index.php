<?php require_once("config.php")?> <!-- db -->

<?php
    $result_kategoriler = mysqli_query($baglanti,"SELECT * From kategoriler");
    $kategoriler = mysqli_fetch_all($result_kategoriler, MYSQLI_ASSOC);

    $result_kurslar = mysqli_query($baglanti,"SELECT * From kurslar");
    $kurslar = mysqli_fetch_all($result_kurslar, MYSQLI_ASSOC);

    mysqli_close($baglanti);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("partials/_header.php")?> <!-- header -->
    <?php include("partials/_navbar.php")?> <!-- navbar -->
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-md-3">
                <?php include("partials/_kategoriler.php")?> <!-- menü -->
            </div>
            <div class="col-12 col-md-9">
                <?php foreach($kurslar as $kurs):?>
                    <?php if($kurs["onay"] and $kurs["anasayfa"]):?>
                        <?php include("partials/_kurs.php")?> <!-- kurs -->
                    <?php endif?>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>