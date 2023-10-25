<style>
    .btn {
        font-family: Poppins, Helvetica, "sans-serif" !important;
    }

    .tab {
        float: left;
        width: 100%;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 1rem;
        width: 100%;
        border: none;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        text-align: left;
    }

    .tablinks.active {
        background-color: #243866 !important;
        color: #fff;
        border-radius: 5px;

    }

    .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 100%;
        border-left: none;
        height: 100%;
        display: none;
        text-align: center;
    }
</style>
<div class="container-fluid">
    <div class="row" style="padding: 100px;">
        <div class="col-lg-2">
            <?php include 'panel/side_panel.php'; ?>
        </div>
        <div class="col-lg-8">
            <?php include 'panel/tab_panel.php'; ?>
        </div>
        <div class="col-lg-2 text-white aos-init" style="margin-top: 20px;">
            <?php include 'panel/right_panel.php'; ?>
        </div>
    </div>
</div>
<div id="fb-root">

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#knowledge_products_table').DataTable({
            "paging": true, // Enable pagination
            "pageLength": 6, // Set the number of records per page to 5
            "searching": true,
            "lengthChange": false,
            'dom': 'lrtip',
            'bFilter':true,
            searchable: true



        });

    })
    $('.tablinks').on('click', function() {
        $('.tablinks').removeClass('active');
        $(this).addClass('active');
    });
    $('#addParameterButton').click(function() {
        // Current URL
        var currentUrl = window.location.href;

        // Parameter to add
        var parameterName = 'exampleParam';
        var parameterValue = 'exampleValue';

        // Check if the URL already has parameters
        var separator = currentUrl.indexOf('?') === -1 ? '?' : '&';

        // Construct the new URL with the parameter
        var newUrl = currentUrl + separator + parameterName + '=' + parameterValue;

        // Navigate to the new URL
        window.location.href = newUrl;
    });

    function selectTab(tabIndex) {

        // Declare all variables
        var i, tabcontent;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        //Show the Selected Tab
        document.getElementById(tabIndex).style.display = "block";



    }
</script>