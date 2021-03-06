<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The message module English file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     message
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
$lang->message->common            = 'Message';
$lang->message->id                = 'ID';
$lang->message->type              = 'Type';
$lang->message->from              = 'From';
$lang->message->content           = 'Text';
$lang->message->phone             = 'Contact';
$lang->message->mobile            = 'Mobile';
$lang->message->qq                = 'QQ';
$lang->message->email             = 'Email';
$lang->message->date              = 'Data';
$lang->message->secret            = 'Admin Only';
$lang->message->readed            = 'Read';
$lang->message->captcha           = 'Verification Code';
$lang->message->list              = 'Message List';
$lang->message->post              = 'Leave a Message';
$lang->message->viewArticle       = 'Text';
$lang->message->viewComment       = 'Message';
$lang->message->noSelectedMessage = 'You have not selected any message.';
$lang->message->needCheck         = 'Message will be posted once reivewed.';
$lang->message->showDetail        = 'Show all';
$lang->message->hideDetail        = 'Hide';

$lang->message->admin          = 'Backend Home';
$lang->message->pass           = 'Pass';
$lang->message->reply          = 'Reply';
$lang->message->view           = 'View';
$lang->message->manage         = 'Message Admin';
$lang->message->delete         = 'Delete';
$lang->message->deleteSelected = 'Delete the selected';
$lang->message->passPre        = 'Pass Prev';
$lang->message->deletePre      = 'Delete Prev';
$lang->message->commentAt      = 'Posted on';
$lang->message->deletedObject  = 'Deleted';
$lang->message->contactHidden  = "such as phone and email. Only Admin can see your contact.";

$lang->message->confirmDeleteSingle = 'Do you want to delete this message?';
$lang->message->confirmDeletePre    = 'Do you want to delete previous messages?';
$lang->message->confirmPassSingle   = 'Do you want to pass this message? ';
$lang->message->confirmPassPre      = 'Do you want to pass previous messages?';

$lang->message->statusList[0] = 'Pending';
$lang->message->statusList[1] = 'Reviewed';

$lang->message->readedStatus[0] = 'Unread';
$lang->message->readedStatus[1] = 'Read';

$lang->comment = new stdclass();
$lang->comment->common       = 'Comment';
$lang->comment->id           = 'ID';
$lang->comment->type         = 'Type';
$lang->comment->from         = 'From';
$lang->comment->content      = 'Text';
$lang->comment->phone        = 'Content';
$lang->comment->mobile       = 'Mobile';
$lang->comment->qq           = 'QQ';
$lang->comment->email        = 'Email';
$lang->comment->captcha      = 'Verification Code';
$lang->comment->list         = 'Comment List';
$lang->comment->post         = 'Write a Comment';
$lang->comment->viewArticle  = 'Text';
$lang->comment->viewComment  = 'Comment';
$lang->comment->needCheck    = 'Comment will be posted once reviewed.';
$lang->comment->receiveEmail = 'Email notification';

$lang->comment->pass          = 'Pass';
$lang->comment->reply         = 'Reply';
$lang->comment->replyAt       = 'Replied on';
$lang->comment->manage        = 'Manange Comments';
$lang->comment->delete        = 'Delete';
$lang->comment->passPre       = 'Pass Prev';
$lang->comment->deletePre     = 'Delete Prev';
$lang->comment->commentTo     = 'Commented on';
$lang->comment->commentAt     = 'Commented on';
$lang->comment->deletedObject = 'Deleted Comments';

$lang->comment->confirmDeleteSingle = 'Do you want to delete this comment?';
$lang->comment->confirmDeletePre    = 'Do you want to delete previous comments?';
$lang->comment->confirmPassSingle   = 'Do you want to pass this comment?';
$lang->comment->confirmPassPre      = 'Do you want to pass previous comments? ';

$lang->comment->statusList[0] = 'Not Reviewed';
$lang->comment->statusList[1] = 'Reviewed';

$lang->message->replyItem   = "<dd><strong>%s</strong> replied on <em>%s</em> about %s</dd>";
$lang->comment->replyItem   = "<dd><strong>%s</strong> replied on <em>%s</em> about %s</dd>";
$lang->message->messageItem = "<dd><strong>%s</strong> posted on <em>%s</em> about %s</dd>";

$lang->message->replySubject = 'Admin %s replied.';
