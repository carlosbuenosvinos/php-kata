code-kata/php
========

PHP skeleton for doing coding katas
-----------------------------------

*Code Kata* is a term coined by Dave Thomas, co-author of the book
The Pragmatic Programmer, in a bow to the Japanese concept of kata
in the martial arts. A code kata is an exercise in programming which
helps a programmer hone their skills through practice and repetition.
As of October 2011, Dave Thomas has published 21 different katas.

You can find some to start practicing [here](http://codingdojo.org/cgi-bin/index.pl?KataCatalogue).

This is a project framework based on [this](https://github.com/carlosbuenosvinos/php-kata).

I've updated to use phpunit 7 and phpspec 4.  I also plan on updating this to my own specific
style and way of running the katas.

Practicing a kata
=================

Let's imagine you want to practice "Bowling game kata". Details about
this kata can be found [here](http://codingdojo.org/cgi-bin/wiki.pl?KataBowling).

You will need composer.

    curl -sS https://getcomposer.org/installer | php

Then, use "create-project" command to clone this project as a template
and create a new one in your computer.

    php composer.phar create-project code-kata/php bowling-kata dev-master

Then add your classes to 'src/Kata' and your test cases to
'src/Kata/Tests' and run 'php bin/phpunit' to run your tests.

What I have done, is I have created a Kata/ folder and I setup a new Kata with a Rakefile
containing the followind code:

    task :create, [:project] do |task, args|
      puts "Creating new Kata #{args.project}..."
      puts `composer create-project code-kata/php  #{args.project} dev-master`  
    end

I also have in the repo a Rakefile that wraps around phpunit so instead of this:  

    php bin/phpunit
    
You can instead run this:
 
    rake test
    


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
