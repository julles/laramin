<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Alerts e.g. approaching your limit</title>
<link href="{{ \Helper::assetUrl() }}other/email/styles.css" media="all" rel="stylesheet" type="text/css" />
</head>

<body itemscope itemtype="http://schema.org/EmailMessage">

<table class="body-wrap">
	<tr>
		<td></td>
		<td class="container" width="600">
			<div class="content">
				<table class="main" width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td class="alert alert-info">
							Forgot Password
						</td>
					</tr>
					<tr>
						<td class="content-wrap">
							<table width="100%" cellpadding="0" cellspacing="0">
								<tr>
									<td class="content-block">
										Dear {{ $email->username }} 
									</td>
								</tr>
								
								<tr>
									<td class="content-block">
										This your new password {{ $randomPassword }} 
									</td>
								</tr>

							</table>
						</td>
					</tr>
				</table>
				</div>
		</td>
		<td></td>
	</tr>
</table>

</body>
</html>
