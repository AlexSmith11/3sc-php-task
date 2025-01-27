# 3SC PHP Task

### Overview

I'm sorry about this not being finished, my excuse is that I've had the busiest week of my life and got my covid jab halfway through it, so I'm sorry
if there is any fever dream stuff.

I had about 5 hours total to look at this, so if I can answer any questions on anything unclear please let me know!

### To start

To run the CLI, from the project root, enter:

`php .\src\start.php`

# Old stuff:

### Getting Started

- Clone this repository
- Run `composer install` from the project directory
- Commit your progress
- You'll need php 5.6+ (ideally 7.1)

### Task

You will be building a simple ~~image~~ cat gif storage system.

Some interfaces have been provided in the `/src` directory. Your solution
should implement each of these and provide usage examples which may be run
from the command line.

The solution should demonstrate manipulation of the filesystem using the
images provided in the `/images` directory.

### Important

Your solution should demonstrate use of OO design principles, particularly
[SOLID](<https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)>) and you
may choose to use any additional design patterns.

Additionally you may wish to make use of features provided by
[Standard PHP Library](http://php.net/manual/en/book.spl.php), however this is
optional.

Your solution is not required to demonstrate uploading of files, and does
not require a HTML front end. It should include a usage example that may be run from
the command line to demonstrate reading and manipulation of the filesystem.

Some sample images have been provided in the `/images` directory.

### Tests

Your solution should include some unit tests. Some examples have been provided already.

To run tests, run the following commands:

```
composer install

./vendor/bin/phpunit
```
