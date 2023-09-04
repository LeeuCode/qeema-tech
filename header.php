<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <?php wp_head(); ?>
</head>

<body>

    <?php
    if (!\Elementor\Plugin::$instance->preview->is_preview_mode()):
        //I'm editing a post, page or custom post type
        ?>
        <!-- perloader -->
        <div class="perloader-wrapper">
            <div class="spinner-grow" style="width: 2rem; height: 2rem;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    <?php endif; ?>