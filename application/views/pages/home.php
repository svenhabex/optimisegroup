<script src="<?php echo base_url(); ?>assets/js/map1.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<div class="hero">
    <?php $this->load->view('templates/menu.php') ?>
    <div class="hero-text">
        <p class="hero-title">We make <span style="color: #97cb4c ">IT</span> happen</p>
    </div>
    <div class="hero-arrow">
        <a href="#over"><i class="ion-chevron-down hero-link"></i></a>
    </div>
</div>
<section id="over">
    <div class="container section-content">
        <h1>Over ons</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula justo odio, vitae dapibus neque fringilla eget. Aliquam erat volutpat. Etiam enim sapien, dignissim eu nibh ac, gravida euismod sapien. Maecenas consectetur tortor vitae odio volutpat, eleifend molestie dui vehicula. In posuere nulla faucibus, ornare tellus semper, maximus nisi. Quisque semper porttitor placerat. Ut blandit, libero nec eleifend facilisis, turpis nunc pretium arcu, vehicula porttitor turpis sapien sed mi. Nam viverra congue aliquam. Sed semper risus non est venenatis egestas. Vestibulum tortor orci, pulvinar sed efficitur sit amet, maximus id nisi. Praesent elementum augue et dignissim viverra. Praesent elementum vulputate pellentesque. Nulla et eleifend neque, sit amet venenatis nibh.
        </p>
        <div class="row boxes">
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-desktop over-icon"></i>
                    <h3>IT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula justo odio, vitae dapibus neque fringilla eget. Aliquam erat volutpat.</p>
                </div>
            </div>
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-call over-icon"></i>
                    <h3>Communications</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula justo odio, vitae dapibus neque fringilla eget. Aliquam erat volutpat.</p>
                </div>
            </div>
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-wifi over-icon"></i>
                    <h3>Hotspot</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vehicula justo odio, vitae dapibus neque fringilla eget. Aliquam erat volutpat.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="team">
    <div class="container section-content">
        <h1>Het team</h1>
        <div class="row boxes">
            <div class="col-md-3 col-sm-6 box">
                <div class="team-box">
                    <img src="assets/img/profilepic.jpg" class="img-responsive img-circle profile-pic"/>
                    <h3>Jens Vermijl</h3>
                    <p>Zaakvoerder</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <div class="team-box">
                    <img src="assets/img/profilepic.jpg" class="img-responsive img-circle profile-pic"/>
                    <h3>Timothy Vanderaerden</h3>
                    <p>Web developer</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <div class="team-box">
                    <img src="assets/img/profilepic.jpg" class="img-responsive img-circle profile-pic"/>
                    <h3>Bart Zoons</h3>
                    <p>Telefonie specialist</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 box">
                <div class="team-box">
                    <img src="assets/img/profilepic.jpg" class="img-responsive img-circle profile-pic"/>
                    <h3>Sven Habex</h3>
                    <p>Web developer</p>
                </div>
            </div>
</section>
<section id="counter">
    <div class="container">
        <div class="col-md-3 col-sm-6">
            <div class="counter-box">
                <strong class="counter-number">2014</strong>
                <p>Opgericht</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter-box">
                <strong class="counter-number">15</strong>
                <p>Klanten</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter-box">
                <strong class="counter-number">22</strong>
                <p>Projecten</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="counter-box">
                <strong class="counter-number">5</strong>
                <p>Team</p>
            </div>
        </div>
    </div>
</section>
<section id="portfolio">
    <div class="container section-content">
        <h1>Portfolio</h1>
        <div class="row boxes">
            <?php foreach($projecten as $project){ ?>
                <div class="col-md-3 col-sm-6">
                    <div class="project" id="<?= $project->proj_id ?>" style="background: url('<?= $project->proj_afbeelding ?>') center top no-repeat">
                        <div class="titel"><?= $project->proj_titel ?></div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</section>
<hr>
<section id="contact">
    <div class="container section-content">
        <h1>Contacteer ons</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="col-xs-3 icon-contact">
                    <i class="icon ion-ios-location"></i>
                </div>
                <div class="col-xs-9">
                    <h3>Ligging</h3>
                    <p>Kempische Steenweg 293 <br>3500 Hasselt, België</p>
                </div>
                <div class="col-xs-3 icon-contact">
                    <i class="icon ion-chatbubbles"></i>
                </div>
                <div class="col-xs-9">
                    <h3>Informatie</h3>
                    <p>Mail: optimiseit@gmail.com</p>
                    <p>Tel: 0492/636146</p>
                </div>
                <div class="col-xs-3 icon-contact">
                    <i class="icon ion-link"></i>
                </div>
                <div class="col-xs-9">
                    <h3>Volg ons</h3>
                    <a href="#" class="social-link"><i class="icon ion-social-facebook"></i></a>
                    <a href="#" class="social-link"><i class="icon ion-social-twitter"></i></a>
                    <a href="#" class="social-link"><i class="icon ion-social-googleplus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1 contact-right">
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="naam" placeholder="Naam">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="onderwerp" placeholder="Onderwerp">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="bericht" placeholder="Bericht" rows="8"></textarea>
                    </div>
                    <a href="#" class="contact-send"><i class="icon ion-android-send"></i>&nbsp;Verstuur bericht</a>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="map">
    <div id="map1">
    </div>
</section>

<div class="overlay">
    <div class="modal-box">
        <div class="close-btn"><i class="ion-close"></i></div>
        <div class="text-box">
            <p class="lead"></p>
            <p class="text-project"></p>
        </div>
        <div class="graphic"></div>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function(){

        $('.project').click(function(){
            var project = $(this).attr('id');
            $.ajax({
                'type': "POST",
                'url': "<?php echo site_url('portfolio/getProject'); ?>",
                'data': {'project' : project},
                'success': function (response) {
                    var projectInfo = $.parseJSON(response);
                    $('.lead').text(projectInfo[0].proj_titel);
                    $('.text-project').text(projectInfo[0].proj_beschrijving);
                    $('.graphic').css('background', 'url(' + projectInfo[0].proj_afbeelding + ') center right no-repeat')
                    $('.graphic').css('background-size', 'contain');

                    $('.overlay').addClass('is-open');
                }
            });
        });

        $('.close-btn').click(function(){
            $('.overlay').removeClass('is-open');
        });

    });
    doBounce($('.hero-arrow'), 3, '7px', 500);
    setInterval(function(){
        doBounce($('.hero-arrow'), 3, '7px', 500);
    }, 1000);

    function doBounce(element, times, distance, speed) {
        for(i = 0; i < times; i++) {
            element.animate({marginTop: '-='+distance},speed)
                .animate({marginTop: '+='+distance},speed);
        }
    }



</script>