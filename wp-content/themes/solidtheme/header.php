<!-- 
this file responsible for the top head section that would be anything in the head really whatever we determine we want to put in there 

file ini bertanggung jawab atas bagian kepala atas, yang akan menjadi apa saja di kepala, benar-benar apa pun yang kami tentukan ingin kami masukkan ke sana

 -->

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    wp_head();
    ?>
</head>

<body class="is-boxed has-animations">
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Logo">
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="body-wrap">