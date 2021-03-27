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
		
		<!-- <section class="carrousel-2"> -->

		<!-- ARTICLE 1 ---------------------------------->
		<!-- <article class="slide__conteneur"> -->
			<!-- <div class="divArticle"> POUR HOVER-->
		


		<!-- ARTICLE 2 ---------------------------------->
	


		<!-- ARTICLE 3 ---------------------------------->
	
			

		<!-- </section> -->
	<!------ BOUTONS ---------------------------------->
		
			
		<!--CAROUSSEL ---------------------------------->


			</header><!-- .page-header -->

			<section class="cours">
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			$chaine_bouton_radio = '';
			while ( have_posts() ) :
				the_post();
				//582-1W1 Mise en page Web(75h)
               
               convertir_tableau($tPropriété);
            	if($tPropriété['typeCours'] != $precedent): 
				 if("XXXXXX" != $precedent): ?>
				</section>
					<?php if($precedent = "Web") : ?>
				<section class="ctrl-carroussel">
					<?php echo $chaine_bouton_radio; ?>
				 </section>
				 <?php endif;?>

				<?php endif;?>
				<h2><?php echo $tPropriété['typeCours'] ?> </h2>

			<section <?php echo ($tPropriété['typeCours']=='Web'? 'class="carrousel-2"' :''); ?>>
			<?php endif?>

			<?php if($tPropriété['typeCours']== "Web"):
            
			get_template_part( 'template-parts/content', 'cours-carrousel' );
			$chaine_bouton_radio .= '<input class="rad-caroussel" type="radio" name="rad-caroussel">';
			else :
			get_template_part( 'template-parts/content', 'cours-article' );

			endif;
			$precedent = $tPropriété['typeCours'];
			endwhile;?>
		<!-- 	</section> -->
		
		
	</section> <!-- fin de section cours -->
	
	<!-- AJOUT DEUXIEME BOUCLE REPETITION DES ARTICLES -->
	
	<!-- AJOUT DEUXIEME BOUCLE REPETITION DES ARTICLES -->
		<?php endif;?>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertir_tableau(&$tPropriété){
	$titre = get_the_title();

	$tPropriété['titre'] = get_the_title();
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0,7);
	//$tPropriété['nbHeure'] = substr($title,-4,3);
	$tPropriété ['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}
