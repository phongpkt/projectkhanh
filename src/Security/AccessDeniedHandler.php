<?php
namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function __construct(SessionInterface $sessionInterface, RouterInterface $routerInterface){
        $this->sessionInterface = $sessionInterface;
        $this->routerInterface = $routerInterface;
    }
    public function handle(Request $request, AccessDeniedException $exception){
        //show an error message
        $this->session->getFlashBag()->add('Warning', 'Unauthorized access');
        //redirect to "Login" page
        return new RedirectResponse($this->routerInterface->generate('app_login'));
    }
}
?>