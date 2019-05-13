<?php

namespace TribeHired\TwigAssetManifest;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AssetManifest extends AbstractExtension
{
    /** @var $manifestJson string  */
    private $manifestJson;

    /**
     * AssetManifest constructor.
     * @param $manifestJson
     */
    public function __construct(string $manifestJson)
    {
        $this->manifestJson = $manifestJson;
    }


    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('asset', [$this, 'getAsset']),
        ];
    }

    /**
     * @param string $file
     * @return string
     * @throws \Exception
     */
    public function getAsset(string $file): string
    {
        $manifest = json_decode(file_get_contents($this->manifestJson.".json"), true);

        if (!array_key_exists($file, $manifest)) {
            throw new \Exception("Asset not mapped");
        }

        return $manifest[$file];
    }
}