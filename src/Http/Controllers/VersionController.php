<?php

namespace Krisell\DeployedVersionLaravel\Http\Controllers;

class VersionController
{
  public function __invoke()
  {
    return [
      'version' => config('deployed-version.version'),
    ];
  }
}