<div class="hero-page-comm">
    <?php $this->load->view('templates/menu') ?>
    <div class="hero-text-page">
        <p class="hero-title-page">COMMUNICATIONS</p>
        <p class="hero-info-page">Cloud telefonie</p>
    </div>
</div>
<section id="telefonie">
    <div class="container section-content">
        <div class="row">
            <div class="col-md-6">
                <h2>Cloud Telefonie</h2>
                <p>
                    Een aantal voorbeelden uit de praktijk, om de optimalisatie te illustreren die een cloud telefooncentrale met zich meebrengt. Cloud telefonie zorgt wereldwijd voor de krachtigste telefooncentrale die u kon wensen:

                </p>
                •	U bezit een IP-telefoon op kantoor, gekoppeld aan de cloud telefooncentrale van Cloud Communications. Het extern nummer van dit apparaat (nummer waarmee u uit belt) is niet meer gekoppeld aan uw fysieke locatie. Tijdens een zakenreis neemt u deze mee naar uw hotel en plugt u deze in een ethernet aansluiting. U kan nog steeds gratis intern bellen en volgens het nationaal tarief met uw klanten in België, terwijl u in het buitenland vertoefd. Bij een verhuis/migratie/uitbreiding..., neemt u de toestellen mee en u connecteert ze, plug `n play. Te gemakkelijk voor woorden, niet?
                <p>
                <p> •	Het kan nog makkelijker. Cloud Communications heeft een eigen applicatie: CloudCall (iOS/Android). U maakt zich geen zorgen omtrent het instellen van configuratie en paswoorden. U voert de configuratiecode in en uw smartphone is volledig geïntegreerd en operationeel op uw eigen systeem. Daarnaast biedt onze applicatie een 'push' functie aan, waardoor het niet meer nodig is uw applicatie steeds op de achtergrond te laten draaien. Dit heeft een positieve invloed op uw batterijverbruik. De connectie met uw hoogsteigen telefooncentrale is hier wereldwijd.
                </p>
                <p>                    •	Met uw smartphone kan u bellen via uw eigen, gekozen nationaal of internationaal nummer. De persoon die u belt ervaart een gesprek dat afkomstig is van uw bedrijf, terwijl u van thuis uit werkt of zelfs in de auto bevindt.
                </p>
                <p>                    •	STORING! Ter plaatse is er een stroompanne, of het internet ligt uit. Géén probleem. Via het controlepaneel schakelt u gedurende deze panne, alle inkomende calls door naar één of meerdere gsm nummers. Uw analoog systeem kan hier slechts van dromen.
                </p>
                <p>                    •	De koppeling van uw CRM/klantenbeheer met uw telefonie. Cloud Communications koppelt uw telefooncentrale in de cloud, aan uw klantenbestand. Hierbij kan u genieten van een efficiënte klantenbehandeling, kort op de bal inspelen op de wensen van de beller, met alle informatie voorhanden.
                </p>
                <p>                    •	Elke IP-telefoon, PC, laptop, smartphone of tablet kan worden doorgeschakeld naar verschillende gewenste toestellen, personen, waarbij de flexibiliteit ongelimiteerd is. Hier geldt de regel `the sky is the limit`!
                </p>
                <p>                    Cloud telefonie is de volgende stap in communicatie voor uw organisatie. Zoals onze tevreden klanten getuigen, is dit systeem de innovatie die telefonie flexibel maakt. U bent tenslotte beheerder, van een zee aan mogelijkheden.
                </p>
            </div>
            <div class="col-md-6">

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
                $('.graphic').css('background', 'url(' + projectInfo[0].proj_afbeelding + ') center right no-repeat');
                $('.graphic').css('background-size', 'contain');

                $('.overlay').addClass('is-open');
            }
        });
    });

    $('.close-btn').click(function(){
        $('.overlay').removeClass('is-open');
    });

</script>