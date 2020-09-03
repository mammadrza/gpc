<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GPC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/') ?>css/style.css">
</head>
<body>

<style>
    .menu{
        width: 100%;
        height: 50px;
        /*background: red;*/
        color: white;
        padding: 15px;
        text-align: center;
        box-sizing: border-box;
    }
    .menuText{
        color: #002e5b;
        font-weight: 500;
        text-decoration: none;
        font-size: 14px;
        transition: all .3s ease-out 0s;
        text-transform: capitalize;
    }
    .menu a{
        text-decoration: none;
    }
    .menuText:hover{
        color: #129DC1;
    }
</style>
    <div class="container-fluid">
        <div class="row">
            <div class="menu">


                <a href="<?php echo base_url('index'); ?>"><span class="menuText"><?php echo $this->lang->line('homeMenu'); ?></span></a>
                <a href="<?php echo base_url('about'); ?>"><span class="menuText" style="margin: 0px 30px;"><?php echo $this->lang->line('aboutMenu'); ?></span></a>
                <a href="<?php echo base_url('register'); ?>"><span class="menuText"><?php echo $this->lang->line('registerMenu'); ?></span></a>

            </div>
            <div class="main">

                <div class="contains">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-md-6">
                        <div class="row">
                           <div class="left">

                               <span class="a"><?php echo $this->lang->line('index_text'); ?></span>
                               <br>
                               <span class="b"><?php echo $this->lang->line('index_text2'); ?></span>
                               <br>
                               <span class="c"><?php echo $this->lang->line('index_text3'); ?></span>
                           </div>
                            <div class="left2">
                                <img  style="width: 150px; height: 150px;" src="<?php echo base_url('public/') ?>img/global_programmers_club_logo.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-md-6">
                        <div class="row">
                            <div class="right">
                                <img class="imageStyle" src="<?php echo base_url('public/') ?>img/2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>