<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * This is the default controller.
 * /
class DefaultController extends Controller
{
    /**
     * @Route("/{all}", name="all")
     */
    public function allAction(Request $request)
    {
        return $this->returnMaintenanceResponse();
    }

    /**
     * @Route("/", name="slash")
     */
    public function slashAction(Request $request)
    {
        return $this->returnMaintenanceResponse();
    }
    
    /**
     * Returns a maintenance response.
     * 
     * @return JsonResponse
     * /
    private function returnMaintenanceResponse()
    {
        $response = new JsonResponse(array('id' => 'maintenance', 'message' => 'API is temporarily unavailable'));
        $response->setStatusCode(503);

        return $response;
    }
}
