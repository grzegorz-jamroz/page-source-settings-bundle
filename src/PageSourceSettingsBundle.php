<?php

declare(strict_types=1);

namespace Ifrost\Bundle\PageSourceSettingsBundle;

use Ifrost\Bundle\PageSourceSettingsBundle\DependencyInjection\ComponentPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PageSourceSettingsBundle extends Bundle
{
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new ComponentPass());
    }

    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
