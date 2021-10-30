# Laravel Sentry API

Provides a simple laravel wrapper to some of the endpoints listed on (Official Sentry API)[https://docs.sentry.io/api/]. 

**Note: This is a WIP project, use it at your own risk **

## Install
`composer require pedro-santiago/laravel-sentry-api`

## Configuration

Update your `config/services.php` adding those entries:
```
    'sentry' => [
        'api' => [
            'token' => env('SENTRY_API_TOKEN'),
            'organization' => env('SENTRY_API_ORGANIZATION'),
            'base_url' => env('SENTRY_API_URL'),
        ],
    ],
```

To get a valid `token` you'll need to setup a **Internal Integration**, under **Settings** on your Sentry.  

## Usage

### Listing Projects
`app(Sentry::class)->listProjects();`

### Viewing a specific project
`app(Sentry::class)->getProject('<PROJECT_SLUG>);`

### Creating a project
`app(Sentry::class)->createProject('<TEAM_SLUG>', '<PROJECT_NAME>');`

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security-related issues, please email contato@pedrosantiago.com.br instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.