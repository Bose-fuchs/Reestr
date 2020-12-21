<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Реестр проверок</title>
    <?php $this->load->helper('url'); ?>
    <link rel="shortcut icon" href="<?php echo base_url();?>public/image/emblem.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/css/style.css" rel="stylesheet"/>
    
    <!-- подключение JqGrid -->

    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>public/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>public/css/ui.jqgrid.css" />
    
    <script src="<?php echo base_url();?>public/js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/i18n/grid.locale-en.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/jquery.jqGrid.min.js" type="text/javascript"></script>


</head>
<body>
    <header>
        <div class="heder_body">
            <div class="header_top">
                <div class="header_left">
                    <img src="<?php echo base_url();?>public/image/emblem.png" alt="герб" class="logo">
                    <h1>
                        Рестр проверок <br>
                        Юридических лиц
                    </h1>
                </div>
                <div class="header_right">
                    <div class="social_link">
                        <a href=""><img src="<?php echo base_url();?>public/image/twitter.png" alt="" width="30px"></a>
                        <a href=""><img src="<?php echo base_url();?>public/image/youtube.png" alt="" width="30px"></a>
                        <a href=""><img src="<?php echo base_url();?>public/image/vk.png" alt="" width="30px"></a>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="bottom_menu">
                    <a href="">Проверки</a>
                    <a href="">Справочник</a>
                </div>
            </div>
        </div>
    </header>