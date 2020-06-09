<?php

define('BASEPATH', dirname(__DIR__));

define('MC_WORK_TYPE_AVOCATION',  'AVOCATION');
define('MC_WORK_TYPE_OCCUPATION', 'OCCUPATION');

define('MC_PROJECT_STATUS_ACTIVE',  'ACTIVE');
define('MC_PROJECT_STATUS_RELACED', 'RELACED');
define('MC_PROJECT_STATUS_DEAD',    'DEAD');

require BASEPATH . '/src/app.php';

$file = BASEPATH . '/src/data.json';
$json = file_get_contents($file);
$data = json_decode($json);

if ($data === null) {
    throw new Error('JSON: '.json_last_error_msg(), json_last_error());
}

$icon = require BASEPATH . '/src/icon.php';

$linkFormatterCallback = function ($link) {
    $link->url = Value::create($link->url ?? null);
    return HTML::anchor($link->url, $link->text);
};

$workRanges = [];

?><!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1" name="viewport">

        <title>Chauncey McAskill</title>
        <meta name="description" content="Web developer working at Locomotive.">

        <style>
            body {
                max-width: 45rem;
                margin-top: 1.5em;
                margin-right: 1.5em;
                margin-bottom: 6em;
                margin-left: 3em;
                color: #2C3235;
                font-family: sans-serif;
                font-weight: 300;
                line-height: 1.5;
            }
            body > header {
                min-height: calc(100vh - 10em);
                margin-bottom: 3.5em;
            }
            body > header > h1 {
                font-size: 1.5em;
            }
            body > header > h1 [role="img"] {
                display: inline-block;
                margin-left: -2em;
                width: 2em;
                text-align: center;
                vertical-align: middle;
            }
            body > header > p:nth-last-child(2) {
                opacity: 0.6;
            }
            body > header > p:nth-last-child(1) {
                opacity: 0.4;
            }
            h1, h2, h3, h4, h5, h6, strong {
                font-weight: 500;
            }
            h1, h2 {
                font-size: 1.25em;
            }
            h3, h4 {
                font-size: 1.125em;
            }
            h5, h6 {
                font-size: 1em;
            }
            hr {
                max-width: 2rem;
                margin-top: 2em;
                margin-right: 0;
                margin-bottom: 2em;
                margin-left: 0;
                border-style: solid;
                border-top-width: 1px;
                border-right-width: 0;
                border-bottom-width: 0;
                border-left-width: 0;
                opacity: 0.6;
            }
            ul {
                padding-left: 0;
            }
            li {
                list-style: none;
                margin-left: 2em;
            }
            li [role="img"] {
                display: inline-block;
                margin-left: -2em;
                width: 2em;
                vertical-align: middle;
            }
            table {
                border-color: #DFDFDE;
            }
            a { color: #00F; }
            /*
            ul { padding-left: 0; }
            li { list-style: none; margin-left: 1em }
            */
            @media screen and (prefers-color-scheme: dark) {
                body {
                    background-color: #16191B;
                    color: #E2E6E8;
                }
                a { color: #FF0; }
            }
        </style>

        <link rel="icon" type="image/svg+xml" href="favicon.php" />
    </head>
    <body>
        <header>
            <h1><?php echo HTML::icon($icon); ?>Chauncey McAskill</h1>
            <p>Web Developer<br>Montréal, QC</p>

            <p><small><strong>Contact</strong><br><?php

                $contactLinks = array_map($linkFormatterCallback, $data->contact);

                echo implode(' / ', $contactLinks);

            ?></small></p>

            <p><small><strong>Online</strong><br><?php

                $onlineLinks = array_map($linkFormatterCallback, $data->social);

                echo implode(' / ', $onlineLinks);

            ?></small></p>

            <hr />
<?php

            foreach ($data->work as $epoch) {
                if (!empty($epoch->projects)) {
                    $workRanges[] = $epoch->period;
                }

                if ($epoch->type === MC_WORK_TYPE_AVOCATION) {
                    continue;
                }

                $epoch->name = Value::create($epoch->name);
                $epoch->url  = Value::create($epoch->url);

?>
            <p>
                <strong><?php echo HTML::anchor($epoch->url, $epoch->name); ?></strong>
                <br><?php echo HTML::time($epoch->period) . "\n"; ?>
                <br><small><?php echo implode(', ', $epoch->roles); ?></small>
            </p>
<?php

            } // $work

?>
        </header>
<?php

        if (count($workRanges)) {
            $workRanges = new DateRangeCollection(...$workRanges);
            $workSpan   = $workRanges->getRange();

?>

        <section>
            <h1>Selected Work<br><?php echo HTML::time($workSpan, $workSpan->format('Y', 'Y')); ?></h1>
<?php

            foreach ($data->work as $epoch) {
                if (empty($epoch->projects)) {
                    continue;
                }

?>

            <h3><?php echo $epoch->name; ?></h3>
            <ul>
<?php

                foreach ($epoch->projects as $project) {
                    $project->name = Value::create($project->name ?? null);
                    $project->url  = Value::create(array_shift($project->links)->url ?? null);

                    $isProjectActive = ($project->status === MC_PROJECT_STATUS_ACTIVE);

?>
                <li>
                    <p>
                        <?php echo HTML::icon($project->icon); ?><strong><?php

                            if (!$isProjectActive) {
                                echo '<del>';
                            }

                            if ($project->status !== MC_PROJECT_STATUS_DEAD) {
                                echo HTML::anchor($project->url, $project->name);
                            } else {
                                echo $project->name;
                            }

                            if (!$isProjectActive) {
                                echo '</del>';
                            }

                        ?></strong><?php

                            if (!$isProjectActive && count($project->links)) {
                                $projectLinks = array_map(function ($link) {
                                    $link->url = Value::create($link->url ?? null);
                                    return '[' . HTML::anchor($link->url, $link->text) . ']';
                                }, $project->links);

                                echo ' ' . '<small>' . implode(' ', $projectLinks) . '</small>';
                            }

                        ?> —
                        <br><?php echo $project->description . "\n"; ?>
                        <br><small><?php echo implode(', ', $project->roles); ?> (<?php echo HTML::time($project->period); ?>)</small>
                    </p>
                </li>
<?php

                } // $projects

?>
            </ul>
<?php

            } // $work

?>
        </section>
<?php

        } // $workRanges

?>
    </body>
</html>
