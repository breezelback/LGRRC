<style>
    .carousel_wall{
        background-image: url('images/lgrc_background1.png');
        color: #fff;
        height: 920px;
        width: 100%;
        background-repeat: no-repeat;
        padding:5%;
    }
    .rd_wall {
        background-image: url('images/wall_message.jpg');
        color: #fff;
        height: 920px;
        max-width: 100%;
        background-repeat: no-repeat;

    }

    .ard_wall {
        background-image: url(images/ard_message.jpg);
        color: #fff;
        height: 339px;
        width: 100%;
        background-repeat: no-repeat;
        margin-top: -582px;
    }

    p {
        font-size: 16px;
        font-weight: normal;
        text-align: justify;
        text-indent: 20px;
    }
</style>

<link rel="stylesheet" href="carousel/dist/mibreit-gallery/css/mibreitGallery.css" type="text/css" />
<div class=" carousel_wall">
    <div class="framed-background ">
        <div class="framed-background__border"></div>
        <div class="flex-vertical">
            <div id="content">
                <div id="full-gallery" class="content-slideshow">
                    <?php foreach ($about_carousel as $key => $data) : ?>
                        <div class="mibreit-imageElement" style="opacity: 0.0">
                            <img src="images/about/<?= $data['imageName']; ?>" data-src="images/about/<?php echo $data['imageName']; ?>" data-title="LGRRC" alt="LGRRC" width="1280" height="853" />
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mibreit-thumbview">
                    <?php foreach ($about_carousel as $key => $data) : ?>
                        <div class="mibreit-imageElement">
                            <img src="images/about/<?= $data['imageName']; ?>" data-src="images/about/<?php echo $data['imageName']; ?>" data-title="LGRRC" alt="LGRRC" width="1280" height="853" />
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
        <div class="framed-background__border"></div>
    </div>
</div>
<section class="rd_wall">
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <p><?= $executive_msg['quotation']; ?></p>
    </div>
</section>
<section class="ard_wall">
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <p><?= $ard_msg['quotation']; ?></p>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>

<script src="carousel/dist/mibreit-gallery/mibreitGallery.min.js" type="text/javascript"></script>
<script type="text/javascript">


    $(document).ready(function() {
      var fullGallery = mibreitGallery.createGallery({
        slideshowContainer: "#full-gallery",
        thumbviewContainer: ".mibreit-thumbview",
        titleContainer: "#full-gallery-title",
        allowFullscreen: true,
        preloadLeftNr: 2,
        preloadRightNr: 3
      });
    });
  </script>