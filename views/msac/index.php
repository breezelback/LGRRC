<style>
    #page_navigation a {
        padding: 0.7rem 1rem;
        border: 1px solid #2163e8;
        margin: 2px;
        color: #595d69;
        text-decoration: none;
        border-radius: 0.25rem;
    }
    .active{
        background-color: #192f72;
        color:#fff !important;
    }
</style>
<div class="container position-relative">
    <div class="row">

        <div class="col-lg-9 mb-3">

            <!--LEFT CONTENT-->

            <div class="row" style="margin-top:20%;">
                <div class="col-md-9">
                    <h1 class="display-6" style="">MSAC Directory</h1>
                </div>
            </div>
            <div>
                <div class="row" id="content" style="text-align: left;">

                </div>
            </div>
            <br>
            <div id="page_navigation">
                <a class="previous_link" id="previous">&lt;&lt;</a>
                <a class="page_link active_page" id="page_num" longdesc="0">1</a>
                <a class="page_link active_page" id="page_num2" longdesc="0">2</a>
                <a class="page_link active_page" id="page_num3" longdesc="0">3</a>
                <a class="page_link active_page" id="page_num4" longdesc="0">4</a>
                <a class="page_link active_page" id="page_num5" longdesc="0">5</a>
                <!-- Add more page links here -->
                <a class="next_link" id="next">&gt;&gt;</a>
            </div>
            <div id="data_container">
                <!-- Data will be displayed here -->
            </div>

            <p>&nbsp;</p>



            <!-- /LEFT CONTENT-->


        </div>
        <div class="col-lg-3" style="margin-top: 20%;">
            <div>
                <a href="calabarzon.dilg.gov.ph"><img src="images/side_banner/regional_website.jpg" class="zoomable-image" style="position: absolute; right: 150;" /></a>
                <a href="fas.calabarzon.dilg.gov.ph"><img src="images/side_banner/fas.jpg" class="zoomable-image" style="position: absolute; right: 150;margin-top:300px;" /></a>
                <a href="intranet.calabarzon.dilg.gov.ph"><img src="images/side_banner/dilg_intranet.jpg" class="zoomable-image" style="position: absolute; right: 150;margin-top:150px;" /></a>
            </div>
        </div>
    </div>
</div>
<div id="fb-root">

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#page_num').on('click', function() {
            go_to_page(1);
            $(this).addClass('active');
        })
        $('#page_num2').on('click', function() {
            go_to_page(11);
            $('#page_num').removeClass('active');
            $(this).addClass('active');

        })
        $('#page_num3').on('click', function() {
            go_to_page(21);
        })
        $('#page_num4').on('click', function() {
            go_to_page(31);
        })
        $('#page_num5').on('click', function() {
            go_to_page(41);
        })
        $('#previous').on('click',function(){
            previous();
        })
        $('#next').on('click',function(){
            next();
        })

        

        const itemsPerPage = 10; // Number of items per page
        let currentPage = 1; // Current page
        let totalPages = 100;

        // Function to update the content based on the current page
        function updateContent(page) {
            // You should make an AJAX request to a PHP script to fetch data from the database
            // Example:
            $.ajax({
                type: "POST",
                url: "route/fetch_msac_data.php",
                data: {
                    page: page,
                    itemsPerPage: itemsPerPage
                },
                success: function(data) {
                    // Display the fetched data in the "data_container" div
                    let lists = JSON.parse(data);
                    $('#content').empty();

                    $.each(lists, function(key, item) {
                        let msac = '';
                        $(".media-object").on("error", function() {
                            $(this).attr('src', 'images/not_found.jpg');
                        });


                        msac += '<div class="col-sm-2" style="height:100px;"><a href="#" style="text-decoration:underline;">';
                        msac += '<img class="media-object img-circle img-fluid rounded" src="images/msac/'+item['imageName']+'" alt="" style="width:250px;margin:0 auto; margin-bottom:12px;"></a>';
                        msac += '</div>';

                        msac += '<div class="col-sm-4">';
                        msac += '<h5 class="media-heading text-primary">' + item['agencyName'] + '</h4>';
                        msac += '<i class="fa fa-map"></i> <span class="thin" style="font-size:10pt;">' + item['address'] + '</span> <br>';
                        msac += '<i class="fa fa-envelope"></i> <span class=" thin" style="font-size:10pt;"><i>' + item['email']; + '</i></span><br>';
                        msac += '<h6 style="font-size:10pt; "><strong><i class="fa fa-phone"></i> ' + item['contactNumber'] + '</strong></h6><span class="" style=""></span><br>';
                        msac += '</div>';
                        msac += '<hr>';

                        $('#content').append(msac);


                    });

                },
                error: function(err) {
                    console.log("Error:", err);
                }
            });
        }
        // Function to go to a specific page
        function go_to_page(page) {
            currentPage = page;
            updateContent(page);
            // Update pagination links here
        }

        // Function to go to the next page
        function next() {
            if (currentPage < totalPages) {
                go_to_page(currentPage + 10);
            }else{
                console.log("Page reaches limit")
            }
        }

        // Function to go to the previous page
        function previous() {
            console.log(currentPage);
            if (currentPage > 1) {
                go_to_page(currentPage - 10);
            }
        }

        // You should call this function to initialize the content on page load
        updateContent(1)
    })
</script>