<?php
/* Template Name: Homepage*/
?>

<?php get_header(); ?>

  

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33501113-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<div id="container">
      
    <div id="face"> 
    </div> <!--fine div face-->
    
    <!--pannelli delle varie pagine-->
    
    <div class="panel" id="home">
     <div class="content" id=content_home> <h1><strong>Home - verowebdesigner - Veronica Gordini</strong></h1>
     
      <div id="scritte1"> <div class="s123" id="s1"></div> <div class="s123" id="s2"></div> <div class="s123" id="s3"></div> </div>
      
      <div id="scritte2">
      <div class="s4bio5"id="s4"></div>
       <div class="s4bio5" id="bio">Mi chiamo <strong>Veronica Gordini</strong>, risiedo a Faenza in provincia di Ravenna.<br /> Sono appassionata del <strong>web</strong>, di tutto ci&ograve; che con un  semplice 'click' ti permette di comunicare, di far sapere al mondo chi sei e cosa stai facendo in qualsiasi momento...una rivoluzione nei rapporti sociali, un nuovo modo di farsi pubblicit&agrave;... <br />...questa passione &egrave; diventata il mio lavoro...</div>
       </div> <!--fine s4-->
       <div class="s4bio5" id="s5"></div>
       
      <div id="scritte3"> <div class="s67" id="s6"></div> <div class="s67" id="s7"></div> </div>
     	
     	
     	
     </div> <!--fine div content_home-->
    </div> <!--fine div panel_home-->
    
     <div class="panel" id="cosafaccio">
     	<div class="content" id="content_cosafaccio"> <h1><strong>Cosa Faccio - verowebdesigner - Veronica Gordini</strong></h1>
        	<div class="cosaf">
            	<div class="riquadro" id="siti"><p><strong>Siti web</strong></p></div>
                <div class="riquadro" id="smart_tablet"><p><strong>App</strong><br /> <strong>per smartphone</strong> <br /><strong>e tablet</strong></p></div>
                
            </div>
             <div class="cosaf">
            	<div class="riquadro" id="tv"><p ><strong>Digital signage:</strong><br /><strong>cartellonistica</strong><br /><strong>digitale tramite</strong><br /><strong>schermi elettronici</strong></p></div>
                <div class="riquadro" id="logo_vg"><p><strong>Loghi</strong><br /><strong>grafica digitale</strong></p></div>
           
            </div>
        </div>
    </div> <!--fine div panel_cosafaccio-->
    
    
    <div class="panel" id="mieilavori">
     <div class="content" id="content_mieilavori"> <h1><strong>Miei lavori - verowebdesigner - Veronica Gordini</strong></h1>
      <ul>
      	<li><a href="http://federicaplacci.altervista.org/" id="fp" title="Sito Federica Placci - cantante - imitatrice" target="_blank"></a></li>
      </ul>
     </div>
    </div> <!--fine div panel_mieilavori-->
    
     <div class="panel" id="blog">
     	<div class="content" id="content_blog"> <h1><strong>Blog - verowebdesigner - Veronica Gordini</strong></h1>
         <!--<div id="pagina"></div>-->
         
         <?php
						$my_query = new WP_Query(array('post_type'=>'post','showposts'=>3));
						if($my_query->have_posts())
						{?>
						<h2>Ultimi articoli</h2>
                    		<ul id="lista">
							<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    		
							<li class="lista_eventi">
							 <!--<div class="entry-intro">
							 	<?php the_excerpt() ?>
							 </div>-->
							<h2> <!--<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">-->
							<?php the_title(); ?> <!--</a>--> </h2>
							<?php the_content();  ?>
							
							</li>
							<!--<?php if(function_exists('social_ring_show')){ social_ring_show();} ?>-->
							
							<?php endwhile; ?>
                    		</ul>
     						 <a href="http://localhost:8888/verowebdesigner/blog/">Tutti gli articoli</a>
						<?php
						}
						else
						{?>
						   <p class="no_eventi">Al momento non ci sono articoli</p>
						   
						 
                    		<!--<p class="par">Sezione in allestimento!</p>-->
                  <?php } ?>
        </div>
    </div> <!--fine div panel_home-->
    
    
    
    <div class="panel" id="contatti">
     <div class="content" id=content_contatti> <h1><strong>Contatti - verowebdesigner - Veronica Gordini</strong></h1>
     
     	
                  	
					<?php
						
						if($_POST['_submit_check']) // controlla se  <input type="hidden" name="_submit_check" value="1"/> vuol dire che il form è   stata 		                                                    //compilato, altrimenti mostra il form da compilare (vedere riga 18)
						{
							mail("veronica.gordini@gmail.com" ,  $_POST['object'] , $_POST['message'], "From: $_POST[nome] <$_POST[mail]>"); ?>
							
							<script>
							alert("Grazie per aver compilato il form, riceverai al piu\' presto una risposta!");
							</script>
							
						<?php	
				        }
                        ?>
						
                        
       <p>Per qualsiasi informazione potete compilare il seguente form</p>
       <p>*(campo obbligatorio)</p>
       
       <form id="modulo" method="post" action="<?=$_SERVER['PHP_SELF']?>">
       
       <ul>
       <li class="titolo">Nome: *</li>
       <li><input type="text" value="" name="nome" class="campo" id="campo1"/></li>
        
       <li class="titolo">Mail: *</li>
       <li><input type="text" value="" name="mail" class="campo" id="campo2"/></li>
          
       <input type="hidden" name="object" value="form_verowebdesigner"/> 
          
       <li class="titolo" >Messaggio: *</li>
       <li ><textarea value="" name="message" class="campo" id="t_area"></textarea></li>
            
       <li><input type="submit" value="Invia" name="submit" id="but"/></li>
       </ul>
       
        <input type="hidden" name="_submit_check" value="1"/> 
      
      	</form>
     	
     </div> <!--fine div content_contatti-->
    </div> <!--fine div panel_contatti-->
    
    
   
    <!--fine pannelli delle varie pagine-->
    
    <div id="footer">
   
     <div id="mail_social_link">
     
      <div id="mymail">
      	<div id="buca">
          <p>e-mail:</p>
          	<a  href="mailto:veronica.gordini@gmail.com" title="mandami una mail">veronica.gordini@gmail.com</a>
        </div>
      </div>
      
      <div id="mysocial">
      	<ul>
         <li> <a href="http://www.facebook.com/veronica.gordini" title="chiedimi l'amicizia su Facebook - Veronica Gordini" id="fb" target="_blank"></a> </li>
         <li> <a href="https://twitter.com/#!/" title="seguimi su twitter - Veronica Gordini" id ="tw" target="_blank"> </a> </li>
        </ul>
      	
      </div>
      
      <div id="mylink">
      	<div id="cartello">
       <p>Links:</p>
       <ul>
       	<li><a href="http://mircowebdesign.altervista.org/" target="_blank">Mirco Brasini</a></li>
        <li><a href="http://iofuoridalmondo.altervista.org/" target="_blank">Fuori dal mondo</a></li>
       </ul>
       </div>
      </div>
     	
     </div><!--fine mail_social_link-->
     
      <div id="social" >
         <div id="like" class="analisi">
         <span class='st_fblike_hcount' displayText='Facebook Like' title="Clicca se ti piace"></span>
      	 </div>
         
        <div id="share" class="analisi">
    	<span class='st_facebook_hcount' displayText='Facebook' title="condividi su Facebook"></span>
		<span class='st_twitter_hcount' displayText='Tweet' title="condividi su Tweet"></span>
		<span class='st_linkedin_hcount' displayText='LinkedIn' title="condividi su LinkedIn"></span>
		<span class='st_googleplus_hcount' displayText='Google +' title="condividi su Google +"></span>
    	</div> <!--fine share-->
        
      
        
   	</div> <!--fine social-->
    </div><!--fine footer-->
    
</div> <!--fine div container-->




