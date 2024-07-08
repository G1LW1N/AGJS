<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="Appform.css">
        <title>Why Adopt a Pet Friend at AGJS?</title>
    </head>
    <body>
        <section class="header" id="home">
            <nav>
                <a href="homepage.php"> <img src="pictures/AGJS.png" alt=""></a>
        
                
        
                <div class="nav-links">
                    <i class='bx bx-menu-alt-right'></i>
                    
                <ul>
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="homepage.html #pets"> Our pets</a></li>
                        <li><a href="homepage.html #adopt">Adopt now!</a></li>
                        <li><a href="homepage.html #about">About Us</a></li>
                                    
                    
                    </ul>
        
                </div>
            </nav>
        
            <div class="text-box">
                <h1>Application Form</h1>
               
            </div>           
        
            </section>
           <header>
                
          </header>
          
    <div class="form-container">
        <h1>Adoption Application Form</h1>
        <form action="submit_form.php" method="POST" enctype="multipart/form-data">
            <section>
                <h2>Applicant's Info</h2>
                <label for="first_name">First Name*</label>
                <input type="text" id="first_name" name="first_name" required>

                <label for="last_name">Last Name*</label>
                <input type="text" id="last_name" name="last_name" required>

                <label for="address">Address*</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Phone*</label>
                <input type="text" id="phone" name="phone" required>

                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>

                <label for="birth_date">Birth Date*</label>
                <input type="date" id="birth_date" name="birth_date" required>

                <label for="occupation">Occupation</label>
                <input type="text" id="occupation" name="occupation">

                <label for="company">Company/Business Name*</label>
                <input type="text" id="company" name="company" required>

                <label for="social_media">Social Media Profile</label>
                <input type="text" id="social_media" name="social_media">

                <label for="status">Status*</label>
                <select id="status" name="status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Others">Others</option>
                </select>

                <label for="pronouns">Pronouns*</label>
                <select id="pronouns" name="pronouns" required>
                    <option value="She/her">She/her</option>
                    <option value="He/him">He/him</option>
                    <option value="They/them">They/them</option>
                </select>

                <label for="adopt_paws">What prompted you to adopt from AGJS?*</label>
                <select id="adopt_paws" name="adopt_paws" required>
                    <option value="Friends">Friends</option>
                    <option value="Website">Website</option>
                    <option value="Social Media">Social Media</option>
                    <option value="Other">Other</option>
                </select>

                <label for="adopt_before">Have you adopted from AGJS before?*</label>
                <select id="adopt_before" name="adopt_before" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <h3>Alternate Contact</h3>
                <label for="alt_first_name">First Name*</label>
                <input type="text" id="alt_first_name" name="alt_first_name" required>

                <label for="alt_last_name">Last Name*</label>
                <input type="text" id="alt_last_name" name="alt_last_name" required>

                <label for="relationship">Relationship*</label>
                <input type="text" id="relationship" name="relationship" required>

                <label for="alt_phone">Phone*</label>
                <input type="text" id="alt_phone" name="alt_phone" required>

                <label for="alt_email">Email*</label>
                <input type="email" id="alt_email" name="alt_email" required>
            </section>

            <section>
                <h2>Questionnaire</h2>
                <label for="looking_to_adopt">What are you looking to adopt?*</label>
                <select id="looking_to_adopt" name="looking_to_adopt" required>
                    <option value="Cat">Cat</option>
                    <option value="Dog">Dog</option>
                    <option value="Both">Both</option>
                    <option value="Not decided">Not decided</option>
                </select>

                <label for="specific_shelter_animal">Are you applying to adopt a specific shelter animal?*</label>
                <select id="specific_shelter_animal" name="specific_shelter_animal" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="ideal_pet">Describe your ideal pet*</label>
                <textarea id="ideal_pet" name="ideal_pet" required></textarea>

                <label for="building_type">What type of building do you live in?*</label>
                <select id="building_type" name="building_type" required>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Condo">Condo</option>
                    <option value="Other">Other</option>
                </select>

                <label for="rent">Do you rent?*</label>
                <select id="rent" name="rent" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="move_pet">What happens to your pet if or when you move?*</label>
                <textarea id="move_pet" name="move_pet" required></textarea>

                <label for="live_with">Who do you live with?*</label>
                <select id="live_with" name="live_with" required>
                    <option value="Living alone">Living alone</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Parents">Parents</option>
                    <option value="Children over 18">Children over 18</option>
                    <option value="Children below 18">Children below 18</option>
                    <option value="Relatives">Relatives</option>
                    <option value="Roommate(s)">Roommate(s)</option>
                </select>

                <label for="allergic">Are any members of your household allergic to animals?*</label>
                <select id="allergic" name="allergic" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="responsible_care">Who will be responsible for feeding, grooming, and generally caring for your pet?*</label>
                <input type="text" id="responsible_care" name="responsible_care" required>

                <label for="financially_responsible">Who will be financially responsible for your pet’s needs?*</label>
                <input type="text" id="financially_responsible" name="financially_responsible" required>

                <label for="pet_care_emergency">Who will look after your pet if you go on vacation or in case of emergency?*</label>
                <input type="text" id="pet_care_emergency" name="pet_care_emergency" required>

                <label for="hours_alone">How many hours in an average workday will your pet be left alone?*</label>
                <input type="number" id="hours_alone" name="hours_alone" required>

                <label for="introduce_pet">What steps will you take to introduce your new pet to his/her new surroundings?*</label>
                <textarea id="introduce_pet" name="introduce_pet" required></textarea>

                <label for="family_support">Does everyone in the family support your decision to adopt a pet?*</label>
                <select id="family_support" name="family_support" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="explain_support">Please explain*</label>
                <textarea id="explain_support" name="explain_support" required></textarea>

                <label for="other_pets">Do you have other pets?*</label>
                <select id="other_pets" name="other_pets" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <label for="past_pets">Have you had pets in the past?*</label>
                <select id="past_pets" name="past_pets" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <h3>Photos of Your Home</h3>
                <label for="front_house">Front of the house</label>
                <input type="file" id="front_house" name="front_house" accept="image/*">

                <label for="street_photo">Street photo</label>
                <input type="file" id="street_photo" name="street_photo" accept="image/*">

                <label for="living_room">Living room</label>
                <input type="file" id="living_room" name="living_room" accept="image/*">

                <label for="dining_area">Dining area</label>
                <input type="file" id="dining_area" name="dining_area" accept="image/*">

                <label for="kitchen">Kitchen</label>
                <input type="file" id="kitchen" name="kitchen" accept="image/*">

                <label for="bedrooms">Bedroom/s (if your pet will have access)</label>
                <input type="file" id="bedrooms" name="bedrooms" accept="image/*">

                <label for="windows">Windows (if adopting a cat)</label>
                <input type="file" id="windows" name="windows" accept="image/*">

                <label for="front_backyard">Front & backyard (if adopting a dog)</label>
                <input type="file" id="front_backyard" name="front_backyard" accept="image/*">

                <label for="valid_id">Upload a valid ID*</label>
                <input type="file" id="valid_id" name="valid_id" accept="image/*" required>

                <h3>Interview & Visitation</h3>
                <label for="zoom_date">Preferred date for Zoom interview*</label>
                <input type="date" id="zoom_date" name="zoom_date" required>

                <label for="zoom_time">Preferred time for Zoom interview*</label>
                <input type="time" id="zoom_time" name="zoom_time" required>

                <label for="visit_shelter">Will you be able to visit the shelter for the meet-and-greet?*</label>
                <select id="visit_shelter" name="visit_shelter" required>
                    <option value=""></option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>

                <button type="submit">Submit</button>
            </section>
        </form>
    </div>
</body>
</html>
