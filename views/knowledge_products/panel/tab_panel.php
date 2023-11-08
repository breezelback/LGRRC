<style>
    .videos_title {
        text-align: left !important;
    }
</style>

<div id="tab1" class="tabcontent" style="display:block;margin-top:5%;">
    <table class="table display" id="knowledge_products_table" style="font-size:10pt;text-align:left;">
        <thead>
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Sub-Category</th>
                <th scope="col" style="width:100% !important;">Title of the Book</th>
                <th scope="col">Author/Publisher</th>
                <th scope="col" style="width:0 !important;">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $key => $data) : ?>

                <tr>
                  <td><?= $data['category'] ?></td>
                    <td><?= $data['subcategory'] ?></td>
                    <td><?= $data['title'] ?>
                <br><b><i>Year of Publication: <?= $data['publication_year'];?></i></b>
                </td>
                    <td><?= $data['author'] ?></td>
                    <td><?= $data['quantity'] ?></td>

                </tr>



            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div id="tab2" class="tabcontent" style="display:block;margin-top:5%;margin-bottom:5%;">
    <div class="row">
        <div id="accordion" style="width: 100%;">
            <div class="card">
                <div class="card-header" id="">
                    <h5 class="mb-0">
                        <button class="btn videos_title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Linawin Natin
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <select name="videoSeason" id="videoSeason" class="form-control" style="width: 25%;" onchange="this.form.submit();">
                            <option selected disabled>Select Season</option>
                            <?php foreach ($linawin_season as $key => $data) : ?>
                                <option value="<?= $data['videoSeason']; ?>">Season <?= $data['videoSeason']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="row">
                            <?php foreach ($linawin_video as $key => $data) : ?>
                                <div class="col-lg-4">
                                    <div style="margin-bottom:10px;" class="fb-video card-img-top" data-href="<?php echo $data['videoLink']; ?>" data-width="610" data-show-text="false">
                                        <blockquote cite="<?php echo $data['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $data['videoLink']; ?>"><?php echo $data['videoTitle']; ?></a>
                                            <p>
                                        </blockquote>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn collapsed videos_title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sagisag ng Pag-asa
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <select name="videoSeason" id="videoSeason" class="form-control" style="width: 25%;" onchange="this.form.submit();">
                            <option selected disabled>Select Season</option>
                            <?php foreach ($sagisag_season as $key => $data) : ?>
                                <option value="<?= $data['videoSeason']; ?>">Season <?= $data['videoSeason']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="row">
                            <?php foreach ($sagisag_video as $key => $data) : ?>
                                <div class="col-lg-4">
                                    <div style="margin-bottom:10px;" class="fb-video card-img-top" data-href="<?php echo $data['videoLink']; ?>" data-width="610" data-show-text="false">
                                        <blockquote cite="<?php echo $data['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $data['videoLink']; ?>"><?php echo $data['videoTitle']; ?></a>
                                            <p>
                                        </blockquote>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>



                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn  collapsed videos_title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Marites Martes
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=1217901548744871" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=1217901548744871">SOCE</a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>#MaritesMartes: Kampanyahan sa Holy Week, Pwede ba?</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=316513527331465" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="https://www.facebook.com/watch/?v=316513527331465" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=316513527331465">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>MaritesMartes: Linawin Natin Special Series at Caviteños, Alam Nyo Ba?</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=1037985280177844" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="<?php echo $res['videoLink']; ?>" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=1037985280177844">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>#MaritesMartes: Reminders Before Voting</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=377546267740646" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="https://www.facebook.com/watch/?v=377546267740646" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=377546267740646">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>MaritesMartes: Local Governance Transition</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=751569805845948" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="https://www.facebook.com/watch/?v=751569805845948" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=751569805845948">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>#MaritesMartes: Absentee at Local Absentee Voters</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=326727389399011" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="https://www.facebook.com/watch/?v=326727389399011" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=326727389399011">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>#MaritesMartes: COMELEC Voter Verifier</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <div class="fb-video card-img-top" data-href="https://www.facebook.com/watch/?v=1071155077082729" data-width="500" data-height="300" data-show-text="false">
                                        <blockquote cite="https://www.facebook.com/watch/?v=1071155077082729" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/watch/?v=1071155077082729">PANOORIN • </a>
                                            <p>
                                        </blockquote>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><b>#MaritesMartes: Voting Process</b></p>
                                        <p class="card-text text-muted">June 21, 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn  collapsed videos_title" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Leksyon Eleksyon
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn  collapsed videos_title" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            Weekender
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn  collapsed videos_title" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            Is it Legit
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

