<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="fpbx-container">
				<div class="display no-border">
					<div class="container-fluid">
						<div class="section-title" data-for="asteriskcli">
							<h3><?php echo _("Queue Statistics") ?></h3>
						</div>
						<div class="row">
							<object type="text/html" data="http://192.168.1.20:8081/qpanel/" width="100%" height="600px">
							</object>
	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
