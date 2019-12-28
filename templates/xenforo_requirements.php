<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>XenForo 2 system requirements test</title>

	<style>
		html
		{
			background: #EEEEEE;
			font: 15px / 1.4 sans-serif;
			font-family: 'Segoe UI', 'Helvetica Neue', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', sans-serif;
			color: #141414;
			margin: 0;
			padding: 0;
			word-wrap: break-word;
		}

		body
		{
			overflow-y: scroll !important;
			margin: 0;
		}

		.p-pageWrapper
		{
			position: relative;
			display: flex;
			flex-direction: column;
			min-height: 100vh;
		}

		.p-header
		{
			color: #BCDEF5;
			background: #185886;
		}

		.p-header-inner
		{
			max-width: 1200px;
			padding: 0 10px;
			margin: 0 auto;
		}

		.p-header-content
		{
			padding: 6px 0;

			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			max-width: 100%;
		}

		.p-header-logo
		{
			vertical-align: middle;
			margin-right: auto;
		}

		.p-header-logo.p-header-logo--image img
		{
			vertical-align: bottom;
			max-width: 100%;
			max-height: 200px;
		}

		.p-body
		{
			display: flex;
			align-items: stretch;
		}

		.p-body-inner
		{
			display: flex;
			flex-direction: column;
			width: 100%;
		}

		html .p-body-main
		{
			margin-bottom: auto
		}

		.p-body
		{
			flex-grow: 1;
		}

		.p-body-inner
		{
			max-width: 1200px;
			padding: 0 10px;
			margin: 0 auto;
			padding-top: 10px;
			padding-bottom: 20px;
		}

		.p-body-inner::before,
		.p-body-inner::after
		{
			content: " ";
			display: table;
		}

		.p-body-inner::after
		{
			clear: both;
		}

		.p-body-main
		{
			display: table;
			table-layout: fixed;
			width: 100%;
			margin-top: 10px;
		}

		.p-body-content
		{
			display: table-cell;
			vertical-align: top;
		}

		.p-body-content > *:first-child
		{
			margin-top: 0;
		}

		.p-body-content > *:last-child
		{
			margin-bottom: 0;
		}

		.p-title
		{
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			max-width: 100%;
		}

		.p-title-value
		{
			padding: 0;
			margin: 0;
			font-size: 24px;
			font-weight: 400;
			min-width: 0;
		}

		.blockMessage
		{
			margin: 20px 0;
			padding: 6px 10px;
			color: #141414;
			background: #FEFEFE;

			border-width: 1px;
			border-style: solid;
			border-top-color: #e4e4e4;
			border-right-color: #dcdcdc;
			border-bottom-color: #d2d2d2;
			border-left-color: #dcdcdc;
			border-radius: 4px;
		}

		.blockMessage.blockMessage--success
		{
			border-left: 3px solid #63b265;
			background: #daf3d8;
			color: #3d793f;
		}

		.blockMessage.blockMessage--error
		{
			border-left: 3px solid #c84448;
			background: #fde9e9;
			color: #c84448;
		}

		.blockMessage > *:last-child
		{
			margin-bottom: 0;
		}

		.p-footer
		{
			font-size: 13px;
			color: #bcdef5;
			background: #0f3652;
		}

		.p-footer-inner
		{
			max-width: 1200px;
			padding: 0 10px;
			margin: 0 auto;
			padding-top: 6px;
			padding-bottom: 10px;
		}

		.p-footer-copyright
		{
			margin-top: 20px;
			text-align: center;
			font-size: 11px;
		}

		.u-concealed
		{
			text-decoration: inherit !important;
			color: inherit !important;
		}
	</style>
</head>
<body>
<div class="p-pageWrapper">
	<header class="p-header">
		<div class="p-header-inner">
			<div class="p-header-content">
				<div class="p-header-logo p-header-logo--image">
					<a href="https://xenforo.com" target="_blank">
						<img alt="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAAkCAMAAAB19g5sAAADAFBMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAQEEBQUYGhtbZ26fssCvx9ikyeWkyeWkyeWlyuWlyuWlyuWkyuWkyuWkyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWmy+Wmy+WnzOany+aly+Wly+Wmy+Wrzuepzeau0Oi50OGu0Oix0um71OWz0+q51+u72e282Ou82Oy+2Oq72Oy92e3A2+7B2+7C3O7H4PHG3+/K4fDK4fDL4fHK4fHP5PLU5/PT5vPZ6vXa6/bf7fbd7vjg7ffi7/jl8Pjn8vnn8vnp8/rr9Prp9Pvv9vvt9vzz+Pzw9/vy+Pzw9/vy+Pzx+P30+f31+v32+v30+v70+fz7/f75/f/8/v/////////////////////////////////////////////////////////////////////+///////+///+///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9/v+lyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuWlyuVHrxx9AAAA43RSTlMAAAAAAAAAAAAAAAAAAAAAAQMDQ0ZLNTk7P1FVW15hY2ZpbHJ1e36Ch4uUmJygo6eryc3O0dXY3N/i5ebp7e/z9vj8/f7+/fz8+/r49/b19PLx8O/u7evpxccvMTOsrsCpvgSkMATttTEGBwWQ7x4fCDIhqgobfRqjJCdpDDL4GJoNESkXVg8yExQWlC4xLzCRS/2OR0VMinp0X36FcFlcZG2HeFJpZouBRUVFdohQVkj+/v39/Pv6+fj39vX08/Lw7u3q6eXi39vZ1tLNycfEwsC/v768ure1srGurKekoZ+gn8FE2hEAAAObSURBVFjD7ZbPTxNBFMc9zR8w0FJ+FKwFYpXGNSYSfwflohd/xBgynnvq1YsJhJCGTbPBLoZEpRERhLZJayES1Ij4A0jAoqIN0WpNqHl/yHNmd7YsSstJTEzfpW92pvOZN+/73u4e8o9sTwVcAVfAwlIFm2m7CH4PNgvtIjgLK+OW3Q/vKvjHv8lxFr7/B2DqrK4xPVbtonxc2+j1euqYMeeqouS62+ttrNkWHNBHx4bHRvUg97uTSRJ++Dg+Zqo9NDE5PBKb5kK40XO7u2c7sBvRZXA7sJWQuqNomsLR9DS6FHPYxf4EJ1elwDNpQjSYjy6KwZLOBz9mzZmF+wHS09/fv+1V+/EIj5QoqFDiPItdrU1uj+84HqaEHu9oR8Xr3uu7gl1UgPM2rvYKMolYNJZYhWcDRJubf555mJxag7UgycPLwlg0OpwHSJHe3p6b24LpMWwmpAFPMnEIRd77FawRM+cdxtDRecEAryUti5ARyKjGpLoK40SbhxXVOM7zsPYM7pjb3IV33aXF5cBLjJ7ABn6Go1gvH3bx09BreEAe7gxWEfLR1j82yFcoyLUJyBLtCUwKv3sRtCgsSZwOT0NlVN3GM3pWhMqTyuSzvYqbUL9yXYLbFA4ez31dl5Z9QOK5CSvZuUGi5nMDRvj5dXUiF7fS8QJulQHTdmyoFUR2Ad21pjmdjFDmpHKF4YV0e4OO6Kr0VD0SDOp6XzH7uhVm+A1Ml6tjB140ImXncNMOiat2FnXAI16D3OZ/gstgRZyG16o2AxFrqlBcpy7AVDlwGxqq5eDOA62WObiqi+B2Af5sL6fgCqSlewcW1PCLTfBgcd0O4Ho8dQxbjKvuZPYU/AbeUseBTHHPNBeTNrcJHipGHH5b7qrZSWx0YYfZMZwWlNHyYPLBlDG3UXgXsIMT8MnK9lw5cSmieNtEGxEqkw99HQd3AH+DIesDAb4QOzgGy0EpQJgpXU5NeJkZ17pfnkHWsW8H8D14HzC9j/wIdnBk5omM8xEs95UCs8u4T/zWId+7mjfphipXVb0fsXYH8MAsZKO8h0XXAfQtYL5w6dF0MpkeegqPS72d2BFT0IQcwmuMeE/JYrrq5TjRN03wCQH+wK/UZqNLsostToqXBKdbFrJ63OzPvlJgZ0uzFDJrbuEe8/j8fr/PIx5ST7PVQJqEN5VKb9kkFIsXNgrxmEijOpKydRc1nShsbAymkpXv6gq4Av579gudxFkmYP4c/AAAAABJRU5ErkJggg==">
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="p-body">
		<div class="p-body-inner">
			<div class="p-title ">
				<h1 class="p-title-value">XenForo 2 system requirements test</h1>
			</div>
			<div class="p-body-main">
				<div class="p-body-content">
					<?php

					$errors = array();
					$warnings = array();

					$phpVersion = phpversion();
					if (version_compare($phpVersion, '5.6.0', '<'))
					{
						$errors['phpVersion'] = 'PHP 5.6.0 or newer is required. ' . $phpVersion . ' does not meet this requirement. Please ask your host to upgrade PHP.';
					}

					if (!function_exists('mysqli_connect'))
					{
						$errors['mysqlPhp'] = 'The required PHP extension MySQLi could not be found. Please ask your host to install this extension.';
					}

					if (!function_exists('iconv'))
					{
						$errors['iconv'] = 'The required PHP extension Iconv could not be found. Please ask your host to install this extension.';
					}

					if (!function_exists('ctype_alnum'))
					{
						$errors['ctype'] = 'The required PHP extension Ctype could not be found. Please ask your host to install this extension.';
					}

					if (!function_exists('fpassthru'))
					{
						$errors['fpassthru'] = 'The required PHP function fpassthru is not installed or has been disabled. Please ask your host to ensure that fpassthru is available.';
					}

					if (!function_exists('gd_info'))
					{
						$errors['gd'] = 'The required PHP extension GD could not be found. Please ask your host to install this extension.';
					}
					else if (!function_exists('imagecreatefromjpeg'))
					{
						$errors['gdJpeg'] = 'The required PHP extension GD was found, but JPEG support is missing. Please ask your host to add support for JPEG images.';
					}

					if (!function_exists('preg_replace'))
					{
						$errors['pcre'] = 'The required PHP extension PCRE could not be found. Please ask your host to install this extension.';
					}

					if (!function_exists('spl_autoload_register'))
					{
						$errors['spl'] = 'The required PHP extension SPL could not be found. Please ask your host to install this extension.';
					}

					if (!function_exists('json_encode'))
					{
						$errors['json'] = 'The required PHP extension JSON could not be found. Please ask your host to install this extension.';
					}

					if (!extension_loaded('curl'))
					{
						$errors['curl'] = 'The required PHP extension cURL could not be found. Please ask your host to install this extension.';
					}

					if (!class_exists('DOMDocument') || !class_exists('SimpleXMLElement'))
					{
						$errors['xml'] = 'The required PHP extensions for XML handling (DOM and SimpleXML) could not be found. Please ask your host to install this extension.';
					}

					try
					{
						$disabled = ini_get('disable_functions');
					}
					catch (Exception $e)
					{
						$errors['ini_get'] = 'Your server has disabled functions that make it impossible to detect server information. Other errors may occur.';
					}

					$required = array(
						'ini_set',
						'fpassthru',
					);

					$recommended = array(
						'fsockopen',
						'exec',
						'escapeshellarg',
						'proc_open',
						'popen',
						'set_time_out',
					);

					if (is_string($disabled))
					{
						$disabled = explode(',', $disabled);

						foreach ($disabled AS &$d)
						{
							$d = trim(strtolower($d));
						}

						foreach ($required AS $fn)
						{
							if (in_array($fn, $disabled))
							{
								$errors[$fn] = 'Your server has disabled a fundamental core PHP function <code><b>' . $fn . '</b></code> via the <code>disable_functions</code> directive in php.ini. This <b>will</b> cause unexpected problems in XenForo.';
							}
						}

						foreach ($recommended AS $fn)
						{
							if (in_array($fn, $disabled))
							{
								$warnings[$fn] = 'Your server has disabled a core PHP function <code><b>' . $fn . '</b></code> via the <code>disable_functions</code> directive in php.ini. This may cause unexpected problems in XenForo.';
							}
						}
					}

					if ($errors)
					{
						?>
						<div class="blockMessage blockMessage--error">
							<strong>Requirements not met</strong>
							<p>The following XenForo requirements were not met. Please contact your host for help.</p>
							<ol>
								<?php foreach ($errors AS $error) { echo "<li>$error</li>"; } ?>
							</ol>
							<?php
							if ($warnings)
							{
								?>
								<p>Additionally, the following warnings should be noted:</p>
								<ol>
									<?php foreach ($warnings AS $warning) { echo "<li>$warning</li>"; } ?>
								</ol>
								<?php
							}
							?>
						</div>
						<?php
					}
					else
					{
						?>
						<div class="blockMessage blockMessage--success">
							<strong>Requirements met</strong>
							<p>Your server meets all of XenForo's PHP requirements.</p>
							<?php
							if ($warnings)
							{
							?>
								<p>However, the following warnings should be noted - you may need to ask your host to address these:</p>
								<ol>
									<?php foreach ($warnings AS $warning) { echo "<li>$warning</li>"; } ?>
								</ol>
							<?php
							}
							?>
						</div>
						<?php
					}

					?>
					<div class="blockMessage">
						XenForo also requires MySQL 5.5 or newer. Please manually check that you meet this requirement.
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="p-footer">
		<div class="p-footer-inner">
			<div class="p-footer-copyright">
				<a href="https://xenforo.com" class="u-concealed">Forum software by XenForo&trade; <span>&copy; 2010-<?php echo date('Y'); ?> XenForo Ltd.</span></a>
			</div>
		</div>
	</footer>
</body>
</html>
