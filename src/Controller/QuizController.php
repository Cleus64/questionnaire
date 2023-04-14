<?php

namespace App\Controller;

use App\Repository\QuestionsRepository;
use App\Repository\QuizRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

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

    #[Route('/api/quiz', name: 'app_quiz', methods:['GET'])]
    public function getQuestionsByQuiz(): JsonResponse


    {

        $questions = $this->questionsRepository->findAll();

        if ($questions) {

            $jsonquestions = $this->serializer->serialize($questions, 'json', ["groups" => "quiz"]);

            return new JsonResponse($jsonquestions, Response::HTTP_OK, [], true);
        // return new JsonResponse(null, Response::HTTP_NOT_FOUND);

        }
        return new JsonResponse(null, Response::HTTP_NOT_FOUND);

    }
}
