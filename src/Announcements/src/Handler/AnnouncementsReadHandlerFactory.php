<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class AnnouncementsReadHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AnnouncementsReadHandler
    {
        return new AnnouncementsReadHandler($container->get(TemplateRendererInterface::class));
    }
}
