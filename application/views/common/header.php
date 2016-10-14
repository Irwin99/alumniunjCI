<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alumni UNJ</title>
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Vollkorn|Roboto+Condensed')?>" rel="stylesheet">
    <!-- Bootstrap -->
   <link href="<?php echo base_url('asset/asset_index/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/asset_index/default.css')?>" type="text/css" rel="stylesheet">
   <!-- Font Awesome -->
    <link href="<?php echo base_url('asset/asset_index/fa/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- jVectorMap -->
    <link href="<?php echo base_url('asset/asset_index/css/maps/jquery-jvectormap-2.0.3.css')?>" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script> 