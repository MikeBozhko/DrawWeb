<?php

namespace App\Controller;

use App\Entity\RepLog;
use App\Entity\User;
use App\Form\Type\RepLogType;
use App\Repository\RepLogRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends BaseController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function indexAction(Request $request, RepLogRepository $replogRepo, UserRepository $userRepo)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        $form = $this->createForm(RepLogType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $repLog = $form->getData();
            $repLog->setUser($this->getUser());

            $em->persist($repLog);
            $em->flush();

            $this->addFlash('notice', 'Reps crunched!');

            return $this->redirectToRoute('dashboard');
        }

        return $this->render('dashboard/index.html.twig', array(
            'form' => $form->createView(),
            'leaderboard' => $this->getLeaders($replogRepo, $userRepo),
        ));
    }

    /**
     * Returns an array of leader information
     *
     * @return array
     */
    private function getLeaders(RepLogRepository $replogRepo, UserRepository $userRepo)
    {
        $leaderboardDetails = $replogRepo->getLeaderboardDetails();

        $leaderboard = array();
        foreach ($leaderboardDetails as $details) {
            if (!$user = $userRepo->find($details['user_id'])) {
                // interesting, this user is missing...
                continue;
            }

            $leaderboard[] = array(
                'username' => $user->getUsername(),
                'weight' => $details['weightSum'],
                'in_cats' => number_format($details['weightSum']/RepLog::WEIGHT_FAT_CAT),
            );
        }

        return $leaderboard;
    }
}
