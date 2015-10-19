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
            Wij zijn een jong dynamisch bedrijf dat gespeciaiseerd is in webdesign en netwerk beheer. Wij gebruiken altijd de nieuwste technologie en volgen de laatste trends. In samenspraak met de klant geven wij vorm aan uw idee. En dit allemaal tegen een goede prijs.
            <br>
            <br>
            Ook ontwikkelen wij applicatie's op maat van uw bedrijf. U kunt altijd eens een kijkje nemen in ons <a href="#portfolio" >portfolio</a> voor meer inzicht in ons werk.
            <br>
            <br>
            Bij Optimise-Group bent u dus in goede handen, wij staan altijd paraat om u verder te helpen.
            <br>
            <br>
            We make <span style="color: #97cb4c ">IT</span> Happen!
        </p>
        <div class="row boxes">
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-desktop over-icon" onclick="location.href='<?php echo site_url('it'); ?>'" style="cursor:pointer;"></i>
                    <h3 onclick="location.href='<?php echo site_url('it'); ?>'" style="cursor:pointer;">IT</h3>
                    <p>Bij Optimise-Group kun je terecht voor een proffesionele website of een krachtige applicatie. Ook kunnen wij uw bedrijf                              voorzien van een krachtig netwerk. En dat allemaal opmaat gemaakt!
                        <br><br>
                        Nog niet overtuigd? Geen probleem, neem gerust een  kijkje in ons <a href="#portfolio">portfolio.</a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-call over-icon" onclick="location.href='<?php echo site_url('communications'); ?>'" style="cursor:pointer;"></i>
                    <h3 onclick="location.href='<?php echo site_url('communications'); ?>'" style="cursor:pointer;">Communications</h3>
                    <p>Met cloud telefonie kunt u bellen over het internet. Dus geen telefooncentrale meer voor u, maar een centraal VoIP netwerk.                          Hierdoor komen er minder kosten bij kijken.
                        <br><br>
                        Bij cloud telefonie wordt de spraak door uw telefoon in data omgezet en door de centrale naar het juiste adres gestuurd.                             Steeds meer bedrijven kiezen voor cloud telefonie dus waar wacht u op?
                    </p>
                </div>
            </div>
            <div class="col-md-4 box">
                <div class="over-box">
                    <i class="icon ion-android-wifi over-icon" onclick="location.href='<?php echo site_url('hotspot'); ?>'" style="cursor:pointer;"></i>
                    <h3 onclick="location.href='<?php echo site_url('hotspot'); ?>'" style="cursor:pointer;">Hotspot</h3>
                    <p>Met de Optimise-hotspot verleent u gratis internet aan uw klanten in ruil voor een facebook check in. Hierdoor geniet de klant                       van het gratis netwerk en u bereikt potentiële klanten.
                        <br><br>
                        Onze hotspots worden voorzien van een uitgebreid dashboard dat u een inzicht geeft van uw klanten. Dit is dus een krachtige                             marketing tool die uw bedrijf niet kan missen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<!--<section id="team">
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
                    <p>Application developer</p>
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
</section>-->
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
                    <p>Mail: info@optimise-group.be</p>
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
            <a href="" class="link" target="_blank">Bekijk project</a>
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
                    $('.link').attr("href", projectInfo[0].proj_link);
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