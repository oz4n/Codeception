<?php
$I = new CliGuy($scenario);
$I->wantTo('generate xml reports for unit tests');
$I->amInPath('tests/data/sandbox');
$I->executeCommand('run unit --xml --no-exit');
$I->seeFileFound('report.xml','tests/_log');
$I->seeInThisFile('<?xml');
$I->seeInThisFile('<testsuite name="unit" tests="5" assertions="5" failures="2" errors="0"');
$I->seeInThisFile('<testcase name="testMe" class="PassingTest"');
$I->seeInThisFile('<testcase name="testIsTriangle with data set #0" assertions="1"');
$I->seeInThisFile('<testcase name="testOne" class="DependsTest"');
$I->seeInThisFile('<failure type="PHPUnit_Framework_ExpectationFailedException">test one');


