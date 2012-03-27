<?php
// $Id: views-slideshow-ddblock-cycle-block-content-fever.tpl.php,v 1.3 2010/12/17 01:02:48 antsin Exp $

/*
+----------------------------------------------------------------+
|   Fever for Dupal 6.x - Version 1.0                            |
|   Copyright (C) 2010 Antsin.com All Rights Reserved.           |
|   @license - GNU GENERAL PUBLIC LICENSE                        |
|----------------------------------------------------------------|
|   Theme Name: Fever                                            |
|   Description: Fever by Antsin                                 |
|   Author: Antsin.com                                           |
|   Date: 5th August 2010                                        |
|   Website: http://www.antsin.com/                              |
|----------------------------------------------------------------+
*
* This file incorporates work covered by the following copyright and permission notice
*
* Dynamic display block module template: vsd-upright60 - content template
* Copyright (c) 2008 - 2009 P. Blaauw All rights reserved.
* Version 1.1 (01-SEP-2009)
* Licenced under GPL license
* http://www.gnu.org/licenses/gpl.html
*/

$settings = $views_slideshow_ddblock_slider_settings;
drupal_add_css($directory .'/custom/modules/views_slideshow_ddblock/fever/fever.css', 'template', 'all', FALSE);
?>

<div id="views-slideshow-ddblock-<?php print $settings['delta'] ?>" class="showcase-container">
  <div class="slider">
    <?php if ($settings['output_type'] == 'view_fields') : ?>
      <?php foreach ($views_slideshow_ddblock_slider_items as $slider_item): ?>
        <div class="slide">
          <?php print $slider_item['slide_image']; ?>
          <div class="slide-text slide-text-bottom">
            <h2><?php print $slider_item['slide_title'] ?></h2>
            <p><?php print strip_tags($slider_item['slide_text'], '<a>');?><span class="read-more"><?php print $slider_item['slide_read_more'] ?></span></p>
          </div> 
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
  <!-- showcase pager --> 
  <?php print $views_slideshow_ddblock_pager_content ?>
</div> 