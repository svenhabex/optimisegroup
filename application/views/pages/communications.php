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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id velit aliquet, vehicula felis sed, tempor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum dui vel dictum pretium. Nullam vehicula, risus at efficitur auctor, ex lorem lobortis massa, et maximus lacus felis vitae diam. Etiam scelerisque cursus posuere. Vestibulum facilisis nisi in consequat cursus. Cras fringilla non lectus sit amet molestie. Fusce ligula turpis, viverra a nisl non, accumsan ultricies elit.
                    Integer pellentesque dolor quis dapibus fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec velit ante, interdum in egestas non, fringilla gravida ante. Ut non blandit mauris. Sed fringilla ac tortor sit amet pellentesque. Vivamus porttitor metus vitae rutrum finibus. Sed elit metus, efficitur sit amet fringilla a, finibus in urna. Morbi a turpis ac purus porta tristique. Donec pretium faucibus elementum. Duis fermentum fermentum libero sed iaculis. Proin vulputate sagittis metus, bibendum eleifend quam tincidunt sit amet. Integer et elementum diam, auctor porttitor diam. Cras porttitor at odio id dapibus. Etiam quis ipsum sed enim condimentum porta. Phasellus mauris sapien, pretium at dictum eu, tempus vel justo.
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
                    <div class="project" id="<?= $project->proj_id ?>"><?= $project->proj_titel ?></div>
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