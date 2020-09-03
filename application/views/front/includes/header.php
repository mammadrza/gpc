

<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">

            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="<?php echo base_url('index'); ?>"><img width="100" src="<?php echo base_url('public/front/') ?>assets/img/logo/gpcLogo.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="<?php echo base_url('public/front/') ?>assets/img/hero/header_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="<?php echo base_url('index'); ?>"><img width="80" src="<?php echo base_url('public/front/') ?>assets/img/logo/gpcLogo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?php echo base_url('index'); ?>"><?php echo $this->lang->line('homeMenu'); ?></a></li>
                                        <li><a href="<?php echo base_url('about'); ?>"><?php echo $this->lang->line('aboutMenu'); ?></a></li>
                                        <li><a href="<?php echo base_url('register'); ?>"><?php echo $this->lang->line('registerMenu'); ?></a></li>
<!--                                        <li><a href="contact.html">Contact</a></li>-->
<!--                                        <li><a href="#">Pages</a>-->
<!--                                            <ul class="submenu">-->
<!--                                                <li><a href="elements.html">Element</a></li>-->
<!--                                                <li><a href="blog.html">Blog</a></li>-->
<!--                                                <li><a href="single-blog.html">Blog Details</a></li>-->
<!--                                                <li><a href="details.html">Categori Details</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
                                    </ul>

                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
<!--                            <a href="--><?php //echo base_url('LanguageSwitcher/switchLang/azerbaijan'); ?><!--"><span style="color: red"><img src="--><?php //echo base_url('public/img/az.png') ?><!--" alt="az"></span></a>-->
<!--                            <a href="--><?php //echo base_url('LanguageSwitcher/switchLang/english'); ?><!--"><span style="color: red"><img src="--><?php //echo base_url('public/img/gb.png') ?><!--" alt="en"></span></a>-->
<!--                            -->
                            <a href="<?php echo base_url('LanguageSwitcher/switchLang/azerbaijan'); ?>"><img style="width: 30px;" src="<?php echo base_url('public/front/assets/img/flag/azerbaijan.gif') ?>" alt="az"></a>
                            <a href="<?php echo base_url('LanguageSwitcher/switchLang/english'); ?>"><img style="width: 30px; height: 22px;" src="<?php echo base_url('public/front/assets/img/flag/gb.gif'); ?>" alt="en"></a>

<!--                            <div class="header-right-btn f-right d-none d-lg-block">-->
<!--                                <i class="fas fa-search special-tag"></i>-->
<!--                                <div class="search-box">-->
<!---->
<!--                                    <form action="#">-->
<!--                                        <input type="text" placeholder="--><?php //echo $this->lang->line('search_txt'); ?><!--">-->
<!---->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>