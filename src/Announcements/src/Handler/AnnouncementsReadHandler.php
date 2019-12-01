<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class AnnouncementsReadHandler implements RequestHandlerInterface
{
    /**
     * @var TemplateRendererInterface
     */
    private $renderer;

    public function __construct(TemplateRendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // Do some work...
        // Render and return a response:

        $result['_embeddedd'] = [1 => 'Test', 2 => 'Test 2'] ;

        return new  JsonResponse($result);

        /*
        return new HtmlResponse($this->renderer->render(
            'announcements::announcements-read',
            [] // parameters to pass to template
        ));
        */

    }
}
