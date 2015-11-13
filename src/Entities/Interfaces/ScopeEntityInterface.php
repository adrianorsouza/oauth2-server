<?php
namespace League\OAuth2\Server\Entities\Interfaces;

interface ScopeEntityInterface
{
    /**
     * Get the scope's identifier
     * @return string
     */
    public function getIdentifier();

    /**
     * Set the scope's identifier
     * @param $identifier
     */
    public function setIdentifier($identifier);
}