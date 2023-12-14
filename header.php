<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Miles Blogs</title>
    <link rel="stylesheet" href="./dist/css/main.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- to get the functions file -->
    <?php wp_head() ?>
</head>
    <body>
<!-- header starts here -->
        <header class="header">
            <div class="container">
                <div class="header__wrapper d--flex justify--between align--center">
                    
                    <div class="header__logo">
                        <!-- to get the custom logo -->
                   <?php echo the_custom_logo(); ?>
                    </div>

                    <nav class="nav">
                      <?php wp_nav_menu() ?>
                    </nav>

                    <div class="toggle__menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="bgDim"></div>
        </header>
<!-- header ends here -->