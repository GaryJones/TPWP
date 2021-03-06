<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content.
 *
 * @package WordPress
 * @subpackage Theme
 * @since 1.0
 */
?>
<?php $t =& peTheme(); ?>
<?php $layout =& $t->layout; ?>

<?php do_action("pe_theme_before_footer"); ?>
	<div class="footer2" id="footer">
		<section class="foot-lower">
			<div class="pe-container">
				<div class="row-fluid">
					<div class="logo-foot">
						<a href="<?php echo home_url(); ?>">
							<?php $t->image->retina($t->options->get("footerLogo")); ?>
						</a>
					</div>
				</div>
				<div class="row-fluid ">
					<div class="span12 copyright">
						<?php echo $t->options->get("footerCopyright"); ?>
					</div>
				</div>
				<div class="row-fluid">
					<div class="social-media-wrap">
						<div class="social-media">
							<?php $t->content->socialLinks($t->options->get("footerSocialLinks"),"bottom"); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php


$t->footer->wp_footer(); ?>
<script>
<?php $menu_switch = get_post_meta( '642', 'menu_switch', false );
if(ICL_LANGUAGE_CODE == 'en'){
?>
var lang="";
<?php
} else{ ?>
	var lang="?lang=en";
<?php
}
// check if the custom field has a value
if( ! empty( $menu_switch ) ) {
  ?>
  var associativeArray = {};
<?php foreach ($menu_switch as $key) {
	$keyTemp=$key;
	$arrayTemp=explode(',',$keyTemp);
	$value=$arrayTemp[1];
	$key=$arrayTemp[0];

	?>
	if(lang=="")
		
		associativeArray['<?=$value?>'] = '<?=$key?>';
	else
		associativeArray['<?=$key?>'] = '<?=$value?>';
	<?php
}
?>

<?php
} ?>

/*function updateURLParameter(url, param, paramVal)
{
	
    var TheAnchor = null;
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var tmpAnchor = url.split("#");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";


    if (additionalURL) 
    {

        var tmpAnchor = additionalURL.split("#");
        var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];

		if(TheAnchor!="#!"){
            additionalURL = TheParams;
        }else{
 			 additionalURL = TheParams+TheAnchor;
        }


        tempArray = additionalURL.split("&");

        for (i=0; i<tempArray.length; i++)
        {
            if(tempArray[i].split('=')[0] != param)
            {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }        
    }
    else
    {


        var tmpAnchor = baseURL.split("#");
        var TheParams = tmpAnchor[0];
            TheAnchor  = tmpAnchor[1];


        if(TheParams)
            baseURL = TheParams;
    }

    var rows_txt="";
    if(paramVal != ""){
    rows_txt ="#" +  paramVal;
		}
    return baseURL + lang  + rows_txt;
}
*/
(function ($) {

$("#switch_languefr").click(function(){

	var url = document.URL;
	var TheAnchor= url;
	
	var tempArray = url.split("?");
	if(tempArray[1]!==undefined){

		var TheAnchorEmpty = tempArray[0];
	}
		
	else{

		 var tmpAnchor = url.split("#");
     	 var TheAnchorEmpty  = tmpAnchor[0];
	}
		
	/*if(tempArray[1]!="")
	var tmpAnchor = url.split("#");
	else
	 var tmpAnchor = baseURL.split("#");

      var TheAnchor  = tmpAnchor[1];
     
     
     
       if(TheAnchor.substring(0,11)=='!/?project='){
		TheAnchor = "projets";
		 if(tempArray[1].substring(0,7)=='lang=en' ){
				TheAnchor = "projects";
     	 }
      }
      */

       if(TheAnchor!==undefined){
			 var TheNewAnchor=associativeArray[TheAnchor];

			if(TheNewAnchor===undefined){
				TheNewAnchor="";
			}
		}else{
			TheNewAnchor="";
			TheAnchor="";
		}
if( TheNewAnchor==""){

	var newURL =TheAnchorEmpty;
}else{
	/*if(TheAnchor == "projets" || TheAnchor == "projects"){
		if(TheAnchor == "projets"){
			var newURL =tmpAnchor[0]+lang+"#" +TheNewAnchor;
		}	
		else{
				var newURL =baseURL+"#" +TheNewAnchor;
		}
			
	}
		
		else{
			var newURL = updateURLParameter(window.location.href, TheAnchor, TheNewAnchor);
		}*/
		
	var newURL = TheNewAnchor;
}
	
	$("#switch_languefr").attr("href",newURL);
})


 })(jQuery);



  </SCRIPT>
   
</body>
</html>