<?php

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/includes/app.php';

$data = require BASE_PATH . '/includes/data.php';

$icon = (function () use ($data) {
	$icons = $data['site']['icons'];
	$count = count($icons);
	$index = max(0, min(round(($count / 60) * (int) date('i')), $count));

	return $icons[$index] ?? $icons[0];
})();

$favicon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y=".9em" x="-.1em" font-size="90">' . $icon . '</text></svg>';

$anchorFormatterCallback = function ($profile) {
	$profile['url'] = Value::create($profile['url'] ?? null);
	return HTML::anchor($profile['url'], $profile['label']);
};

$linkFormatterCallback = function ($profile) {
	$attr = [
		'rel'   => 'me',
		'title' => $profile['label'],
		'href'  => Value::create($profile['url'] ?? null),
	];
	return HTML::element('link', $attr, false);
};

$workRanges = [];

?><!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width,initial-scale=1" name="viewport">

		<title><?php echo $data['author']['name']; ?></title>
		<meta name="description" content="<?php echo htmlspecialchars($data['site']['description'], ENT_QUOTES); ?>">
		<meta name="color-scheme" content="light dark">

<?php

		$onlineLinks = $data['profiles'];
		usort($onlineLinks, function ($a, $b) {
			return strcmp($a['label'], $b['label']);
		});
		$onlineLinks = array_map($linkFormatterCallback, $onlineLinks);

		echo "\t\t" . implode("\n\t\t", $onlineLinks) . "\n";

?>

		<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<?php echo htmlentities($favicon, ENT_QUOTES|ENT_HTML5); ?>" />

		<style>
<?php

			include 'style.css';

?>
		</style>
	</head>
	<body>
		<header>
			<div>

				<h1><?php echo HTML::icon($icon); ?><?php echo $data['author']['name']; ?></h1>
				<p><?php
					echo $data['author']['role'];
				?><br><?php
					echo $data['author']['location'];
				?></p>

				<p><small><strong>Contact</strong><br><?php

					$contactLinks = array_map($anchorFormatterCallback, $data['channels']);

					echo implode(' / ', $contactLinks);

				?></small></p>

				<p><small><strong>Online</strong><br><?php

					$onlineLinks = array_filter(
						$data['profiles'],
						fn ($profile) => $profile['show']
					);
					$onlineLinks = array_map($anchorFormatterCallback, $onlineLinks);

					echo implode(' / ', $onlineLinks);

				?></small></p>

				<hr />
<?php

			foreach ($data['work'] as $epoch) {
				if (!empty($epoch['projects'])) {
					array_push($workRanges, ...$epoch['periods']);
				}

				if ($epoch['type'] === MC_WORK_TYPE_AVOCATION) {
					continue;
				}

				$epoch['name'] = Value::create($epoch['name']);
				$epoch['url']  = Value::create($epoch['url']);

?>
				<p>
					<strong><?php echo HTML::anchor($epoch['url'], $epoch['name']); ?></strong>
<?php

				if ($epoch['periods']) {
?>
					<br><?php

					$periods = array_map([ 'HTML', 'time' ], $epoch['periods']);
					echo implode(', ', $periods);

				} // $period

?>
					<br><small><?php echo implode(', ', $epoch['roles']); ?></small>
				</p>
<?php

			} // $work

?>
			</div>
		</header>
<?php

		if ($workRanges) {
			$workRanges = new DateRangeCollection(...$workRanges);
			$workSpan   = $workRanges->getRange();

?>

		<section>
			<div>
				<h2>Selected Work<br><?php echo HTML::time($workSpan, $workSpan->format('Y', 'Y')); ?></h2>
<?php

			foreach ($data['work'] as $epoch) {
				if (empty($epoch['projects'])) {
					continue;
				}

?>

				<h3><?php echo $epoch['name']; ?></h3>
				<ul>
<?php

				foreach ($epoch['projects'] as $project) {
					$project['name'] = Value::create($project['name'] ?? null);
					$project['url']  = Value::create(array_shift($project['links'])['url'] ?? null);

					$isProjectActive = ($project['status'] === MC_PROJECT_STATUS_ACTIVE);

?>
					<li>
						<p>
							<?php echo HTML::icon($project['icon']); ?><strong><?php

								if (!$isProjectActive) {
									echo '<del>';
								}

								if ($project['status'] !== MC_PROJECT_STATUS_DEAD) {
									echo HTML::anchor($project['url'], $project['name']);
								} else {
									echo $project['name'];
								}

								if (!$isProjectActive) {
									echo '</del>';
								}

							?></strong><?php

								if (/*!$isProjectActive &&*/ $project['links']) {
									$projectLinks = array_map(function ($link) {
										$link['url'] = Value::create($link['url'] ?? null);
										return '[' . HTML::anchor($link['url'], $link['label']) . ']';
									}, $project['links']);

									echo ' ' . '<small>' . implode(' ', $projectLinks) . '</small>';
								}

							?> —
							<br><?php echo $project['description'] . "\n"; ?>
							<br><small><?php
								echo implode(', ', $project['stack']);

								if ($project['stack'] && $project['roles']) {
									echo '; ';
								}

								echo implode(', ', $project['roles']);
							?> (<?php
								$periods = array_map([ 'HTML', 'time' ], $project['periods']);
								echo implode(', ', $periods);
							?>)</small>
						</p>
					</li>
<?php

				} // $projects

?>
				</ul>
<?php

			} // $work

?>
			</div>
		</section>
<?php

		} // $workRanges

?>
	</body>
</html>
