<?php
$file = file_get_contents("assets/dumy/index.json");
$data = json_decode($file, true);
$data_blog = $data[0]["blog"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ellie's Fashion</title>
    <link rel="stylesheet" href="assets/style/style.css">

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" />

</head>

<body>
    <header style="
    background-image: url('assets/images/Hero\ Image.jpg'); ">
        <nav>
            <div class="logo">
                <a href="#">Ellie's Fashion</a>
            </div>
            <div class="social-media">
                <a href="instagram.com"><i class="fa-brands fa-instagram"></i></a>
                <a href="twitter.com">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section id="blog" class="blog">
            <?php for ($i = 0; $i < count($data_blog); $i++) : ?>
                <div class="wrapper">
                    <a href="blog/index.php?on=<?= $data_blog[$i]["slug"] ?>">
                        <div class="image-blog">
                            <img src="assets/images/<?= $data_blog[$i]["image"] ?>" alt="<?= $data_blog[$i]["title"] ?>">
                        </div>
                        <div class="content-blog">
                            <h1><?= $data_blog[$i]["title"] ?></h1>
                            <p><?= $data_blog[$i]["description"] ?></p>
                        </div>
                    </a>
                </div>
            <?php endfor ?>
        </section>
    </main>
    <footer>
        Build with briefup
    </footer>
</body>

</html>