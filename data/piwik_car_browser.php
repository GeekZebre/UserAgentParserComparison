<?php
$fixtureData = \Spyc::YAMLLoad('vendor/piwik/device-detector/Tests/fixtures/car_browser.yml');

$userAgents = array_column($fixtureData, 'user_agent');

return $userAgents;
