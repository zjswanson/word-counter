# _Word Counter_

#### _Application to demonstrate unit testing and string/array methods in php.  Created February 2017._

#### By _**Zach Swanson**_

## Description

_This is a simple application designed to demonstrate the use of unit testing in php, with PHPUnit.  The application will take two user inputs, a long string and a search string.  The application will return the number of times the search string occurs in the long string.  The project repository will have a record of the testing methods used to verify the functionality._

## Application Behaviors
```
Behavior: User inputs a search string and a phrase string to be searched.  App outputs the number of occurrences of the search string in the long string.
Sample Input: search: "cat", "The internet loves the cat.  Cat videos, cat merchandise, cat apparel and catalogs of cat behavior."
Sample Output: 5 matches.
Testing method: The phrase was chosen because the search string occurs many times, and because the search string is contained in another word in the phrase.  Verifying functionality will require testing that the method 1)returns a match for a single occurrence of the search string, 2)returns the correct number of matches for multiple occurrences, and 3) does not return a match for partial word matches.
```


return plurals and possessives

return partials

add default text to search (lewis carol, maybe)

display search text with matches highlighted





## Setup/Installation Requirements

* This application requires the Silex framework and Twig templating engine, as well as the Composer dependency manager.  Unit testing was done with with the PHPUnit framework.
* To install, make sure that you have composer installed (https://getcomposer.org/), clone this repository from github, and run "composer install" from the project directory in terminal.  This will install the required dependencies in the project directory.
* To run the applicaiton, you will need to run a local server running php in the "web" folder of the project directory (Application was tested using MAMP: https://www.mamp.info/en/.  Then direct any browser to your local server to run.
* To replicate testing, navigate to the project directory in terminal (after composer install) and run the command "./vendor/bin/phpunit tests".  The specific tests may be viewed in ./tests/.


## Known Bugs

 _No known bugs.  Modest functionality at best, but it isn't buggy._

## Support and contact details

_Created by Zach Swanson, zach.j.swanson@gmail.com.  No ongoing support planned, but questions or comments are welcome._

## Technologies Used

_Written in Atom text editor, using PHP, Silex, and Twig.  Tested functionality with PHPUnit and user interface on a local server with MAMP._

### License

*MIT license*

Copyright (c) 2017 **_Zach Swanson_**
