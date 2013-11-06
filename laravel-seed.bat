@ECHO OFF
SETLOCAL enableextensions

SET COMPOSERLOC=composer

TITLE Enhanced Laravel Project Seeder

ECHO.
ECHO.
ECHO -------------------------------------------------
ECHO -------- Enhanced Laravel Project Seeder --------
ECHO -------------------------------------------------
ECHO.
ECHO Let's get to planting...
ECHO.


:composer-check
REM Check if Composer exists
ECHO Checking for Composer...
SET COMPOSERHUNTOUTPUT=NotFound
FOR /f %%a IN ('%COMPOSERLOC% --version --no-ansi') DO @SET COMPOSERHUNTOUTPUT=%%a

IF /i NOT {%COMPOSERHUNTOUTPUT%}=={Composer} (GOTO :composer-not-found)

ECHO Found it! Now...
ECHO.
GOTO :dir-prompt


:composer-not-found
REM Can't find Composer.
ECHO Composer couldn't be found with the command: %COMPOSERLOC%
ECHO.
ECHO Please visit http://getcomposer.org if it's not installed.
ECHO You're going to need it to work with Laravel.
ECHO.
ECHO If it is installed, please open this file in a text editor.
ECHO Find "SET COMPOSERLOC=composer" right near the top.
ECHO Change "composer" to a a valid path to your composer install.
ECHO "php composer.phar" works if you have a copy in the same
ECHO location as this script. Don't include quotes.
ECHO Then run this again.
PAUSE
GOTO :very-end


:dir-prompt
REM Ask for a directory name
SET /P SEEDPROJECTDIR=Enter a directory name for this project (ex: awesome-new-project): 
ECHO.

REM Now is it a valid name?
REM Empty name returned
IF /i {%SEEDPROJECTDIR%}=={} (GOTO :invalid-name)

REM It's good; on to Composer
GOTO :create-project


:invalid-name
ECHO The directory name should not be empty. Please try again.
GOTO :dir-prompt


:create-project
ECHO Attempting to grow project in "%SEEDPROJECTDIR%"
ECHO.
ECHO Putting Composer to work...
ECHO.

CMD /C %COMPOSERLOC% create-project edrands/laravel-seeder %SEEDPROJECTDIR% --stability=stable

ECHO.
ECHO If Composer didn't show you any errors, we have planted the seed!


:end
ECHO.
ECHO Thanks for using the Enhanced Laravel Project Seeder!
ECHO.
ECHO We'll pause in case the window is going to auto close,
ECHO and you want time to scroll up and read what happened.
PAUSE
CD %SEEDPROJECTDIR%
:very-end
