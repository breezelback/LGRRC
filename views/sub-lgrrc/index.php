<style>
    #page_navigation a {
        padding: 0.7rem 1rem;
        border: 1px solid #2163e8;
        margin: 2px;
        color: #595d69;
        text-decoration: none;
        border-radius: 0.25rem;
    }

    .active-page {
        background-color: #192f72;
        color: #fff !important;
    }

    p {
        font-size: 12pt;
        text-align: justify;
        text-indent: 10px;
    }
</style>
<div class="container position-relative" style="height:600px;">
    <div class="row">

        <div class="col-lg-12 mb-3">

            <!--LEFT CONTENT-->

            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="display-6" style="">Sub-LGRCs</h1>
                    <p>Sub-LGRCs are the extension of the LGRRCs within the provinces. It is under the management of the DILG field officers, such as the Provincial Directors, City Directors, and Municipal Local Government Operations Officers. In LGRRC IV-A, a cluster-based LGRC is established, hence the operations is under the Cluster Head. </p>
                    <p>In close coordination with the LGRRC IV-A, the Sub-LGRCs serve as helpdesk support for LGUs on CapDev concerns, support CapDev provision to LGUs by the LGRRC and partner LRIs, and organize their local MSAC through local networks and partnerships between and among LGUs and other local governance stakeholders within their local community.</p>
                    
                </div>
            </div>




            <!-- /LEFT CONTENT-->


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
            $(this).addClass('active-page');
            $('#next').removeClass('active-page');
            $('#previous').removeClass('active-page');

        })
        $('#page_num2').on('click', function() {
            go_to_page(11);
            $('#page_num').removeClass('active-page');
            $('#next').removeClass('active-page');
            $('#previous').removeClass('active-page');
            $(this).addClass('active-page');

        })
        $('#page_num3').on('click', function() {
            go_to_page(21);
            $('#page_num').removeClass('active-page');
            $('#page_num2').removeClass('active-page');
            $('#next').removeClass('active-page');
            $('#previous').removeClass('active-page');

            $(this).addClass('active-page');

        })
        $('#page_num4').on('click', function() {
            go_to_page(31);
            $('#page_num').removeClass('active-page');
            $('#page_num2').removeClass('active-page');
            $('#page_num3').removeClass('active-page');
            $('#next').removeClass('active-page');
            $('#previous').removeClass('active-page');
            $(this).addClass('active-page');

        })
        $('#page_num5').on('click', function() {
            go_to_page(41);
            $('#page_num').removeClass('active-page');
            $('#page_num2').removeClass('active-page');
            $('#page_num3').removeClass('active-page');
            $('#page_num4').removeClass('active-page');
            $('#next').removeClass('active-page');
            $('#previous').removeClass('active-page');
            $(this).addClass('active-page');

        })
        $('#previous').on('click', function() {
            previous();
            $('#page_num').removeClass('active-page');
            $('#page_num2').removeClass('active-page');
            $('#page_num3').removeClass('active-page');
            $('#page_num4').removeClass('active-page');
            $('#page_num5').removeClass('active-page');
            $('#next').removeClass('active-page');
            $(this).addClass('active-page');

        })
        $('#next').on('click', function() {
            next();
            $('#page_num').removeClass('active-page');
            $('#page_num2').removeClass('active-page');
            $('#page_num3').removeClass('active-page');
            $('#page_num4').removeClass('active-page');
            $('#page_num5').removeClass('active-page');
            $('#previous').removeClass('active-page');
            $(this).addClass('active-page');

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
                        msac += '<img class="media-object img-circle img-fluid rounded" src="images/msac/' + item['imageName'] + '" alt="" style="width:250px;margin:0 auto; margin-bottom:12px;"></a>';
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
            } else {
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