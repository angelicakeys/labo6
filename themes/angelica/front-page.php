<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package angelica
 */

get_header();
?>

	<main id="primary" class="site-main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="page-title">Cours </h1> 
				<?php
				

				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			

			<!--CAROUSSEL ---------------------------------->
		
		<section class="carrousel">
			<div>1 </div>
			<div>2 </div>
			<div>3 </div>

			</section>
	
		<div class="Boutons">
			<input type="radio" id='un'>1</button> 
			<button id='deux'>2</button> 
			<button id='trois'>3</button>
		</div>
			
		<!--CAROUSSEL ---------------------------------->


			</header><!-- .page-header -->

			<section class="cours">
			<!-- <section class="sectionDiv"> -->
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			while ( have_posts() ) :
				the_post();
                $titre = get_the_title();
				//582-1W1 Mise en page Web(75h)
				$sigle = substr($titre, 0,7);
				$nbHeure = substr($title,-4,3);
				$titrePartiel = substr($titre,8,-6);

                $session = substr($titre, 4,1);
                //$contenu = (get_the_content());
               // $resume = substr($contenu, 0, 200);
				$typeCours = get_field('type_de_cours');
               
            	if($typeCours !=$precedent):
				if("XXXXXX" !=$precedent): ?>
				</section> 
				<?php endif?>
				<h2><?php echo $typeCours ?> </h2>
				<section>

				<?php endif?>

		
	
				<article>
				<p><?php echo $sigle . " . "  . $typeCours; ?> </p>
				<a href="<?php echo get_permalink()?>"><?php echo $titrePartiel;?></a>
				<p> Section :<?php echo $session ?> </p>

				</article>
				
          
			
            <?php 
			$precedent = $typeCours;
			endwhile;?>
		<!-- 	</section> -->
		
		
	</section> <!-- fin de section cours -->
		<?php endif;?>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
