<?php
namespace App\Controller;

use App\Entity\Options;
use App\Form\OptionsType;
use App\Repository\OptionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 *
 * @Route("/options")
 */
class OptionsController extends AbstractController
{
    
    private $optionsRepository;

    public function __construct(OptionsRepository $optionsRepository){
        $this->optionsRepository = $optionsRepository;
        
    }
    
    /**
     *
     * @Route("/", name="options_index", methods={"GET"})
     */
    public function index(OptionsRepository $optionsRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $query = $optionsRepository->findAllBylftQuery($request->query->get('filter'));
         
        
        $options = $paginator->paginate(
            // Doctrine Query, not results
            $query,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            10
          );
        
        
        return $this->render('options/index.html.twig', [
            'options' => $options
        ]);
    }

    /**
     *
     * @Route("/new", name="options_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $option = new Options();
        
        $parent =(int)$request->query->get('parent');
        $parentOption=$this->optionsRepository->find($parent);
        
        if($parentOption)
            $option->setParent($parentOption);
        
        
        $form = $this->createForm(OptionsType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($option);
            $entityManager->flush();

           
        return $this->redirectToRoute('options_index');
        }

        return $this->render('options/new.html.twig', [
            'option' => $option,
            'form' => $form->createView()
        ]);
    }

    /**
     *
     * @Route("/{id}", name="options_show", methods={"GET"})
     */
    public function show(Options $option): Response
    {
        return $this->render('options/show.html.twig', [
            'option' => $option
        ]);
    }

    /**
     *
     * @Route("/{id}/edit", name="options_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Options $option): Response
    {
        $form = $this->createForm(OptionsType::class, $option);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()
                ->getManager()
                ->flush();
        return $this->redirectToRoute('options_index');
        }

        return $this->render('options/edit.html.twig', [
            'option' => $option,
            'form' => $form->createView()
        ]);
    }

    /**
     *
     * @Route("/{id}", name="options_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Options $option): Response
    {
        if ($this->isCsrfTokenValid('delete' . $option->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($option);
            $entityManager->flush();
        }

        return $this->redirectToRoute('options_index');
    }

    /**
     *
     * @Route("/moveUp/{id}/{top}", name="options_moveUp",  defaults={"top" = 0}, methods={"GET","POST"})
     */
    public function moveUp(Request $request, OptionsRepository $optionsRepository, Options $options, $top): Response
    {
        if ($options->getLvl() !== 1)
            die();

        if ($top) {
            $optionsRepository->moveUp($options, true);
        } else
            $optionsRepository->moveUp($options);
        
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($request->headers->get('referer'));
    }

    /**
     *
     * @Route("/moveDown/{id}/{down}", name="options_moveDown",  defaults={"down" = 0}, methods={"GET","POST"})
     */
    public function moveDown(Request $request, OptionsRepository $optionsRepository, Options $options, $down): Response
    {
        if ($options->getLvl() !== 1)
            die();
        if ($down) {
            $optionsRepository->moveDown($options, true);
        } else
            $optionsRepository->moveDown($options);
        
        
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($request->headers->get('referer'));
    }
}
