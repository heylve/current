<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdvertController extends Controller
{
  public function indexAction()
  {
    // $engine= $content = $this->get('templating');
    // $content=$engine->render('OCPlatformBundle:Advert:index.html.twig');
    //
     //return new Response("plaine le deo");
    //  return $this->render('OCPlatformBundle:Default:index.html.twig');
     //return $this->render('OCPlatformBundle:Advert:index.html.twig');
  /*   $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig');

    return new Response($content);
*/
     $content = $this
     ->get('templating')
     ->render('OCPlatformBundle:Advert:index.html.twig', array('nom' => 'winzou'));
       return new Response($content);


  }
  // Ajoutez cette méthode :
 public function addAction(Request $request)
 {
   $session = $request->getSession();

   // Bien sûr, cette méthode devra réellement ajouter l'annonce

   // Mais faisons comme si c'était le cas
   $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

   // Le « flashBag » est ce qui contient les messages flash dans la session
   // Il peut bien sûr contenir plusieurs messages :
   $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');

   // Puis on redirige vers la page de visualisation de cette annonce
   return $this->redirectToRoute('oc_platform_view', array('id' => 5));
 }

  public function viewAction($id, Request $request)
    {
      // $id vaut 5 si l'on a appelé l'URL /platform/advert/5

      // Ici, on récupèrera depuis la base de données
      // l'annonce correspondant à l'id $id.
      // Puis on passera l'annonce à la vue pour
      // qu'elle puisse l'afficher

      // On récupère notre paramètre tag
    /* $tag = $request->query->get('tag');

     return new Response(
       "Affichage de l'annonce d'id : ".$id.", avec le tag : ".$tag
     );**/
     // On crée la réponse sans lui donner de contenu pour le moment
/*   $response = new Response();

   // On définit le contenu
   $response->setContent("Ceci est une page d'erreur 404");

   // On définit le code HTTP à « Not Found » (erreur 404)
   $response->setStatusCode(Response::HTTP_NOT_FOUND);

   // On retourne la réponse
   return $response;*/

   // On récupère notre paramètre tag
  /**$tag = $request->query->get('tag');

  // On utilise le raccourci : il crée un objet Response
  // Et lui donne comme contenu le contenu du template
  return $this->get('templating')->renderResponse(
    'OCPlatformBundle:Advert:view.html.twig',
    array('id'  => $id, 'tag' => $tag)
  );
**/

// On récupère notre paramètre tag
  /**$tag = $request->query->get('tag');

  return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
    'id'  => $id,
    'tag' => $tag,
  ));
**/
    /**$url = $this->get('router')->generate('oc_platform_home');

   return new RedirectResponse($url);**/
   // Créons nous-mêmes la réponse en JSON, grâce à la fonction json_encode()
  /*  $response = new Response(json_encode(array('id' => $id)));

    // Ici, nous définissons le Content-type pour dire au navigateur
    // que l'on renvoie du JSON et non du HTML
    $response->headers->set('Content-Type', 'application/json');

    return $response;
*/
 //return new JsonResponse(array('id' => $id));

 // Récupération de la session
     $session = $request->getSession();

     // On récupère le contenu de la variable user_id
     $userId = $session->get('user_id');

     // On définit une nouvelle valeur pour cette variable user_id
     $session->set('user_id', 91);

     // On n'oublie pas de renvoyer une réponse
    // return new Response("<body>Je suis une page de test, je n'ai rien à dire</body>");
    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'id'  => $id,
      ));

    }

    // On récupère tous les paramètres en arguments de la méthode
  public function viewSlugAction($slug, $year, $format)
  {
      return new Response(
          "On pourrait afficher l'annonce correspondant au
          slug '".$slug."', créée en ".$year." et au format ".$format."."
      );
  }


}
