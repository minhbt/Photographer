<?php
// $Id: views-slideshow-ddblock-cycle-pager-content-fever.tpl.php,v 1.3 2010/12/17 01:02:48 antsin Exp $

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

$settings = $views_slideshow_ddblock_pager_settings;
?>

<div id="views-slideshow-ddblock-custom-pager-<?php print $settings['delta'] ?>" class="showcase-pager">
  <?php if ($views_slideshow_ddblock_pager_items): ?>
    <?php foreach ($views_slideshow_ddblock_pager_items as $pager_item): ?>
      <div class="<?php print $settings['pager'] ?>-item">
        <a href="#" class="pager-link"><?php print $pager_item['image'];?><span class="slide-title"><?php print $pager_item['slide_title']; ?></span><br/><?php print $pager_item['text']; ?></a>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<div class="showcase-navigator">
 <a class="prev" href="#"></a>
 <a class="next" href="#"></a>
</div>