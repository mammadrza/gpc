
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
<!--                        <strong>--><?php //echo $this->lang->line('newsMenu'); ?><!--</strong>-->
<!--                        <div class="trending-animated">-->
<!--                            <ul id="js-news" class="js-hidden">-->
<!--                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>-->
<!--                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>-->
<!--                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>-->
<!--                            </ul>-->
<!--                        </div>-->

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
<!--                        <div class="about-img">-->
<!--                            <img src="--><?php //echo base_url('public/front/') ?><!--assets/img/post/about_heor.jpg" alt="">-->
<!--                        </div>-->
                        <div class="section-tittle mb-30 pt-30">
                            <h3><?php echo $this->lang->line('registerTitle'); ?></h3>
                        </div>
                        <div class="about-prea">

                            <?php if($this->session->flashdata('err')){ ?>
                                <div class="alert alert-danger">
                                    <span><?php echo $this->session->flashdata('err'); ?></span>
                                </div>
                            <?php } ?>

                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success">
                                    <span><?php echo $this->session->flashdata('success'); ?></span>
                                </div>
                            <?php } ?>


                            <form action="<?php echo base_url('registerAct'); ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash();?>" />
                                <div class="mt-10">

                                    <input type="text" name="name" placeholder="<?php echo $this->lang->line('input_name'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_name'); ?>'" required
                                           class="single-input-accent">
                                </div>

                                <div class="mt-10">
                                    <input type="text" name="surname" placeholder="<?php echo $this->lang->line('input_surname'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_surname'); ?>'" required
                                           class="single-input-accent">
                                </div>

                                <br>

                                <div class="switch-wrap d-flex" >

                                    <p style="padding-left: 20px; color:grey;"><label for="primary-radio"><?php echo $this->lang->line('input_gender_men'); ?></label></p>
                                    <div class="primary-radio" style="margin: 8px;">
                                        <input type="radio" name="gender" id="primary-radio" value="<?php echo $gender['0']['user_gender']; ?>">
                                        <label for="primary-radio"></label>
                                    </div>

                                    <p style="padding-left: 20px; color:grey;"><label for="primary-radio2"><?php echo $this->lang->line('input_gender_women'); ?></label></p>
                                    <div class="primary-radio" style="margin: 8px;">
                                        <input type="radio" name="gender" id="primary-radio2" value="<?php echo $gender['1']['user_gender']; ?>">
                                        <label for="primary-radio2"></label>
                                    </div>

                                </div>


                                <div class="mt-10">
                                    <input style="color: gray;" type="date" name="birthday" placeholder="<?php echo $this->lang->line('input_birthday'); ?>" class="single-input-accent" required>
                                </div>
                                <br>

                                <div class="mt-10">
                                    <input type="email" name="email" placeholder="<?php echo $this->lang->line('input_email'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_email'); ?>'" required
                                           class="single-input-accent">
                                </div>

                                <br>


                                <div class="mt-10">
                                    <input type="text" name="phone" placeholder="<?php echo $this->lang->line('input_mob'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_mob'); ?>'" required
                                           class="single-input-accent">
                                </div>
                                <br>

                                <div class="mt-10">
                                    <input type="text" name="address" placeholder="<?php echo $this->lang->line('input_address'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_address'); ?>'" required
                                           class="single-input-accent">
                                </div>

                                <br>
                                <div class="switch-wrap d-flex" >

                                    <p style="padding-left: 20px; color:grey;"><label for="primary-radio4"><?php echo $this->lang->line('input_student'); ?></label></p>
                                    <div class="primary-radio" style="margin: 8px;">
                                        <input type="radio" name="type" id="primary-radio4" value="<?php echo $category['0']['type']; ?>" onclick="student()">
                                        <label for="primary-radio4"></label>
                                    </div>

                                    <p style="padding-left: 20px; color:grey;"><label for="primary-radio5"><?php echo $this->lang->line('input_nonstudent'); ?></label></p>
                                    <div class="primary-radio" style="margin: 8px;">
                                        <input type="radio" name="type" id="primary-radio5" value="<?php echo $category['1']['type']; ?>" onclick="nonStudent()">
                                        <label for="primary-radio5"></label>
                                    </div>

                                </div>

                                <div class="mt-10">
                                    <input type="text" name="student_uni" placeholder="<?php echo $this->lang->line('input_uni'); ?>"
                                           onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_uni'); ?>'"
                                           class="single-input-accent" id="uniName"  style="display: block; margin-bottom: 20px;">
                                </div>



                                <style>
                                    .form-select .nice-select{
                                        padding-left: 20px;
                                    }
                                </style>


                                <script>
                                    function student(){
                                        document.getElementById('uniName').style.display = "block"
                                        document.getElementById('default-select').style.display = "block";

                                        document.getElementById('workName').style.display = "none"
                                        document.getElementById('workStatus').style.display = "none";
                                    }

                                    function nonStudent(){
                                        document.getElementById('uniName').style.display = "none"
                                        document.getElementById('default-select').style.display = "none";

                                        document.getElementById('workName').style.display = "block"
                                        document.getElementById('workStatus').style.display = "block";
                                    }
                                </script>


                                    <div class="form-select" id="default-select" style="display: block">
                                        <select name="education" id="">
                                            <option value=""><?php echo $this->lang->line('input_edu_select'); ?></option>
                                            <option value="<?php echo $education['0']['user_education']; ?>"><?php echo $this->lang->line('input_edu_bakalavr'); ?></option>
                                            <option value="<?php echo $education['1']['user_education']; ?>"><?php echo $this->lang->line('input_edu_magister'); ?></option>
                                            <option value="<?php echo $education['2']['user_education']; ?>"><?php echo $this->lang->line('input_edu_doktorant'); ?></option>
                                        </select>

                                </div>










                        <div class="mt-10">

                            <input type="text" name="work_company_name" placeholder="<?php echo $this->lang->line('input_work'); ?>"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_work'); ?>'"
                                   class="single-input-accent" id="workName" style="display: none; margin-bottom: 20px;">
                        </div>


                        <div class="mt-10">

                            <input type="text" name="work_status" placeholder="<?php echo $this->lang->line('input_work_status'); ?>"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_work_status'); ?>'"
                                   class="single-input-accent" id="workStatus" style="display: none">
                        </div>


                        <div class="mt-10">
                            <label  for="imageUpload" class="btn btn-primary btn-block btn-outlined" style="background: #1EAE6A;"><?php echo $this->lang->line('input_cv'); ?></label>
                            <input type="file" name="file" placeholder="<?php echo $this->lang->line('input_cv'); ?>"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_cv'); ?>'" required
                                   class="single-input-accent" id="imageUpload" hidden>
                        </div>
                                <br>


                        <div class="switch-wrap d-flex" >
                            <p style="padding-left: 20px; color:grey;"><label for="primary-radio7"><?php echo $this->lang->line('input_member'); ?></label></p>
                            <div class="primary-radio" style="margin: 8px;">
                                <input type="radio" name="member" id="primary-radio7" value="<?php echo $member['0']['user_member']; ?>">
                                <label for="primary-radio7"></label>
                            </div>

                        </div>

                        <div class="switch-wrap d-flex" >
                            <p style="padding-left: 20px; color:grey;"><label for="primary-radio8"><?php echo $this->lang->line('input_volunteer'); ?></label></p>
                            <div class="primary-radio" style="margin: 8px;">
                                <input type="radio" name="member" id="primary-radio8" value="<?php echo $member['1']['user_member']; ?>">
                                <label for="primary-radio8"></label>
                            </div>
                        </div>



<!--=======Captcha==================-->



                        <br>

                        <div class="mt-10">

                            <input style="width: 50%; display: inline-block;" type="text" name="captcha" placeholder="<?php echo $this->lang->line('input_captcha'); ?>"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $this->lang->line('input_captcha'); ?>'"
                                   class="single-input-accent">
                            <?php echo $captcha['image']; ?>
                        </div>

                        <br>



<!--=======Captcha==================-->


                        <button type="submit" class="fa-pull-right genric-btn danger radius"><?php echo $this->lang->line('input_send'); ?></button>


                    </form>




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
                        <img src="<?php echo base_url('public/front/') ?>assets/img/news/sethub.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
</main>


<?php $this->load->view('front/includes/footer'); ?>
<?php $this->load->view('front/includes/footerJs'); ?>