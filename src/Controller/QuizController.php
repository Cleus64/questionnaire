<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Reponses;
use App\Repository\QuizRepository;
use App\Repository\UserRepository;
use App\Repository\QuestionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuizController extends AbstractController
{
    /**   
     * @Required
     */
    public SerializerInterface $serializer;

    /**   
     * @Required
     */
    public QuizRepository $quizRepository;

    /**   
     * @Required
     */
    public QuestionsRepository $questionsRepository;

        /**   
     * @Required
     */
    public EntityManagerInterface $em;

        /**   
     * @Required
     */
    public UserRepository $userRepository;

    #[Route('/api/quiz', name: 'app_quiz', methods:['GET'])]
    public function getQuestionsByQuiz(): JsonResponse
    {
        $questions = $this->questionsRepository->findAll();
       
        return $this->json(
            data: $questions,
            context: ['groups' => ['quiz']]
        );
    }

    #[Route('/register', name: 'app_user', methods:['POST'])]
    public function getUserByReponses(Request $request, UserRepository $userRepository, QuestionsRepository $questionsRepository): JsonResponse
    {
        // $data = $request->getContent();
        $data = json_decode($request->getContent());
        // $user = $this->serializer->deserialize($request->request->get('user'), User::class, 'json');
        if ($data){

            $user = new User();
            // $form = $this->createForm(User::class, $user);
            // $form->handleRequest($request);

            $user->setNom($data->user->username);
            $user->setPrenom($data->user->lastname);
            $user->setMail($data->user->email);
            $this->em->persist($user);

            /**
             * @var Table
             */
            $reponses = $data->reponses;
            foreach ($reponses as $id => $reponse) {
                $newReponse = new Reponses;
                $newReponse->setUser($user);
                $newReponse->setTexte($reponse->libelle);
                $question = $questionsRepository->find($id);
                $newReponse->setQuestion($question);
                
                $this->em->persist($newReponse);

            }
            $this->em->flush();
            return new JsonResponse("Données reçues", Response::HTTP_CREATED);

        }
        return new JsonResponse($data, Response::HTTP_BAD_REQUEST);
    }
}
