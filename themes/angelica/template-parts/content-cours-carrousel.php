<?php
/**
 * Template part pour afficher les blocs de front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package angelica
 */


global $tPropriété;

?>







<article class="slide__conteneur">
			<!-- <div class="divArticle"> POUR HOVER-->
			<div class="slide"> <!-- class SLIDE -->
				
			<?php the_post_thumbnail('thumbnail'); ?>
			<div class="slide__info">
			    <p><?php echo $tPropriété['sigle'] . " - "  . $tPropriété['typeCours']; ?> </p>
	            <a href="<?php echo get_permalink()?>"><?php echo $tPropriété['titrePartiel'];?></a>
	            <p> Section :<?php echo $tPropriété['session']; ?> </p>
				

			</div> <!-- class SLIDE -->
			</div> <!-- class INFO -->
			<!-- </div> -->
		</article>