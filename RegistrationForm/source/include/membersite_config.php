<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite1();

//Provide your site name here
$fgmembersite->SetWebsiteName('dreat.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('varun.me96@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/"localhost",
                      /*username*/"root",
                      /*password*/"",
                      /*database name*/"members3",
                      /*table name*/"registered_users");

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey("jKOFLjK0mDRBEb8");

?>