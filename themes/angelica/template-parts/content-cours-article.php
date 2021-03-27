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


<article>
<div class="divArticle">
	<?php /* the_post_thumbnail('thumbnail');  */?>
	<p><?php echo $tPropriété['sigle'] . " - "  . $tPropriété['typeCours']; ?> </p>
	<a href="<?php echo get_permalink()?>"><?php echo $tPropriété['titrePartiel'];?></a>
	<p> Section :<?php echo $tPropriété['session']; ?> </p>
				
</div>
</article>