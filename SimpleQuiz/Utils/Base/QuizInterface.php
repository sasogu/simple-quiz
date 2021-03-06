<?php
namespace SimpleQuiz\Utils\Base;

interface QuizInterface {
    
    public function setId($id);
    
    public function getId();
    
    public function getName();
    
    public function getDescription();
    
    public function isActive();
    
    public function getAnswers($questionid = false);
    
    public function addAnswers($questionid, Array $answers);
    
    public function addQuestion($question, Array $answers);
    
    public function updateQuestion ($questionnum, $text);
    
    public function deleteQuestion($questionid);
    
    public function updateAnswers(Array $answers, $questionid);
    
    public function deleteAnswers($questionid);
    
    public function getQuestion($questionid);
    
    public function getQuestions();
    
    public function getCategory();
    
    public function populateQuestions();
    
    public function getUsers();
    
    public function getLeaders($num);
    
    public function registerUser($username);
    
    public function addQuizTaker($user,$score,$start,$end,$timetaken);
}
?>
