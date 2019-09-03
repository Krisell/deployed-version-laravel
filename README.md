# Deployed Version Laravel
This package helps with determining which version ofyour app is currently running. This is useful during a deploy, to see when it is finished, and also when you rollback to ensure that the correct version is used.

By "version" I refer to a git commit hash, but you can use any convention and value you like (for instance version number in composer.json).

## Installation
Add the package to your Laravel project.

`composer require krisell/deployed-version-laravel`

The package is configured for automatic discovery, so unless you have other settings, you do not need to manually add the service provider.

## Usage
The package adds a route `/version` which displays the value of the environment-variable VERSION.

You need to set the value of this variable during your buld or deploy process.

```bash
VERSION=YOUR_VERSION_VALUE
```

One way to achieve this is to run the following script, but you may do it however you like:

```bash
echo "VERSION=$(git -C gitdir rev-parse HEAD)" >> .env.current-build
```

.env.current-build refers to a copy of the .env-file, to ensure that the addition is not persistent.

## Licence
MIT

## Author
Martin Krisell (martin.krisell@gmail.com)
