
<?php $this->load->view('front/includes/headerStyle'); ?>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img style="width: 100%;" src="<?php echo base_url('public/front/') ?>assets/img/logo/gpcLogo.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Preloader Start -->

    <?php $this->load->view('front/includes/header'); ?>
    
    <main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
<!--                                <strong>--><?php //echo $this->lang->line('newsMenu'); ?><!--</strong>-->
<!--                                <div class="trending-animated">-->
<!--                                    <ul id="js-news" class="js-hidden">-->
<!--                                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>-->
<!--                                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>-->
<!--                                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>-->
<!--                                    </ul>-->
<!--                                </div>-->

                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="<?php echo base_url('public/front/') ?>assets/img/post/about_heor.jpg" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3><?php echo $this->lang->line('aboutUsTitle'); ?></h3>
                                        </div>
                                        <div class="about-prea">

                                            <p class="about-pera1 mb-25">
                                              <?php echo $this->lang->line('aboutText'); ?>
                                            </p>
                                            <p class="about-pera1 mb-25">
                                              <?php echo $this->lang->line('about'); ?>
                                            </p>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3><?php echo $this->lang->line('follow'); ?></h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="<?php echo base_url('public/front/') ?>assets/img/news/icon-fb.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p><?php echo $this->lang->line('fans'); ?></p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="<?php echo base_url('public/front/') ?>assets/img/news/icon-tw.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p><?php echo $this->lang->line('fans'); ?></p>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="<?php echo base_url('public/front/') ?>assets/img/news/icon-ins.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p><?php echo $this->lang->line('fans'); ?></p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="<?php echo base_url('public/front/') ?>assets/img/news/icon-yo.png" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p><?php echo $this->lang->line('fans'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="<?php echo base_url('public/front/') ?>assets/img/news/news_card.jpg" alt="">
                            </div>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

   
<?php $this->load->view('front/includes/footer'); ?>
<?php $this->load->view('front/includes/footerJs'); ?>