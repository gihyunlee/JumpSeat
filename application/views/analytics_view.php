<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>JumpSeat | Analytics</title>
	<link rel="stylesheet" href="<?= $baseUrl; ?>assets/lib/foundation/css/foundation.css" />
	<link rel="stylesheet" href="<?= $baseUrl; ?>assets/css/aero-admin.css" />
	<link rel="stylesheet" href="<?= $baseUrl; ?>assets/css/ss-junior/webfonts/ss-junior.css" />
	<link rel="stylesheet" href="<?= $baseUrl; ?>assets/js/third_party/semantic/dropdowns/dropdown.css" />
    <link rel="stylesheet" href="<?= $baseUrl; ?>assets/js/third_party/semantic/dropdowns/dropdown.css" />

	<script src="<?= $baseUrl; ?>assets/lib/foundation/js/vendor/modernizr.js"></script>

	<link rel="shortcut icon" href="/assets/images/favicon.ico" />
	<link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
<? include 'inc/sidebar.php'; ?>
<? include 'inc/header.php'; ?>
<div id="analyticsView" class="balloon">
	<div class="row">
		<div id="roleGroup" class="large-12 columns">
			<h4><?= $lang->analytics; ?></h4>
			<? include 'inc/breadcrumb.php'; ?>
			<div class="row">
				<div class="columns small-6 large-3">
					<div class="analytics-count panel">
						<span><?= $lang->users; ?></span>
						<h1 class="analytics-count"><?= $user_count; ?></h1>
					</div>
				</div>
				<div class="columns small-6 large-3">
					<div class="analytics-count panel">
						<span><?= $lang->roles; ?></span>
						<h1 class="analytics-count"><?= $role_count; ?></h1>
					</div>
				</div>
				<div class="columns small-6 large-3">
					<div class="analytics-count panel">
						<span><?= $lang->pathways; ?></span>
						<h1 class="analytics-count"><?= $path_count; ?></h1>
					</div>
				</div>
				<div class="columns small-6 large-3">
					<div class="analytics-count panel">
						<span><?= $lang->guides; ?></span>
						<h1 class="analytics-count"><?= $guide_count; ?></h1>
					</div>
				</div>
			</div>

			<ul class="tabs" data-tab>
				  <li class="large-6 columns tab-title active"><a href="#panel1"><?= $lang->reportusers; ?></a></li>
				  <li class="large-6 columns tab-title"><a href="#panel2"><?= $lang->reportprogress; ?></a></li>
			</ul>

			<div id="analyticTabs" class="tabs-content">
				<div class="content active" id="panel1">
					<div class="row">
						<div class="columns large-12">
							<div class="analytics-count panel">
								<h5><?= $lang->reportusersd; ?></h5>
								<div class="chart">
									<canvas id="chart-1" width="800" height="500"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>

			  	<div class="content" id="panel2">
					<div class="row">
						<div class="columns large-12">
							<div class="user-search large-4">
								<label><?= $lang->filteruser; ?>:</label>
								<select id="userSearch" name="user_list"></select>
							</div>
							<div id="changeableReport2" class="analytics-count panel">
                                <?= $lang->nouser; ?>
							</div>
						</div>
					</div>
			  	</div>
			</div>
		</div>
	</div>
</div>
<? include 'inc/footer.php'; ?>
<script src="<?= $baseUrl; ?>assets/js/views/analytics<?= MIN ?>.js"></script>
</body>
</html>
