<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="ManaAdb">
	<meta name="description" content="ManaAdb Adilabad first business directory that can be helpfull to every one for day to day activity. Get your business details online with ManaAdb.com and get free google listing for your Products and services.">
<meta name="keywords" content="ManaAdb Mana  City, ManaAdilabad, Telangana, ManaAdilabad Map, ManaAdilabad Pin Code, ManaAdilabad Railway Station, ManaAdilabad College, ManaAdilabad  Cement Company, ManaAdilabad Constituency, ManaAdilabad  Municipality, manaadb.com, ManaAdilabad florists, ManaAdilabad Transport, ManaAdilabad Travels, ManaAdilabad Banks, ManaAdilabad Jewellers, ManaAdilabad Doctors, ManaAdilabad Pandit, ManaAdilabad FMCG">
    <title>Mana ADB City | Adilabad | Telangana  | Adilabad Map | Adilabad Pin Code | Adilabad Railway Station | Adilabad College | Adilabad  Cement Company | Adilabad Constituency | Adilabad  Municipality | manaadb.com | florists | Transport | Travels | Banks | Jewellers | Doctors | Pandit | FMCG</title>

<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


   
    <link href="css/style.css" rel="stylesheet">


</head>

<body id="page-top">

    <?php include('header.php'); ?>

    <header class='MANA_search'>
        <div class="header-content MANA_name">
            <div class="header-content-inner">
			<h1 class='text-center'>Find the Best Local Business</h1>
			<h6 class='Mana_sm_txt'>Search by Name/PhoneNo/Category</h6>
                <div class='row MANA_search_btn'>
				
				<div class='col-lg-8 col-lg-offset-2'>
				<form action='detail.php' method='GET'>
				<input type='text' placeholder='Ex:ManaAdb or 9533710632 or Medicals' class='My_search' name='My_search' required>
				<input type='submit' class='My_submit' name='My_submit' value='Search' >			
				</form>
				</div>
				
				</div>
			</div>
			
		</div>
		
		
    </header>
<section class='MANA_result'>
 <div class='row MANA_search_result'>
				
				<div class='col-lg-4 col-lg-offset-4'>
<div class='My_list'></div>
</div>
</div>
</section>
    
<?php include('banner_advt.php'); ?>
<?php include('footer.php'); ?>





      
   <script>
   $(document).ready(function(){
	   
$(document).click(function(event){
    $('.My_list').html('');
});




$('input.My_search').blur(function()
{
    if( !$(this).val() ) {
    }
});	   
	   
   $('.My_search').keyup(function(){
	   var $myname = $(this).val();
	  
	  
   
  $.ajax({
      type: "POST",
      url: 'result.php',
      data: ({myname:$myname}),
      success: function(data) {
		 $('.My_list').html(data);
		 $('.MANA_list_items').click(function(event){
		$fetch_res = $(this).text();
		$('.My_search').val($fetch_res);
});
      },
	  error: function(error) {
  alert(error);
}
	 
    });
   
   });
   
   
   
   });
   
  
   </script>

  
</body>

</html>



