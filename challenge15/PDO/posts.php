
<?php
require_once __DIR__ . "/connect.php";
require_once __DIR__ . "/autoload.php";
$errors = ['cover_image_url' => false, 'image_url' => false, 'main_title' => false, 'telephone_number' => false, 'subtitle' => false, 'location' => false, 'state' => false, 'about_you' => false, 'description' => false, 'company_description' => false, 'linkedin' => false, 'facebook' => false, 'twitter' => false, 'google_plus' => false, 'image_url_2' => false, 'image_url_3' => false, 'description_2' => false, 'description_3' => false];
$validated = true;
// Function for validate
function validateaboutInput($data)
{
    return htmlspecialchars(trim($data));
}

function CoverImageUrl($cover_image_url)
{
    return filter_var($cover_image_url, FILTER_VALIDATE_URL);
}

function validateImageUrl($image_url)
{
    return filter_var($image_url, FILTER_VALIDATE_URL);
}
function validateImageUrl2($image_url_2)
{
    return filter_var($image_url_2, FILTER_VALIDATE_URL);
}
function validateImageUrl3($image_url_3)
{
    return filter_var($image_url_3, FILTER_VALIDATE_URL);
}

function validateLinkedin($linkedin)
{
    return filter_var($linkedin, FILTER_VALIDATE_URL);
}
function validateFacebook($facebook)
{
    return filter_var($facebook, FILTER_VALIDATE_URL);
}
function validateTwitter($twitter)
{
    return filter_var($twitter, FILTER_VALIDATE_URL);
}
function validateGoogle($google_plus)
{
    return filter_var($google_plus, FILTER_VALIDATE_URL);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cover_image_url = CoverImageUrl($_POST["cover_image_url"]);
    $image_url = validateImageUrl($_POST["image_url"]);
    $image_url_2 = validateImageUrl2($_POST["image_url_2"]);
    $image_url_3 = validateImageUrl3($_POST["image_url_3"]);
    $main_title = $_POST["main_title"];
    $subtitle = $_POST["subtitle"];
    $telephone_number = $_POST["telephone_number"];
    $about_you = $_POST["about_you"];
    $location = $_POST["location"];
    $state = $_POST["state"];
    $description = $_POST["description"];
    $description_2 = $_POST["description_2"];
    $description_3 = $_POST["description_3"];
    $company_description = $_POST["company_description"];
    $linkedin = validateLinkedin($_POST["linkedin"]);
    $facebook = validateFacebook($_POST["facebook"]);
    $twitter = validateTwitter($_POST["twitter"]);
    $google_plus = validateGoogle($_POST["google_plus"]);

    // Validate

    if (empty($_POST['cover_image_url'])) {
        $errors['cover_image_url'] = "<p style='color:red;'>Please enter the cover image URL.</p>";
        $validated = false;
    }

    if (empty($_POST['image_url'])) {
        $errors['image_url'] =  "<p style='color:red;'>Please enter the image URL.</p>";
        $validated = false;
    }
    if (empty($_POST['image_url_2'])) {
        $errors['image_url_2'] =  "<p style='color:red;'>Please enter the image URL.</p>";
        $validated = false;
    }
    if (empty($_POST['image_url_3'])) {
        $errors['image_url_3'] =  "<p style='color:red;'>Please enter the image URL.</p>";
        $validated = false;
    }

    if (empty($_POST['main_title'])) {
        $errors['main_title'] =  "<p style='color:red;'>Please enter the main title of the page.</p>";
        $validated = false;
    } elseif (strlen($main_title) > 35) {
        $errors['main_title'] =  "<p style='color:red;'>Main title should be maximum 35 characters long.</p>";
        $validated = false;
    }

    if (empty($_POST['subtitle'])) {
        $errors['subtitle'] =  "<p style='color:red;'>Please enter the subtitle.</p>";
        $validated = false;
    } elseif (strlen($_POST['subtitle']) > 80) {
        $errors['subtitle'] =  "<p style='color:red;'>Subtitle should be maximum 80 characters long.</p>";
        $validated = false;
    }

    if (empty($_POST['about_you'])) {
        $errors['about_you'] = "<p style='color:red;'>Please enter something about you.</p>";
        $validated = false;
    } elseif (strlen($about_you) > 155) {
        $errors['about_you'] =  "<p style='color:red;'>Something about you should be maximum 155 characters long.</p>";
        $validated = false;
    }

    if (empty($_POST['telephone_number'])) {
        $errors['telephone_number'] =  "<p style='color:red;'>Please enter your telephone number.</p>";
        $validated = false;
    } elseif (!ctype_digit($_POST['telephone_number']) || strlen($telephone_number) > 10) {
        $errors['telephone_number'] =  "<p style='color:red;'>Please enter a valid telephone number (maximum 10 digits).</p>";
        $validated = false;
    }

    if (empty($_POST['location'])) {
        $errors['location'] = "<p style='color:red;'>Please enter the location. </p>";
        $validated = false;
    }

    if (empty($_POST['state'])) {
        $errors['state'] = "<p style='color:red;'>Please choose one option (services or products).</p>";
        $validated = false;
    }

    if (empty($description)) {
        $errors['description'] =  "<p style='color:red;'>Please enter description.</p>";
        $validated = false;
    } elseif (strlen($description) < 55  || strlen($description) > 2000) {
        $errors['description'] = "<p style='color:red;'>Description should be between 55 and 2000 characters long</p>";
        $validated = false;
    }
    if (empty($description_2)) {
        $errors['description_2'] =  "<p style='color:red;'>Please enter description 2.</p>";
        $validated = false;
    } elseif (strlen($description_2) < 55  || strlen($description_2) > 2000) {
        $errors['description_2'] = "<p style='color:red;'>Description 2 should be between 55 and 2000 characters long</p>";
        $validated = false;
    }
    if (empty($description_3)) {
        $errors['description_3'] =  "<p style='color:red;'>Please enter description 3.</p>";
        $validated = false;
    } elseif (strlen($description_3) < 55  || strlen($description_3) > 2000) {
        $errors['description_3'] = "<p style='color:red;'>Description 3 should be between 55 and 2000 characters long</p>";
        $validated = false;
    }

    if (empty($company_description)) {
        $errors['company_description'] = "<p style='color:red;'>Please enter description about company.</p>";
        $validated = false;
    } elseif (strlen($company_description) > 130) {
        $errors['company_description'] = "<p style='color:red;'>Company description should be maximum 130 characters long.</p>";
        $validated = false;
    }

    if (empty($_POST['linkedin']) && !filter_var($linkedin, FILTER_VALIDATE_URL)) {
        $errors['linkedin'] =  "<p style='color:red;'>Please enter a valid LinkedIn URL.</p>";
        $validated = false;
    }

    if (empty($_POST['facebook']) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
        $errors['facebook'] =  "<p style='color:red;'>Please enter a valid Facebook URL.</p>";
        $validated = false;
    }
    if (empty($twitter) && !filter_var($twitter, FILTER_VALIDATE_URL)) {
        $errors['twitter'] =  "<p style='color:red;'>Please enter a valid Twitter URL.</p>";
        $validated = false;
    }

    if (empty($_POST['google_plus']) && !filter_var($google_plus, FILTER_VALIDATE_URL)) {
        $errors['google_plus'] =  "<p style='color:red;'>Please enter a valid Google+ URL.</p>";
        $validated = false;
    }

    if ($validated) {

        $sql = "INSERT INTO users (main_title,cover_img_url,img_url,subtitle,telephone_number,about_you,location,state,description,company_description,linkedin,facebook,twitter,google_plus,img_url_2,description_2,img_url_3,description_3) VALUES (:main_title,:cover_image_url, :image_url,:subtitle,:telephone_number,:about_you,:location,:state,:description,:company_description,:linkedin,:facebook,:twitter,:google_plus,:image_url_2,:description_2,:image_url_3,:description_3)";
        $pdo_statement = $conObj->prepare($sql);
        $pdo_statement->bindParam(":main_title", $main_title, PDO::PARAM_STR);
        $pdo_statement->bindParam(":cover_image_url", $cover_image_url, PDO::PARAM_STR);
        $pdo_statement->bindParam(":image_url", $image_url, PDO::PARAM_STR);
        $pdo_statement->bindParam(":subtitle", $subtitle, PDO::PARAM_STR);
        $pdo_statement->bindParam(":telephone_number", $telephone_number, PDO::PARAM_STR);
        $pdo_statement->bindParam(":about_you", $about_you, PDO::PARAM_STR);
        $pdo_statement->bindParam(":location", $location, PDO::PARAM_STR);
        $pdo_statement->bindParam(":state", $state, PDO::PARAM_STR);
        $pdo_statement->bindParam(":description", $description, PDO::PARAM_STR);
        $pdo_statement->bindParam(":company_description", $company_description, PDO::PARAM_STR);
        $pdo_statement->bindParam(":linkedin", $linkedin, PDO::PARAM_STR);
        $pdo_statement->bindParam(":facebook", $facebook, PDO::PARAM_STR);
        $pdo_statement->bindParam(":twitter", $twitter, PDO::PARAM_STR);
        $pdo_statement->bindParam(":google_plus", $google_plus, PDO::PARAM_STR);
        $pdo_statement->bindParam(":image_url_2", $image_url_2, PDO::PARAM_STR);
        $pdo_statement->bindParam(":description_2", $description_2, PDO::PARAM_STR);
        $pdo_statement->bindParam(":image_url_3", $image_url_3, PDO::PARAM_STR);
        $pdo_statement->bindParam(":description_3", $description_3, PDO::PARAM_STR);
        $pdo_statement->execute();
        $sql = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
        $pdo_statement = $conObj->prepare($sql);
        $pdo_statement->execute();
        $user = $pdo_statement->fetch(PDO::FETCH_ASSOC);
        $id = $user['id'];
        header("Location: third.php?id=$id");
        exit();
    }
}
