<?php
/**
 * Created by PhpStorm.
 * User: umberto
 * Date: 27/07/2018
 * Time: 10:41
 */

use UdeslyCustomizer\i18n\i18n;

?>
<div class="wrap">
    <div class="wrap cdg-woo-kit-custom-meta-box" id="udesly_contentmanager_settings">
        <h1><?php _e('Customizer', i18n::$textdomain); ?></h1>
        <form method="post" action="">
			<?php
			if (count($tabs->get_tabs()) > 0){
			    $tabs->show_tabs();
            } else {
			    ?>
				<p><?php _e('No compatible plugins found, you can use the customizer with the following plugins:', i18n::$textdomain) ?></p>
                <ul>
                    <li><a href="https://woocommerce.com/" target="_blank">WooCommerce</a></li>
                    <li><a href="https://easydigitaldownloads.com/" target="_blank">Easy digital Downloads</a></li>
                    <li><a href="https://restrictcontentpro.com/" target="_blank">Restrict Content Pro</a></li>
                </ul>
            <?php
            }
			?>
			<?php
			if (count($tabs->get_tabs()) > 0){
                submit_button( __('Save', i18n::$textdomain) );
            }
			?>
        </form>
    </div>
</div>
