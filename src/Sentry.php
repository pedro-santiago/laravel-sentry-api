<?php

namespace PedroSantiago\SentryApi;

use Illuminate\Support\Facades\Http;

class Sentry {
    public function __construct(private string $accessToken, private string $organization, private string $baseURL = 'https://sentry.io')
    {
    }

    private function apiClient()
    {
        return Http::baseUrl("{$this->baseURL}/api")->withToken($this->accessToken);
    }

    public function listProjects()
    {
        return $this->apiClient()->get("/0/projects/")->throw()->object();
    }

    public function viewProject(string $slug)
    {
        return $this->apiClient()->get("/0/projects/{$this->organization}/{$slug}");
    }

    public function createProject(string $team, string $name, string $platform = '')
    {
        return $this->apiClient()->post("/0/teams/{$this->organization}/{$team}/projects/", [
            'name' => $name,
            'platform' => $platform,
            'default_rules' => false
        ])->throw()->object();
    }
}