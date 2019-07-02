<!doctype html>
<html>
<head>
	<title><?php echo $page_title;?> | <?php echo $this->db->get_where('settings',array('type'=>'site_name'))->row()->description;?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/global/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/thumbnail-slider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/custom.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/fontawesome/css/font-awesome.min.css">

    <script src="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/jquery-1.10.2.min.js" ></script>
    <script src="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/bootstrap.min.js" ></script>
   
    

    <style>
		.black_text{color:#000; background-color: #f3f3f3;}
		.blue_text{color: #40a9d9;}
	</style>
</head>
<?php
$bg_color = "#e9ebee";
if ($page_name == 'signup' || $page_name == 'signin' || $page_name == 'faq' ||
		$page_name == 'termsofuse' || $page_name == 'privacypolicy' || $page_name == 'refundpolicy' ||
   			$page_name == 'youraccount' || $page_name== 'billinghistory'||
   				$page_name == 'emailchange' || $page_name== 'passwordchange'||
   					$page_name == 'cancelplan' || $page_name == 'purchaseplan'||
   						$page_name == 'purchasestripe')
    $bg_color = "#f3f3f3";
?>

<body class="home-body ">
    
  <div class="galaxy"></div>
	<?php include($page_name.'.php');  ?>
  <script src="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/thumbnail-slider.js"></script>
  <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        autoplay:true,
        autoplayHoverPause:true,
        navClass:['owl-prev','owl-next'],
        navText: ["<img src='<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/left.png'>","<img src='<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/right.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
  </script>
  <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
          $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
          $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>

</body>
</html>
