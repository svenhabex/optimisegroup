<div class="hero-page-it">
    <?php $this->load->view('templates/menu') ?>
    <div class="hero-text-page">
        <p class="hero-title-page">IT</p>
        <p class="hero-info-page">Webdesign / Netwerk / Applicatie</p>
    </div>
</div>
<section id="webdesign">
    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <h2>Webdesign</h2>
                <p>In een digitaal tijdperk als dit is een website onmisbaar voor elk bedrijf. De invloed van een goede website op klanten is enorm groot. Of u de website nu als informatiepunt of virtuele winkel bekijkt, het is gewoonweg een must. Wij helpen u graag bij het bouwen van uw website op maat.
                    <br><br>
                    Websites worden minder en minder op laptop en pc bekeken, maar des te meer op smartphone en tablet. Daarom zijn al onze websites gebouwd zijn in responsive webdesign. Dit wil zeggen dat uw site zich automatisch aanpast aan de grootte van het scherm waarop de site wordt geopend. Het grootste voordeel aan deze techniek is het feit dat u slechts 1 website nodig heeft, een app of mobiele website zijn overbodig. Dit zal u een hoop extra kosten besparen.
                    <br><br>
                    Uw site is waardeloos indien ze niet bovenaan uw favoriete zoekmachine verschijnt wanneer u er naar zoekt. Daarom proberen wij met behulp van Search Engine Optimalisation (SEO) uw site zo hoog mogelijk te laten verschijnen in uw zoekmachine.
                    <br><br>
                    Verder verzorgen wij de hosting van uw site, het hele jaar door. Zo hoeft u zich hier niets van aan te trekken en kan u zich focussen op uw eigen activiteiten.
                    <br><br>
                    Aangezien elke website verschillend is, kunnen wij geen richtprijs vooropstellen. De kostprijs van de website hangt af van verschillende elementen die zeer ver uit elkaar liggen. U kan natuurlijk altijd een offerte of een gratis kennismakingsgesprek aanvragen via <a href="<?php echo site_url('contact'); ?>">contact</a>.
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/img/responsive.jpg" class="img-responsive img-rounded"/>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="netwerk">
    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/img/netwerkbeheer.jpg" class="img-responsive img-rounded"/>
            </div>
            <div class="col-md-6">
                <h2>Netwerkbeheer</h2>
                <p>
                    Wij helpen u graag met het opzetten van een netwerk binnen uw bedrijf. We zorgen ervoor dat er overal een uitstekende verbinding is, door zo min mogelijk acces points te gebruiken. Zo zorgen wij ervoor dat de kost zo laag mogelijk blijft.
                    <br><br>
                    Door het toepassen van de nieuwste technologie en de beste hardware modellen zult u zorgenloos genieten van een snelle en veilige verbinding.
                    <br><br>
                    Wij geven u snelle en goede service. De kostprijs varieert van verschillende elementen. U kan natuurlijk altijd een offerte of een gratis kennismakingsgesprek aanvragen via <a href="<?php echo site_url('contact'); ?>">contact</a>.
                </p>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="applicatie">
    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <h2>Applicatie</h2>
                <p>Wij zijn gespesialiseerd in het ontwikkelen van Windows Form applications en Android apps. Ons team staat u bij tijdens de ontwikkeling van de applicatie. Zo hebt u zicht over de app en kan u op elk moment een wijziging doorgeven.
                    <br><br>
                    Graag helpen wij u verder tot de ontwikkeling van een applicatie op maat. De kostprijs varieert van verschillende elementen. U kan natuurlijk altijd een offerte of een gratis kennismakingsgesprek aanvragen via <a href="<?php echo site_url('contact'); ?>">contact</a>.
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/img/responsive.jpg" class="img-responsive img-rounded"/>
            </div>
        </div>
    </div>
</section>
<hr>
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

</script>
