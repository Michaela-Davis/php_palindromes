# _FaR_

#### _This web page allows a user to simulate Find and Replace, 15 February 2017_

#### By _**Michaela Davis & Sean Peterson**_


## Description

_Find and Replace allows a user enters a string, chooses a word in that string and provides a replacement for that word._

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/michaela-davis/php_find-and-replace.git).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. To run tests enter `composer test` in terminal.
5. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac - things are different on a pc).
6. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input 1*    |    *Input 2*    |    *Input 3*    |     *Output*    |
|-----------------|-----------------|-----------------|-----------------|-----------------|
| Replace whole words.  | "Walk the cat" | "cat" | "dog" | "Walk the dog" |
| Replace partial matches.  | "I am walking my cat to the cathedral" | "cat" | "dog" | "I am walking my dog to the doghedral" |
| Account for all capitalization.  | "I AM WALKING MY CAT TO THE CATHEDRAL" | "cat" | "dog" | "I AM WALKING MY DOG TO THE DOGHEDRAL " |
| Account for partial capitalization.  | "I am walking my cat TO THE CATHEDRAL" | "cat" | "dog" | "I am walking my dog TO THE DOGHEDRAL " |

## Known Bugs

_None so far._

## Support and contact details

_Please contact michaela.delight@gmail.com or seanpeterson11@gmail.com with concerns or comments._

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _PHPUnit_
* _Composer_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Michaela Davis & Sean Peterson_**
