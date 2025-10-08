<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
			    <?= $message ?>
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			</div>

		</div>
	</div>
</div>

  