<?php
/**
 * Attogram Games Website Builder
 * https://github.com/attogram/games
 *
 * usage:
 *      php build.php <options>
 *
 *      options:
 *          install - Install games (git clone, build steps)
 *          update  - Update games (git update, build steps)
 *          embed   - Enable build of embeddable games.html menu
 */

use Attogram\Games\AttogramGames;

$class = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'AttogramGames.php';
if (!is_readable($class)) {
    print "Fatal Error: File Not Found: {$class}\n";

    return;
}

/** @noinspection PhpIncludeInspection */
require_once $class;

try {
    new AttogramGames();
} catch (Throwable $error) {
    print 'Fatal Error: ' . $error->getMessage() . "\n";
}
