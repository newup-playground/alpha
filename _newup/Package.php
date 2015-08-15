<?php

namespace NewupPlayground\Alpha;

use NewUp\Templates\BasePackageTemplate;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use League\CommonMark\CommonMarkConverter;

class Package extends BasePackageTemplate
{

    public function __construct()
    {
        // This playground exists to test the components that allow for package template dependencies to be
        // located and auto-loaded at runtime, without replacing any current auto-loaders.

        echo "NewUp Playground Alpha",PHP_EOL,"You should see HTML below, and not markdown.",PHP_EOL,PHP_EOL;

        $converter = new CommonMarkConverter;
        echo $converter->convertToHtml('# Hello World!');
        exit;
    }

}