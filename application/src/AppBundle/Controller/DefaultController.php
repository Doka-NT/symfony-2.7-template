<?php
/**
 * Контроллер по-умолчанию
 * @author Soshnikov Artem <213036@skobka.com>
 * @version 1.0
 * @copyright (c) 12.10.2015, Творческая группа Скобка
 * @website http://skobka.com
 * @license http://skobka.com/license.html
 */


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @Template()
     * @return array
     */
    public function indexAction(Request $request)
    {
        return [];
    }
}
