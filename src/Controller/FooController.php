<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class FooController extends AbstractController
{
    /**
     * @Route("/foo", name="foo")
     */
    public function index(TranslatorInterface $translator)
    {
        return $this->json([
            'message en' => $translator->trans('gender.other', [], 'messages', 'en'),
            'message fr' => $translator->trans('gender.other', [], 'messages', 'fr'),
            'message fr_FR' => $translator->trans('gender.other', [], 'messages', 'fr_FR')
        ]);
    }
}
