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
        $manifestAsset = new AssetManifest("example-manifest");
        $expected = "test-one.randomString.js";
        $result = $manifestAsset->getAsset("test-one.js");
        $this->assertEquals($expected, $result);
    }
}