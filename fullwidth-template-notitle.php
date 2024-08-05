<?php
/*
Template Name: Full Width Page No Title
*/
?>
<?php
$fwpagewidth = get_option('flex_blog_width') - 5;
$fwcontentwidth = get_option('flex_blog_width') - 10;
?>
<?php get_header(); ?>


 





<div id="content" style="width:<?php echo $fwpagewidth; ?>px;">

  <div class="postwrap" style="width:<?php echo $fwcontentwidth; ?>px;">
     
    <div class="post"> <div class="postcontent">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <?php the_content("<p>__('Read the rest of this page')</p>"); ?>
      <?php edit_post_link(__('Edit'), '<p>', '</p>'); ?>
	  <?php wp_link_pages('before=<div id="page-links"><p style="text-align:right"><strong>Pages:</strong>&after=</p></div>'); ?>
      <?php endwhile; endif; ?>
    </div>
	  
	  
	  
	  
	  
	  
	  
	   
	  <style>
.social-icons a {
    text-decoration: none;
    color: orange;
    margin-right: 12px;
    padding: 0px;
    font-size: 27px;
}
		  .social-icons-follow {
    display: flex;
    justify-content: center;
}
		 .follow {
    position: relative;
    top: 10px;
    left: -8px;
    font-weight: bold;
    font-size: 17px;
}
		  i.fab.fa-facebook {
    color: #1877f2 !important;
}
		  i.fa-brands.fa-x-twitter {
    color: black;
}
		  i.fab.fa-linkedin-in {
    color: #0a66c2;
}
		  i.fab.fa-pinterest {
    color: #e60023;
}
		  .social-icons__icons i {
    font-size: 33px;
    margin-right: 4px;
    position: relative;
    top: 3px;
}
		  .social-icons__icons a {
    margin-right: 12px;
}
		 .social-icons__icons span {
    color: black !important;
    font-size: 18px;
    position: relative;
    top: -1px 
 
}
		  .social-icons__icons a {
    text-decoration: none !important;
}
		  i.fab.fa-instagram {
    color: #c38615 !IMPORTANT;
}
		   .social-icons__icons img {
    max-width: 90px;
    max-height: 50px;
}
</style>
 
		
		
 <div class="social-icons-follow" style="margin-bottom: 23px;margin-top: 23px;">
		
		<div class="follow" style="
    position: relative;
    top: 19px;
">As seen on :</div>		
  <div class="social-icons__icons">
     
  <a class="slink" href="https://markets.businessinsider.com/news/stocks/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched-1033143000">
	<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/business-insider-logo.png">
  </a>
  <a class="slink" href="https://www.benzinga.com/pressreleases/24/03/37602969/gold-ira-retirement-investing-2024-goldco-augusta-comparison-guide-launched">
  <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/bz-logo-star-wars-day.gif" style="position: relative;top: -9px;">
  </a>
 
 
  <a class="slink" href="https://www.theglobeandmail.com/investing/markets/markets-news/Plentisoft/25463710/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched/">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/the-globe-and-mail-coupons-1.png" style="max-width: 180px;position: relative;top: -3px;">
  </a>
 
  <a class="slink" href="https://www.barchart.com/story/news/25463707/2024-top-gold-ira-companies-for-first-time-investors-retirement-guide-launched">
<img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/barchart-logo.png" style="position: relative;top: -3px;">
  </a>
 
  <a class="slink" href="https://medium.com/@jim.garner78/why-you-need-precious-metals-as-part-of-a-diversified-investment-portfolio-902086c5a370">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/medium-1.png" style="width: 125px;max-width: 125px;"></a><a class="slink" href="https://apnews.com/press-release/marketersmedia/houston-augusta-c4d7184e991ac0779da2d31f0828e6f2">
   <img src="https://goldiracompaniescompared.com/wp-content/uploads/2024/05/aplogo.jpg">
  </a>
 
   

 
 
</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
    <div class="social-icons-follow">
		
		<div class="follow">Follow Us:</div>		
  <div class="social-icons__icons">
     
     <a class="slink"  href="https://www.facebook.com/goldiracompaniesbulletin">
		 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style=" fill: #1877f2 !important;  width: 33px; top: 7px;  position: relative; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path></svg> <span>Facebook</span>
  </a>
  <a class="slink" href="https://twitter.com/goldbulletin_">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="top: 7px;width: 33px;position: relative;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg><span>x (Twitter)</span>
  </a>
 
 
  <a class="slink"  href="https://www.instagram.com/goldiracompaniesbulletin">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style=" width: 29px; top: 7px; position: relative; fill: #C3861E;   margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><span>Instgram</span>
  </a>
 
  <a class="slink"  href="https://www.linkedin.com/company/goldiracompaniesbulletin">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: #0a66c2 !IMPORTANT;width: 28px;position: relative;top: 7px;margin-right: 4px;"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"></path></svg><span>LinkedIn</span>
  </a>
 
  <a class="slink"  href="https://www.pinterest.com/goldiracompaniesbulletin/">
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" style="top: 7px; fill: #e60023 !important; width: 33px; position: relative; margin-right: 4px; "><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3 .8-3.4 5-20.3 6.9-28.1 .6-2.5 .3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"></path></svg><span>Pinterest</span>
  </a>
 
   

 
 
</div>
</div>
	  
	  
	  
	  
	  
	  
	  
	  </div>
	<?php if (get_option('flex_metadata_show') == "yes") { ?>
    <?php if(comments_open()) : ?>
    <?php comments_template('', true); ?>
    <?php endif; ?>
	<?php } ?>
  </div>
</div>
<?php get_footer(); ?>

