<?php
$pageTitle = "UFBH Events";
$section = "events";
include('inc/header.php'); ?>

<script type="text/javascript">
    
    $(function(){  
        $('#datepicker').datepicker({  
            inline: true,  
            showOtherMonths: true,  
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],  
        });  
    }); 
</script>

    <div class="section events">
        <div class="wrapper">
            <h1>Event Calendar</h1>
            <div id="datepicker">
            </div>
        </div>
    </div>

<?php include('inc/footer.php') ?>