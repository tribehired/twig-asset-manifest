<?php

namespace TribeHired\TwigAssetManifest\Test;

use PHPUnit\Framework\TestCase;
use TribeHired\TwigAssetManifest\AssetManifest;

class MainTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testGetAsset()
    {
        $manifestAsset = new AssetManifest("example-manifest.json");
        $expected = "test-one.randomString.js";
        $result = $manifestAsset->getAsset("test-one.js");
        var_dump($result);
        $this->assertEquals($expected, $result);
    }
}