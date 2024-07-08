<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adoption_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO applicants (first_name, last_name, address, phone, email, birth_date, occupation, company, social_media, status, pronouns, adopt_paws, adopt_before, alt_first_name, alt_last_name, relationship, alt_phone, alt_email, looking_to_adopt, specific_shelter_animal, ideal_pet, building_type, rent, move_pet, live_with, allergic, responsible_care, financially_responsible, pet_care_emergency, hours_alone, introduce_pet, family_support, explain_support, other_pets, past_pets, zoom_date, zoom_time, visit_shelter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssssssssssssssssssssssssssssssissss", $first_name, $last_name, $address, $phone, $email, $birth_date, $occupation, $company, $social_media, $status, $pronouns, $adopt_paws, $adopt_before, $alt_first_name, $alt_last_name, $relationship, $alt_phone, $alt_email, $looking_to_adopt, $specific_shelter_animal, $ideal_pet, $building_type, $rent, $move_pet, $live_with, $allergic, $responsible_care, $financially_responsible, $pet_care_emergency, $hours_alone, $introduce_pet, $family_support, $explain_support, $other_pets, $past_pets, $zoom_date, $zoom_time, $visit_shelter);

// Set parameters and execute
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$birth_date = $_POST['birth_date'];
$occupation = $_POST['occupation'];
$company = $_POST['company'];
$social_media = $_POST['social_media'];
$status = $_POST['status'];
$pronouns = $_POST['pronouns'];
$adopt_paws = $_POST['adopt_paws'];
$adopt_before = $_POST['adopt_before'];
$alt_first_name = $_POST['alt_first_name'];
$alt_last_name = $_POST['alt_last_name'];
$relationship = $_POST['relationship'];
$alt_phone = $_POST['alt_phone'];
$alt_email = $_POST['alt_email'];
$looking_to_adopt = $_POST['looking_to_adopt'];
$specific_shelter_animal = $_POST['specific_shelter_animal'];
$ideal_pet = $_POST['ideal_pet'];
$building_type = $_POST['building_type'];
$rent = $_POST['rent'];
$move_pet = $_POST['move_pet'];
$live_with = $_POST['live_with'];
$allergic = $_POST['allergic'];
$responsible_care = $_POST['responsible_care'];
$financially_responsible = $_POST['financially_responsible'];
$pet_care_emergency = $_POST['pet_care_emergency'];
$hours_alone = $_POST['hours_alone'];
$introduce_pet = $_POST['introduce_pet'];
$family_support = $_POST['family_support'];
$explain_support = $_POST['explain_support'];
$other_pets = $_POST['other_pets'];
$past_pets = $_POST['past_pets'];
$zoom_date = $_POST['zoom_date'];
$zoom_time = $_POST['zoom_time'];
$visit_shelter = $_POST['visit_shelter'];

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();


header("Location:choosepet.php");
exit();
?>
