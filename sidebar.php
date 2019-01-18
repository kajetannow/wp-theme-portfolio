<nav>
    <button id="closeMenu">ukryj</button>
				<ul id="sidemenu">				
				<?php wp_list_categories('title_li='); ?>
				</ul>
				<ul id=bottommenu>
				<li><a href="<?php bloginfo('url'); ?>/o-mnie/">o&nbsp;mnie</a></li>
				<li><a href="<?php bloginfo('url'); ?>/contact/">kontakt</a></li>
				</ul>
			</nav>