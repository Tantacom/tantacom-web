<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $confirmation_message: The confirmation message input by the webform author.
 * - $sid: The unique submission ID of this submission.
 */
?>

<section class="contacto">
	<p>Hemos recibido tu solicitud de información, en breve contactaremos contigo. Muchas gracias</p>
    <span class="back"><a href="<?php print url('node/'. $node->nid) ?>">Volver al formulario</a></span>
</section>
