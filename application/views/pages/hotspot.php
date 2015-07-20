<script src="<?php echo base_url(); ?>assets/js/map2.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<div class="hero-page-hotspot">
    <?php $this->load->view('templates/menu') ?>
    <video autoplay muted poster="../../../optimisegroup/assets/img/hotspotposter.jpg" id="bgvid">
        <source src="../../../optimisegroup/assets/img/OptimiseITpromo.mp4" type="video/mp4">
    </video>
    <div class="play" id="pause"><i class="ion-pause"></i></div>
    <div class="play" id="play" style="display: none"><i class="ion-play"></i></div>
    <div class="sound" id="unmute"><i class="ion-volume-high"></i></div>
    <div class="sound" id="mute" style="display: none"><i class="ion-volume-mute"></i></div>
</div>
<section id="hotspot">
    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <h2>Hotspot</h2>
                <p>
                    Optimise-hotspot is dé tool waarmee u de behoefte van de klant aan een gratis wifi netwerk vervult, en waarmee u eindelijk inzicht krijgt in het gedrag van uw klanten. Het werkt als volgt: Wij komen bij u langs en installeren een antenne bij de modem van uw zaak, op deze manier wordt uw modem ontlast en creëren wij een apart Wifi-netwerk speciaal voor de klanten/bezoekers van uw zaak.
                </p>
                <p>
                    Optimise-hotspot maakt internet toegankelijk voor uw klanten door een login via een socialmedia kanaal. De gebruiker/klant logt in met zijn Facebook account en deelt hierdoor bijvoorbeeld zijn locatie of geeft meteen een like aan de Facebookpagina van uw bedrijf. Hierdoor ziet u als vanzelf de likes van uw bedrijfspagina stijgen. Door toename van het aantal likes op uw pagina kunt u veel meer (potentiële) klanten bereiken.
                    U als ondernemer krijgt door de socialmedia inlog ook veel klantinformatie terug. Zo kunt u bekijken wat voor soort bezoekers er in uw zaak zijn geweest; man of vrouw? Of wat is de tijd dat de klant in uw zaak is geweest? Daarnaast kunt u via Facebook achterhalen waar de interesses liggen van deze mensen en zo uw doelgroep bepalen. Aan de hand hiervan kunt u de marketing eenvoudig op de behoeften van uw klant aanpassen.
                    Omdat de klanten via uw persoonlijke welkomstpagina inloggen, is het voor hen duidelijk dat ze inloggen op een veilig wifi-netwerk, dit zullen uw klanten waarderen!
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/img/OptimiseHotspot.png" class="img-responsive img-rounded center-block"/>
            </div>
        </div>
    </div>
</section>

<section id="map">
    <div id="map2"></div>
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


    //video play, pause
    if($("#bgvid").get(0).paused){
        $('#play').css('display', 'none');
        $('#pause').css('display', 'block');
    }else{
        $('#pause').css('display', 'none');
        $('#play').css('display', 'block');
    }

    $('#pause').click(function(){
        var vid = $('#bgvid');
        vid.get(0).pause();
        $('#pause').css('display', 'none');
        $('#play').css('display', 'block');
    });

    $('#play').click(function(){
        var vid = $('#bgvid');
        vid.get(0).play();
        $('#play').css('display', 'none');
        $('#pause').css('display', 'block');
    });

    $('#bgvid').on('ended',function(){
        $('#pause').css('display', 'none');
        $('#play').css('display', 'block');
    });

    $("#bgvid").prop('muted', true);

    $(".sound").click( function (){
        if($("#bgvid").prop('muted'))
        {
            $("#bgvid").prop('muted', false);
            $('#unmute').css('display', 'none');
            $('#mute').css('display', 'block');
        }

        else {
            $("#bgvid").prop('muted', true);
            $('#mute').css('display', 'none');
            $('#unmute').css('display', 'block');
        }

    });


</script>