<?php


namespace LeagueTests;


use League\OAuth2\Server\Exception\OAuthServerException;
use League\OAuth2\Server\Repositories\AccessTokenRepositoryInterface;
use League\OAuth2\Server\ResourceServer;
use Zend\Diactoros\ServerRequestFactory;

class ResourceServerTest extends \PHPUnit_Framework_TestCase
{
    public function testValidateAuthenticatedRequest()
    {
        $server = new ResourceServer(
            $this->getMock(AccessTokenRepositoryInterface::class),
            'file://' . __DIR__ . '/Stubs/public.key'
        );

        try {
            $server->validateAuthenticatedRequest(ServerRequestFactory::fromGlobals());
        } catch (OAuthServerException $e) {
            $this->assertEquals('Missing "Authorization" header', $e->getHint());
        }
    }

}
