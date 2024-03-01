<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */

?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination justify-content-center">
		

		
			<li  class="page-item">
				<div class="text-center">
				<a onclick="nextPage()" id="next" class="page-link" href="#" aria-label="<?= lang('Pager.next') ?>">
					<span aria-hidden="true"><?= lang('Pager.next') ?></span>
				</a>
				</div>
			</li>
			
		
	</ul>
</nav>
