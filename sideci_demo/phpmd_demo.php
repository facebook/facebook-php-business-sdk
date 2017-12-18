<?php

use Github\Client;

class Repository
{
    private $owner;
    private $name;
    private $public;
    private $branches;

    const PublicVisibility = 'public';

    /**
     * @param string $owner
     * @param string $name
     * @param string $visibility
     */
    public function Repository(string $owner, string $name, string $visibility)
    {
        $this->owner = $owner;
        $this->name = $name;
        $this->public = $visibility === PublicVisibility;
        $this->client = new Client($_SERVER['API_TOKEN']);
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->owner . $this->name;
    }

    /**
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param string $title
     * @param string $description
     */
    public function createIssue(string $title, string $description)
    {
        $this->client->createIssue($this->getFullName, $title, $description);
    }
}
