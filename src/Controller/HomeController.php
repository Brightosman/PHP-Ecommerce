<?php 
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HomeController
    {
        /**
         * @Route("/first")
         */
        public function homepage(): Response
        {
            return new Response(
                '<html><body><h1>Welcome to my world!</h1></body></html>'
            );
        }
    }
?>