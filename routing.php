<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('public');
App::getRouter()->setLoginRoute('login');


Utils::addRoute('public', 'publicCtrl');//First Page loaded
Utils::addRoute('login','LoginCtrl'); 
Utils::addRoute('register','RegisterCtrl'); 
Utils::addRoute('blog','BlogCtrl'); 
Utils::addRoute('marcysiox','MarcysioxCtrl'); 
Utils::addRoute('ustawienia','UstawieniaCtrl'); 
Utils::addRoute('artykuly','ArtykulyCtrl'); 
Utils::addRoute('artykul1','Artykul1Ctrl'); 
Utils::addRoute('artykul2','Artykul2Ctrl'); 

