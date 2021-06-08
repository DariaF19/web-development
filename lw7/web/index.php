<?php

require_once __DIR__ . '/../src/common.inc.php';

switch (getRequestMethod()) 
{
    case 'GET':
        mainPage();
        break;
    case 'POST':
        saveFeedbackPage();
        break;
}
