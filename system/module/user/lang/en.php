<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The user module english file of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
$lang->user->common    = 'User';
$lang->user->setting   = 'User Setting';

$lang->user->id        = 'ID';
$lang->user->account   = 'Account';
$lang->user->admin     = 'Admin';
$lang->user->oldPwd    = 'Old Password';
$lang->user->password  = 'Password';
$lang->user->password2 = 'Repeat Password';
$lang->user->realname  = 'Name';
$lang->user->nickname  = 'Nick Name';
$lang->user->avatar    = 'Avatar';
$lang->user->birthyear = 'Birth Year';
$lang->user->birthday  = 'Birthday';
$lang->user->gender    = 'Gender';
$lang->user->email     = 'Email';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = 'Yahoo';
$lang->user->gtalk     = 'Gtalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = 'Mobile';
$lang->user->phone     = 'Phone';
$lang->user->company   = 'Company';
$lang->user->address   = 'Address';
$lang->user->zipcode   = 'Zip Code';
$lang->user->join      = 'Join Date';
$lang->user->visits    = 'Visits';
$lang->user->ip        = 'IP';
$lang->user->last      = 'Last Login';
$lang->user->status    = 'Status';
$lang->user->captcha   = 'Verification Code';
$lang->user->alert     = 'Your account has been disabled.';
$lang->user->privilege = 'Privilege';
$lang->user->certified = 'Certified';

$lang->user->all             = 'All Users';
$lang->user->list            = 'User List';
$lang->user->view            = "User Profile";
$lang->user->create          = "Add a User";
$lang->user->edit            = "Edit";
$lang->user->operate         = 'Action';
$lang->user->changePassword  = "Change Password";
$lang->user->changeEmail     = "Email Settings";
$lang->user->recoverPassword = "Forgot Password";
$lang->user->newPassword     = "New Password";
$lang->user->update          = "Edit Users";
$lang->user->browse          = "View Users";
$lang->user->deny            = "Access denied.";
$lang->user->confirmDelete   = "Do you want to delete it?";
$lang->user->confirmActivate = "Do you want to activate it?";
$lang->user->relogin         = "Login again";
$lang->user->asGuest         = "Guest Visit";
$lang->user->goback          = "Return";
$lang->user->allUsers        = 'All Users';
$lang->user->submit          = "Submit";
$lang->user->forbid          = 'Disable';
$lang->user->activate        = 'Activate';
$lang->user->pullWechatFans  = 'Update wechat fans data';
$lang->user->adminlog        = 'Admin Log';
$lang->user->checkEmail      = 'Email Binding';
$lang->user->getEmailCode    = 'Get verification code';
$lang->user->getCertifyCode  = 'Get certification code';
$lang->user->setEmail        = 'Change Email';
$lang->user->setMobile       = 'Configure Mobile';
$lang->user->newEmail        = 'Email';
$lang->user->rank            = 'Ranking';
$lang->user->score           = 'Points';
$lang->user->myScore         = 'Points';
$lang->user->buyScore        = 'Refill Points';
$lang->user->addScore        = 'Reward';
$lang->user->reduceScore     = 'Deduct';
$lang->user->bindAccount     = 'Account Binding';
$lang->user->batchDelete     = 'Batch Delete';
$lang->user->deleteHistory   = 'Delete account and history';
$lang->user->question        = 'Security Question';
$lang->user->answer          = 'Answer';
$lang->user->checkContact    = 'Check Contact';
$lang->user->certifyNow      = 'Go certify';

$lang->user->checkMobile        = 'Check mobile';
$lang->user->checkMobileSuccess = 'Check mobile successfully';

$lang->user->type        = 'Type';
$lang->user->profile     = 'Profile';
$lang->user->editProfile = 'Edit';
$lang->user->thread      = 'Thread';
$lang->user->messages    = 'Message';
$lang->user->reply       = 'Reply';
$lang->user->submission  = 'Submission';

$lang->user->userHistory       = "User History";
$lang->user->threadHistory     = "Post";
$lang->user->replyHistory      = "Reply";
$lang->user->commentHistory    = "Comment";
$lang->user->messageHistory    = "Message";
$lang->user->orderHistory      = "Order";
$lang->user->addressHistory    = "Address";
$lang->user->submissionHistory = "Submission";

$lang->user->message = new stdclass();
$lang->user->message->mine = "Message <span class='label label-badge text-latin'>%s</span>";
$lang->user->message->from = 'from';

$lang->user->inputUserName       = 'Enter user name';
$lang->user->inputAccountOrEmail = 'Enter account or Email';
$lang->user->inputPassword       = 'Enter Password';
$lang->user->searchUser          = 'Search';

$lang->user->errorDeny         = "Sorry, you have no access to『<b>%s</b>』->『<b>%s</b>』. Please contact your Admin. <br/> You will be directed to Homepage in 5 sec...";
$lang->user->noModuleDeny      = "Sorry, the site which you are visiting has not enabled 『<b>%s</b>』module, Please contact your Admin. <br/> You will be directed to Homepage in 5 sec...";
$lang->user->loginFailed       = "Login failed. Please check your user name and password.";
$lang->user->identifyFailed    = "Verification failed. Please check your password.";
$lang->user->locked            = "Account has been locked. Please try to login in %s.";
$lang->user->lockedForEver     = "Account has been permanently deactivated.";
$lang->user->lblRegistered     = 'Congrats! You have registered with us!';
$lang->user->forbidSuccess     = 'Deactivated!';
$lang->user->forbidFail        = 'Deactivation failed.';
$lang->user->activateSuccess   = 'Activated!';
$lang->user->activateFail      = 'Activation failed.';
$lang->user->pullSuccess       = 'Get wetchar user successfully';
$lang->user->wrongPwd          = 'Wrong Password';
$lang->user->checkEmailSuccess = 'Done!';
$lang->user->sendRecoverEmail  = 'Send reset Email.';
$lang->user->resetSuccess      = 'Password has been reset. Please login with your new password.';

$lang->user->forbidUser = 'Deactivate';
$lang->user->forbidDate = array();
$lang->user->forbidDate['1']    = '1 Day';
$lang->user->forbidDate['2']    = '2 Days';
$lang->user->forbidDate['3']    = '3 Days';
$lang->user->forbidDate['7']    = '1 Week';
$lang->user->forbidDate['30']   = '1 Month';
$lang->user->forbidDate['3000'] = 'Permanent';

$lang->user->adminList['super']  = 'Super Admin';
$lang->user->adminList['common'] = 'Admin';
$lang->user->adminList['no']     = 'User';

$lang->user->accountTypeList['no']      = 'Front Account';
$lang->user->accountTypeList['common']  = 'Backend Account';

$lang->user->genderList = new stdclass();
$lang->user->genderList->m = 'Male';
$lang->user->genderList->f = 'Female';
$lang->user->genderList->u = 'unknown';

$lang->user->register  = new stdclass();
$lang->user->register->common      = 'Register';
$lang->user->register->instant     = 'Register Now';
$lang->user->register->welcome     = 'Welcome to register!';
$lang->user->register->why         = 'Register with us to enjoy more!';
$lang->user->register->lblUserInfo = 'User Profile';
$lang->user->register->lblAccount  = 'must be a combination of letter and numbers, 3 charaters at least.';
$lang->user->register->lblPassword = 'must be a combination of letter and numbers, 6 charaters at least.';
$lang->user->register->login       = 'Login';
$lang->user->register->loginTip    = 'Already have an Account';

$lang->user->notice = new stdclass();
$lang->user->notice->password = 'must be a combination of letter and numbers, 6 charaters at least.';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "Login";
$lang->user->login->welcome = 'Account';
$lang->user->login->why     = 'Welcome to login!';

$lang->user->resetPassword = new stdclass();
$lang->user->resetPassword->common  = "Reset Password";
$lang->user->resetPassword->success = "Reset password link has been sent to your Email.";
$lang->user->resetPassword->failed  = "Wrong security Email address. Please enter again.";

$lang->user->resetMail = new stdclass();
$lang->user->resetMail->subject  = 'Reset Password';
$lang->user->resetMail->account  = 'Hello,'; 
$lang->user->resetMail->resetUrl = 'You have requested to reset your password at %s（%s）. Pleae click the link belwo and reset your passwor.'; 
$lang->user->resetMail->notice   = 'This is automatically set by the sysytem. Please do not reply.(Ignore this Email, if you do not do anthing.)';

$lang->user->oauth = new stdclass();
$lang->user->oauth->common       = 'Open Login';
$lang->user->oauth->provider     = 'Service Provider';
$lang->user->oauth->verification = 'Verification';
$lang->user->oauth->widget       = 'Widget';
$lang->user->oauth->callbackURL  = 'Call Back URL';

$lang->user->oauth->sina = new stdclass();
$lang->user->oauth->sina->clientID     = 'App Key';
$lang->user->oauth->sina->clientSecret = 'App Secret';

$lang->user->oauth->qq = new stdclass();
$lang->user->oauth->qq->clientID     = 'APP ID';
$lang->user->oauth->qq->clientSecret = 'APP KEY';

$lang->user->oauth->providers['sina'] = 'Weibo';
$lang->user->oauth->providers['qq']   = 'QQ';

$lang->user->oauth->typeList['sina']   = 'Weibo User';
$lang->user->oauth->typeList['qq']     = 'QQ User';
$lang->user->oauth->typeList['wechat'] = 'Wechat User';

$lang->user->oauth->lblWelcome       = 'Open Login';
$lang->user->oauth->lblOtherLogin    = 'Other Login';
$lang->user->oauth->lblProfile       = "Register a User";
$lang->user->oauth->lblBind          = "User Binding";
$lang->user->oauth->lblUnbind        = "Remove Binding";
$lang->user->oauth->lblUnbindSuccess = "Binding removed!";
$lang->user->oauth->lblUnbindFailed  = "Remove bnding failed!";
$lang->user->oauth->lblBindFailed    = "User binding failed!";
$lang->user->oauth->ignore           = "Ignore";

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>Locked</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>Deactivated</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>Normal</label>";

$lang->user->control = new stdclass();
$lang->user->control->common      = 'User Center';
$lang->user->control->welcome     = 'Hello, <strong>%s</strong>';
$lang->user->control->lblPassword = "Leave it blank, if you don't want to change your password.";

$lang->user->navGroups = new stdclass();
$lang->user->navGroups->user    = 'My Profile';
$lang->user->navGroups->order   = 'My Order';
$lang->user->navGroups->message = 'My Post';

$lang->user->control->menus['profile']    = '<i class="icon-user"></i> Profile <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus['message']    = '<i class="icon-comments-alt"></i> Message <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus['score']      = '<i class="icon-sun"></i> Points <i class="icon-chevron-right"></i>|user|score';
$lang->user->control->menus['recharge']   = '<i class="icon-bolt"></i> Refill Points <i class="icon-chevron-right"></i>|score|buyscore';
$lang->user->control->menus['order']      = '<i class="icon-shopping-cart"></i> Order <i class="icon-chevron-right"></i>|order|browse';
$lang->user->control->menus['address']    = '<i class="icon-map-marker"> </i> Address <i class="icon-chevron-right"></i>|address|browse';
$lang->user->control->menus['thread']     = '<i class="icon-comment"></i> Thread <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus['reply']      = '<i class="icon-reply"></i> Reply <i class="icon-chevron-right"></i>|user|reply';
$lang->user->control->menus['submission'] = '<i class="icon-envelope"></i> Submission <i class="icon-chevron-right"></i>|article|submission'; 

$lang->user->log = new stdclass();
$lang->user->log->common = 'Log';
$lang->user->log->list   = 'Login Log';

$lang->user->log->id          = 'ID';
$lang->user->log->account     = 'Account';
$lang->user->log->browser     = 'Browser';
$lang->user->log->ip          = 'IP Address';
$lang->user->log->location    = 'Location';
$lang->user->log->date        = 'Login Time';
$lang->user->log->desc        = 'Login Result';

$lang->user->ipDenied             = 'Login IP is restricted.Please follow instructions.';
$lang->user->locationDenied       = 'Login location is restricted. Please follow instructions.';
$lang->user->loginLocationChanged = 'Login address is changed. Please follow instructions.';
$lang->user->verifyFail           = 'Please enter the correct verification code.';
$lang->user->confirmUnbind        = 'Do you want to remove binding?';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->password   = 'Please enter your password.';
$lang->user->placeholder->verifyCode = 'Please enter verification code received by Email.';

$lang->user->filterUsernameSensitive = 'Username Filter';

$lang->user->filterUsernameSensitiveList = array(); 
$lang->user->filterUsernameSensitiveList['open']  = 'open';
$lang->user->filterUsernameSensitiveList['close'] = 'close';

$lang->user->usernameSensitive    = 'Sensitive Username';
$lang->user->usernameIsSensitive  = 'Username can not be sensitive, please change it';
$lang->user->usernameSensitiveTip = 'Mutiple sensitive usernames should be devided by quote';
