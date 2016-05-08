<?php

namespace AceOugi;

class DebugBar
{
    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param callable|null $next
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, callable $next = null)
    {
        return $next ? $next($request, $response) : $response;
    }
}
