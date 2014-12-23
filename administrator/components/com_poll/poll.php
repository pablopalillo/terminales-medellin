<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Encuestas");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'addpoll':
        require_once 'tmpl/addPoll_form.php';
        break;

    case 'savepoll':
        $mixData = PollComponentHelper::savePoll(
            JRequest::getVar('poll', false),
            JRequest::getVar('pollstartdate', false),
            JRequest::getVar('pollfinishdate', false),
            JRequest::getVar('polltype', false)
        );
        require_once 'tmpl/default_poll.php';
        break;

    case 'deletepoll':
        $mixData = PollComponentHelper::deletePoll(JRequest::getVar('pollid'));
        require_once 'tmpl/default_poll.php';
        break;

    case 'addpollitem':
        require_once 'tmpl/addPollItem_form.php';
        break;

    case 'savepollitem':
        $mixData = PollComponentHelper::savePollItem(JRequest::getVar('pollid'), JRequest::getVar('pollitem'));
        require_once 'tmpl/default_pollItem.php';
        break;

    case 'deletepollitem':
        $mixData = PollComponentHelper::deletePollItem(JRequest::getVar('pollid'), JRequest::getVar('pollitemid'));
        require_once 'tmpl/default_pollItem.php';
        break;

    case 'editpoll':
        $mixData = PollComponentHelper::getPoll(JRequest::getVar('pollid'));
        require_once 'tmpl/default_pollItem.php';
        break;
    
    case 'setpollactive' :
        $mixData = PollComponentHelper::setActivePoll(JRequest::getVar('pollid'));
        require_once 'tmpl/default_poll.php';
        break;
    
    case 'viewanswer' :
        $mixData = PollComponentHelper::viewAnswer(JRequest::getVar('pollid'));
        require_once 'tmpl/default_pollAnswers.php';
        break;

    default :
        $mixData = PollComponentHelper::getPolls();
        require_once 'tmpl/default_poll.php';
        break;
}