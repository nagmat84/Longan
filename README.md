<p align="center"><img src="https://raw.githubusercontent.com/LycheeOrg/Lychee/master/Banner.png" width="400px" alt="@LycheeOrg"></p>

[![GitHub Release][release-shield]](https://github.com/nagmat84/longan-server/releases)
![PHP 8.0 & 8.1][php-shield]
[![MIT License][license-shield]](https://github.com/nagmat84/longan-server/blob/master/LICENSE)
<br>
[![Build Status][build-status-shield]](https://github.com/nagmat84/longan-server/actions)
[![Code Coverage][codecov-shield]](https://codecov.io/gh/nagmat84/longan-server)
[![Quality Gate Status][sonar-shield]](https://sonarcloud.io/project/overview?id=nagmat84_longan-server)
<br>
![Website][website-shield]
![Documentation][docs-shield]
![Changelog][changelog-shield]
[![Front-end repository][frontend-shield]](https://github.com/nagmat84/longan-webui)


#### A great looking and easy-to-use photo-management-system.

*Longan is a fork of Lychee v4.*
*The original Lychee project is located at [LycheeOrg](https://github.com/LycheeOrg).*


Longan is a free photo-management tool, which runs on your server or web-space.
Installing is a matter of seconds.
Upload, manage and share photos like from a native application.
Longan comes with everything you need and all your photos are stored securely.

Longan is split into two repositories: the Longan Server (this repository) and the [Longan WebUI](https://github.com/nagmat84/longan-webui).
The Longan Server implements the backend and runs on the web server.
The Longan WebUI implmenets the frontend, runs inside the user's browser and interacts with the Longan Server.
For installation one only needs the Longan Server as the Longan Server includes the Longan WebUI as a submodule.

## Installation

To run Longan, everything you need is a web-server with PHP 8.2 or later and a DBMS.
Follow the instructions to install Longan on your server.
This version of Longan is built on the Laravel framework.
To install:

1. Clone this repositroy to your server and set the web root to `longan-server/public`
2. Run `composer install --no-dev` to install dependencies
3. Copy `.env.example` as `.env` and edit it to match your parameters
4. Generate your secret key with `php artisan key:generate`
5. Migrate your database with `php artisan migrate` to create a new database or migrate an existing Longan installation to the latest framework.

### Build

Longan is ready to use, right out of the box.
If you want to contribute and edit CSS or JS files, you need to rebuild [Longan WebUI](https://github.com/nagmat84/longan-webui).

## Advanced Features

Longan is ready to use straight after installation, but some features require a little more configuration.

### Dropbox import

In order to use the Dropbox import from your server, you need a valid drop-ins app key from [their website](https://www.dropbox.com/developers/apps/create).
Longan will ask you for this key, the first time you try to use the import.

### Twitter Cards

Longan supports [Twitter Cards](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/abouts-cards) and [Open Graph](http://opengraphprotocol.org) for shared images (not albums).
In order to use Twitter Cards you need to request an approval for your domain.
Simply share an image with Longan, copy its link and paste it in [Twitter's Card Validator](https://cards-dev.twitter.com/validator).

### Imagick

Longan uses [Imagick](https://www.imagemagick.org) when installed on your server.
In this case you will benefit from a faster processing of your uploads, better looking thumbnails and intermediate sized images for small screen devices.
You can disable the usage of [Imagick](https://www.imagemagick.org) in the settings.

### New Photos Email Notification

In order to use the new photos email notification you will need to have configured the **MAIL_** variables in your `.env` to your mail provider and [setup cron](https://laravel.com/docs/scheduling#running-the-scheduler).
Once that is complete you then toggle **Send new photos notification emails** in the settings.
Your users will be able to opt-in to the email notifications by entering their email address in the **Notifications** setting in the sidebar.
Photo notifications will be grouped and sent out once a week to the site admin, album owner & anyone who the album is shared with, if their email has been added.
The admin or user who added the photo to an album, will not receive a email notification for the photos they added.
