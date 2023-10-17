<?php
if (!isset($_GET["on"])) {
    header('Location:../index.php');
}
$file = file_get_contents("../assets/dumy/index.json");
$data = json_decode($file, true);
$data_blog = $data[0]["blog"];
for ($i = 0; $i < count($data_blog); $i++) {
    if ($data_blog[$i]["slug"] === $_GET["on"]) {
        $title = $data_blog[$i]["title"];
        $body = $data_blog[$i]["body"];
        $image = $data_blog[$i]["image"];
    }
}

$url_image = "../assets/images/" . $image
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | <?= $title ?></title>
    <link rel="stylesheet" href="../assets/style/style.css">

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" />
</head>

<body>
    <header style="
    background-image: url('<?= $url_image ?>'); ">
        <nav>
            <div class=" logo">
                <a href="../index.php">Ellie' s Fashion</a>
            </div>
            <div class="social-media">
                <a href="instagram.com"><i class="fa-brands fa-instagram"></i></a>
                <a href="twitter.com">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </div>
        </nav>
        <h2><?= $title ?></h2>
    </header>
    <main>
        <section id="blog" class="blog">
            <div class="wrapper">
                <div class="content-blog">
                    <?= $body ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        Build with briefup
    </footer>
</body>

</html>