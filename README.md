# symfony-4.4-sentry

Doing a host header injection when `sentry/sentry-symfony` is installed, causes a `500` error.

This empty package has been installed using the following commands:

```
composer create-project symfony/website-skeleton:"^4.4" symfony-4.4-sentry
cd symfony-4.4-sentry
composer require nyholm/psr7
composer require symfony/psr-http-message-bridge
composer require sentry/sentry-symfony
```

## Trusted Hosts

Trusted hosts set to:

`TRUSTED_HOSTS='^(localhost|127.0.0.1)$'`


## Test for host header injection

`curl -i -H "Host: evil.com" -X GET https://127.0.0.1:8000/`
