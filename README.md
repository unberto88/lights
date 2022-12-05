# Test task for iDeals

## List of files

- (Folder) lights - theme files
- db-lights.zip - MYSQL database dump
- localhost-lights-20221204-224622-juoa3r.wpress - migration file
- wordpress-all.zip - full site archive includes wordpress, theme and images

## Installation

You have two options for how I propose to deploy this project.

First way:

- install wordpress the usual way
- install [migration plugin](https://wordpress.org/plugins/all-in-one-wp-migration/)
- upload migration [file](localhost-lights-20221204-224622-juoa3r.wpress) (All-in-One WP Migration -> Import -> Import from file, make sure the environment allows you to upload files of the required size - 40M+ )
- done (login: admin, password: 123)

Second way (* I do not recommend using this method, due to technical limitations):

- download and unzip file [wordpress-all.zip](wordpress-all.zip)
- download and unzip file [db-lights.zip](db-lights.zip)
- change the domain from the current (localhost) one to the one relevant for you in the database file, keeping in mind the protocol and serialization.
- log in as usual

## Recommended environment

- PHP 8.0.7
- MYSQL 10.4.19
- Wordpress 6.1.1

## Required plugins

- Advanced Custom Fields Pro 6.0.5
- SVG Support 2.5.4 
- All-in-One WP Migration 7.68 (only for migration)
