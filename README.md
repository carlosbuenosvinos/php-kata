kata/php
========

PHP skeleton for doing coding katas
-----------------------------------

*Code Kata* is a term coined by Dave Thomas, co-author of the book
The Pragmatic Programmer, in a bow to the Japanese concept of kata
in the martial arts. A code kata is an exercise in programming which
helps a programmer hone their skills through practice and repetition.
As of October 2011, Dave Thomas has published 21 different katas.

You can find some to start practicing [here](http://codingdojo.org/cgi-bin/index.pl?KataCatalogue).

When you do programming katas, you use TDD. That's why I have included
PHPUnit, Mockery, PHPSpec and Prophecy as composer dependencies. Choose
the testing framework you feel more comfortable (or play with both).

Practicing a kata
=================

Let's imagine you want to practice "Bowling game kata". Details about
this kata can be found [here](http://codingdojo.org/cgi-bin/wiki.pl?KataBowling).

You will need composer.

    curl -sS https://getcomposer.org/installer | php

Then, use "create-project" command to clone this project as a template
and create a new one in your computer.

    php composer.phar create-project kata/php bowling-kata dev-master

Then add your classes to 'src/Kata' and your test cases to
'src/Kata/Tests' and run 'php bin/phpunit' to run your tests.

    php bin/phpunit

TestCase examples
=================

If you run 'php bin/phpunit' you will see the following output.

    PHPUnit 3.8-gc4f2bcd by Sebastian Bergmann.
    
    Configuration read from /Users/carlosbuenosvinos/Documents/Web/bowling/phpunit.xml
    
    ...
    
    Time: 91 ms, Memory: 1.75Mb
    OK (3 tests, 3 assertions)

That's because you will find one class and its TestCase in the project
in order to help you. You can delete them.

Adder is a class that adds two numbers and AdderTest tests that.
