<?php

require_once __DIR__ . '/../src/common.inc.php';

switch (getRequestMethod()) 
{
    case 'GET':
        feedbackPage();
        break;
    case 'POST':
        feedbacksListPage();
        break;
}
