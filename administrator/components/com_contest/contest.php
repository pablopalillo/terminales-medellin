<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Concusos");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'editContestItems' :
        $arrData = ContestComponentHelper::getContestItems(JRequest::getVar('contestId'));
        require_once 'tmpl/editContest_form.php';
        break;
    
    case 'saveContestItem' :
        $arrData = ContestComponentHelper::saveContestItem(
            JRequest::getVar('contestId'),
            JRequest::getVar('question_contest'),
            JRequest::getVar('questionType_contest'),
            JRequest::getVar('questionOptions_contest')
        );
        require_once 'tmpl/editContest_form.php';
        break;
    
    case 'deleteContestItems' : 
        $arrData = ContestComponentHelper::deleteContestItem(JRequest::getInt('contestItemId'), JRequest::getInt('contestId'));
        require_once 'tmpl/editContest_form.php';
        break;
    
    case 'getContestAnswer' :
        $arrData = ContestComponentHelper::getContestAnswer(JRequest::getInt('contestId'));
        require_once 'tmpl/default_contestAnswer.php';
        break;
    
    default :
        $arrData = ContestComponentHelper::getContest();
        require_once 'tmpl/default_contest.php';
        break;
    
    
}