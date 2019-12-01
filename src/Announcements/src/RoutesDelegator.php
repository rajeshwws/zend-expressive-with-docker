<?php

namespace Announcements;

use Announcements\Handler;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class RoutesDelegator
{
    public function __invoke(ContainerInterface $container, $serviceName, callable $callback)
    {

        $app = $callback();

        $app->get('/announcements[/]', \Announcements\Handler\AnnouncementsReadHandler::class,'announcements.read');

        return $app ;
    }
}
