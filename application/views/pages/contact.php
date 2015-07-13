<div class="hero-page-contact">
    <?php $this->load->view('templates/menu') ?>
    <div class="hero-text-page">
        <p class="hero-title-page">CONTACT</p>
        <p class="hero-info-page">stuur ons een bericht</p>
    </div>
</div>
<section id="contact">
    <div class="container section-content">
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
            <div class="col-md-6 col-md-offset-1">
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
    <div id="map-frame">
    </div>
</section>

<script type="text/javascript">

    $(document).ready(function(){

        $('.contact-send').click(function(){

            var naam, email, onderwerp, bericht;

            naam = $('#naam').val();
            email = $('#email').val();
            onderwerp = $('#onderwerp').val();
            bericht = $('#bericht').val();

            $.ajax({
                'type': "POST",
                'url': "mail.php",
                'data': {'name' : naam, 'email' : email, 'subject' : onderwerp, 'message' : bericht},
                'success': function (response) {
                    console.log(response);
                }
            });

        });

    });

</script>