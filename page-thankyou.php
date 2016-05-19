<?php 
  
//Wordpress Header
get_header();

//////////////////////////////////////////////////////////////////////////////////////////////////////
// ++++++++++++++++++++++  SEND GRID LIBRARY  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//////////////////////////////////////////////////////////////////////////////////////////////////////

require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/lib/sendgrid.v.3.2.0/sendgrid-php.php');

//////////////////////////////////////////////////////////////////////////////////////////////////////
// +++++++++++++++++  DATABASE CONFIGURATION  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//////////////////////////////////////////////////////////////////////////////////////////////////////

// configuration
$dbtype     = "mysql";
$dbname     = "omed_wbmarketing";

/*
$dbhost     = "localhost";
$dbuser     = "root";
$dbpass     = "";
*/

$dbhost     = "192.254.176.104";
$dbuser     = "omed_wbcwebuser";
$dbpass     = "?*X!vJAgPrG8";

// database connection
try
{
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
}
catch (PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}

//////////////////////////////////////////////////////////////////////////////////////////////////////

$executeEmailSend = false;

// Email Type & honey pot implementation
if (isset($_POST["ftype"]) && empty($_POST["middleName"]) ):

    $emailType = $_POST["ftype"];
    $executeEmailSend = true;

    // Global Vars
    $firstName              = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    $lastName               = filter_var($_POST['lname'], FILTER_SANITIZE_STRING);
    $phoneNumber            = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $emailAddress           = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $visitorIP              = $_SERVER["REMOTE_ADDR"];
    //$emailMsg               = filter_var($_POST['emailMsg'], FILTER_SANITIZE_STRING);

    // build the message body  
    $message = '<html><body><table border="0" cellspacing="2" cellpadding="2" width="540">';
    $message .= '<tr><td><b><strong>First Name:</b></strong></td><td>'.$firstName.'</td></tr>';
    $message .= '<tr><td><b><strong>Last Name:</b></strong></td><td>'.$lastName.'</td></tr>';
    $message .= '<tr><td><b><strong>Phone Number:</b></strong></td><td>'.$phoneNumber.'</td></tr>';
    $message .= '<tr><td><b><strong>Email:</b></strong></td><td>'.$emailAddress.'</td></tr>';


    switch ($emailType) {

        case "xxx":
        
            //$toEmail              = array("foo@bar.com", "another@another.com", "other@other.com");
            $emailSubject           = "XXXXX Request";
            $pageConfirmationTitle  = "Thank you for your interest!";
            $pageConfirmationMsg    = "We have received your information and a member of our team ";
            $pageConfirmationMsg    .= "will be in touch with you soon.";

        break;

        case "rxform":

            $toEmail                = array("healthplansolutions@wordandbrown.com", "marketing@wordandbrown.com");
            $emailSubject           = "Get More Information";
            $pageConfirmationTitle  = "THANK YOU";
            //$pageConfirmationMsg    = "We have received your information and a member of our team ";
            //$pageConfirmationMsg    .= "will be in touch with you soon.";

            $rxStateSelection       = filter_var($_POST['rxStateSelection'], FILTER_SANITIZE_STRING);

            //message body
            $message .= '<tr><td><b><strong>State:</b></strong></td><td>'.$rxStateSelection.'</td></tr>';

        break;
        
    }

    // end message body
    //$message .= '<tr><td><b><strong>Message:</b></strong></td><td>'.$emailMsg.'</td></tr>';
    $message .= '<tr><td colspan="2">--------------------------------------------</td></tr>';
    $message .= '<tr><td><b><strong>Visitor IP:</b></strong></td><td>'.$visitorIP.'</td></tr>';
    $message .= '</table></body></html>';

    ///////////////////////////////////////////////////////////////////
    // send email
    ///////////////////////////////////////////////////////////////////

    $sendgrid = new SendGrid('wordandbrown', 'marketing2015!');
    $email = new SendGrid\Email();

    $email
        //->addTo('') // for individual email
        ->setTos($toEmail)
        ->setFrom('no-reply@wordandbrown.com')
        ->setSubject($emailSubject)
        ->setHtml($message)
    ;

    $result = $sendgrid->send($email);
    //var_dump($result);    


    ////////////////////////////////////////////////////////////////////////
    // stores lead in database

    $campaign_id = "9"; //WBGA Corporate Site

    //insert into main leads table
    $stmt = $conn->prepare("INSERT INTO master_marketing_leads (
                         campaign_id,
                         sub_type,
                         first_name,
                         last_name,
                         email,
                         phone,
                         state,
                         ip) 
                      VALUES (
                         :campaign_id,
                         :sub_type,
                         :first_name,
                         :last_name,
                         :email,
                         :phone,
                         :state,
                         :ip)");

    $stmt->bindParam(':campaign_id', $campaign_id, PDO::PARAM_INT, 11);
    $stmt->bindParam(':sub_type', $emailType, PDO::PARAM_STR, 100);
    $stmt->bindParam(':first_name', $firstName, PDO::PARAM_STR, 100);
    $stmt->bindParam(':last_name', $lastName, PDO::PARAM_STR, 100);
    $stmt->bindParam(':email', $emailAddress, PDO::PARAM_STR, 100);
    $stmt->bindParam(':phone', $phoneNumber, PDO::PARAM_STR, 100);
    $stmt->bindParam(':state', $rxStateSelection, PDO::PARAM_STR, 100);
    $stmt->bindParam(':ip', $visitorIP, PDO::PARAM_STR, 100);
    $stmt->execute();

    $conn = null; 

else:

    header('Location: /');
    exit();

endif;

?>
    <section id="thankyou">

        <div class="row">
          <div class="message-container small-12 columns">
            <div class="message">
              <h1><?php echo $pageConfirmationTitle ?></h1>
              <h2>for your interest in The Word &amp; Brown Companies.</h2>
              <div class="divider"></div>
              <h2>A representative will be in touch shortly.</h2>
            </div>
          </div>
        </div>

    </section>

<?php 
  get_footer();
?>