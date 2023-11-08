$(document).ready(function() {
        $('.page_link').on('click', function() {
            var pageNumber = $(this).data('page');
            // Remove 'active-page' class from all elements with class 'page_link'
            $('.page_link').removeClass('active-page');

            // Handle page-specific logic
            go_to_page(pageNumber);

            // Handle 'next' and 'previous' elements if needed
            $('#next, #previous').removeClass('active-page');
            $(this).addClass('active-page');
        });

        $('#previous').on('click', function() {
            previous();
            $('.page_link').removeClass('active-page');
            $('#next').removeClass('active-page');
            $(this).addClass('active-page');
        });

        $('#next').on('click', function() {
            next();
            $('.page_link').removeClass('active-page');
            $('#previous').removeClass('active-page');
            $(this).addClass('active-page');
        });


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