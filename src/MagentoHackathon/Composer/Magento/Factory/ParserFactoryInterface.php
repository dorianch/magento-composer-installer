<?php

namespace MagentoHackathon\Composer\Magento\Factory;

use Composer\Package\PackageInterface;

/**
 * Interface ParserFactoryInterface
 * @package MagentoHackathon\Composer\Magento\Parser
 * @author  Aydin Hassan <aydin@hotmail.co.uk>
 */
interface ParserFactoryInterface
{

    /**
     * @param PackageInterface $package
     * @param string $sourceDir
     * @return Parser
     */
    public function make(PackageInterface $package, $sourceDir);
}
