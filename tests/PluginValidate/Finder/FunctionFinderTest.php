<?php

/*
 * This file is part of the Moodle Plugin CI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * License http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace MoodlePluginCI\Tests\PluginValidate\Finder;

use MoodlePluginCI\PluginValidate\Finder\FileTokens;
use MoodlePluginCI\PluginValidate\Finder\FunctionFinder;

class FunctionFinderTest extends \PHPUnit_Framework_TestCase
{
    public function testFindTokens()
    {
        $file       = __DIR__.'/../../Fixture/moodle-local_travis/lib.php';
        $fileTokens = FileTokens::create('lib.php')->mustHave('local_travis_subtract');

        $finder = new FunctionFinder();
        $finder->findTokens($file, $fileTokens);

        $this->assertTrue($fileTokens->hasFoundAllTokens());
    }
}
