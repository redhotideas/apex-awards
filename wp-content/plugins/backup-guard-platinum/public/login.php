<?php
require_once(dirname(__FILE__).'/boot.php');
require_once(SG_PUBLIC_INCLUDE_PATH.'header-new.php');
?>
<div class="bg-content bg-content-full-width bg-content-dark1">
	<div class="bg-login-container">
		<p class="bg-text-left">
			<img width="180px" class="sg-login-logo" src="<?php echo SG_PUBLIC_URL; ?>img/logo-horizontal.png">
		</p>
		<div class="bg-login-content">
			<h1><?php _backupGuardT('Login to your account')?></h1>
			<p id="bg-login-error" class="bg-text-danger"><?php _backupGuardT('Invalid login info. Please try again.')?></p>
			<p>
				<label for="email">Email*</label>
				<input id="email" class="bg-form-control" type="text" placeholder="Email" autofocus>
			</p>
			<p>
				<label for="password">Password*</label>
				<input id="password" class="bg-form-control" type="password" placeholder="Password">
			</p>
			<p class="bg-pull-left sg-wrapper-less sg-button-wrapper">
				<span class="bg-tooltip">
					<?php _backupGuardT('How do I get this?')?>
					<span class="bg-tooltiptext">
						<?php _backupGuardT('The credentials were sent to your email.') ?>
						<?php _backupGuardT("In case if you didn't receive them, please contact us.")?>
					</span>
				</span>
				<button id="bg-login-btn" class="btn btn-success bg-pull-right"><?php _backupGuardT('Login')?></button>
			</p>
		</div>
	</div>
</div>
<?php
require_once(SG_PUBLIC_INCLUDE_PATH.'footer-new.php');
?>
