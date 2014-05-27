<?php
namespace Kabeuki\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/")
 */
class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('KabeukiEcommerceBundle:Home:index.html.twig');
    }

    /**
     * @Route("/okay", name="oke_page")
     */
    public function okeAction()
    {
        return $this->render('KabeukiEcommerceBundle:Home:oke.html.twig');
    }
}
