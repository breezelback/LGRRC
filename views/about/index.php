<style>
    .rd_wall {
        background-image: url('images/wall_message.jpg');
        color: #fff;
        height: 920px;
        width: 100%;
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
    p{
        font-size: 16px;
    font-weight: normal;
    text-align: justify;
    text-indent: 20px;
    }
</style>
<section class="rd_wall">
    <div class="container">
        <p><?= $executive_msg['quotation']; ?></p>
    </div>
</section>
<section class="ard_wall">
    <div class="container">
        <p><?= $ard_msg['quotation']; ?></p>

    </div>
</section>