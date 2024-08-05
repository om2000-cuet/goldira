<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<?php
 $options = get_option('goldira_sidebar_settings');
$sidebarTextColor = esc_attr($options['goldira_sidebar_text_color']);
$sidebarLinkColor = esc_attr($options['goldira_sidebar_link_color']);
$sidebarLinkHoverColor = esc_attr($options['goldira_sidebar_link_hover_color']);
$sidebarBorderColor = esc_attr($options['goldira_sidebar_border_color']);
$sidebarFont =  esc_attr($options['goldira_sidebar_topfont']);
$sidebarFontSize = esc_attr($options['goldira_sidebar_topfont_size']) ;
$sidebarTitleFontColor = esc_attr($options['goldira_sidebar_title_font_color']) ;
$sidebarTitleBackgroundColor = esc_attr($options['goldira_sidebar_title_background_color']) ;
 
?>
<style>

	
	 h2.widget-title{
		color:<?php echo $sidebarTitleFontColor;?>;
		  font-family:<?php echo $sidebarFont;?> ;
		 font-size:<?php echo $sidebarFontSize;?>px;
    letter-spacing: 0px;
    text-align: center;
		 background-color:<?php echo $sidebarTitleBackgroundColor;?>;
	}
#sidebar .widget {
    border: solid 3px #664F03;
	border-color:<?php echo $sidebarBorderColor;?>;
    padding: 6px;
    margin-bottom: 24px;
	
}
	#sidebar {
		color:<?php echo $sidebarTextColor;?>;
	}
	#sidebar a{
		color:<?php echo $sidebarLinkColor;?>;
	}
	#sidebar a:hover{
		color:<?php echo $sidebarLinkHoverColor;?>;
		cursor:pointer;
	}
	.advanced_text p {
    padding-left: 15px;
}
</style>	


<style>
</style>	

	 
		<div id="sidebar" class="widget-area" role="complementary">
			<?php 
			$page_id = get_the_ID();
			$value = get_field( "select_which_widget_to_show", $page_id );
			//echo "value".$value[0];
			$value=$value[0];
		 
			if($value){ 


			dynamic_sidebar( $value ); 
			}else{
				dynamic_sidebar( 'sidebar-1' ); 

			}
			
			?>
		</div><!-- #secondary -->
	 
