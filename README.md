# Valence Wrapper

Valence Wrapper is a PHP Library to make it easy to interact with the [Brightspace LMS API](https://docs.valence.desire2learn.com/about.html)

Valence Wrapper provides helper methods for every API endpoint and returns PSR-7 Request Messages.
The PSR-7 Requests can be sent with your favorite HTTP library or [Pooled to be sent asynchronously](https://www.php.net/manual/en/function.curl-multi-init.php)

Valence wrapper also includes helpers to sign requests with either Oauth or ID-key pair signatures.

## Installation

Use the package manager [composer](https://getcomposer.org/) to install Valence Wrapper.

## Usage

```php

    use ValenceWrapper\Service\Enrollments;

    $enrollmentsService = new Enrollments();

    $request = $enrollmentsService->getEnrollmentsMyenrollments($apiVersion, $roleId);

    $authedRequest = $this->oauthValenceInstance->authenticateRequest($request);

```

## Contributing
Pull requests are welcome.
