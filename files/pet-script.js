document.addEventListener('DOMContentLoaded', () => {
    const dogsSection = document.getElementById('dogs-section');
    const catsSection = document.getElementById('cats-section');
    const modal = document.getElementById('pet-modal');
    const modalImage = document.getElementById('modal-image');
    const modalName = document.getElementById('modal-name');
    const modalAge = document.getElementById('modal-age');
    const modalGender = document.getElementById('modal-gender');
    const modalDescription = document.getElementById('modal-description');
    const span = document.getElementsByClassName('close')[0];
    const editButton = document.querySelector('.edit-btn');

    // Dog profiles
    const dogProfiles = [
        { name: 'Tiki', age: '3 yrs old', gender: 'Male', description: 'Thanks to a concerned citizen’s report, Tiki was rescued from the threat of being slaughtered for food. He\'s a loving dog ready for a new home.', imageUrl: 'images/tiki.jpg' },
        { name: 'Pumi', age: '3 years old', gender: 'Female', description: 'Pumi was rescued by a celebrity supporter of AGJS who spotted the poor dog inside a barangay pound cage while she was shooting a television show. Pumi is shy and gentle but she is easily startled by loud noises. We are looking for someone who understands that overcoming traumatic life experiences is tough and may take time; someone who can assure Pumi that she will always be safe and that she will never be abandoned.', imageUrl: 'images/pumi.jpg' },
        { name: 'Mita', age: '5 yrs old', gender: 'Female', description: 'AGJS rescued Mita at Ermita Center after she had wounds in some parts of her body. A small dog who is quiet and adorably well-behaved, Mita is an Aspin that shows discreet affection and is perfect for someone who wants a well-rounded, well-behaved companion.', imageUrl: 'images/mita.jpg' },
        { name: 'Magdalena', age: '2 yrs old', gender: 'Female', description: 'Magdalena or sometimes we called her Magda was rescued from Gilmore at Carmel of St. Therese of the Child Jesus along with her 4 babies namely: Josiah, Jonas, Ezra, and Ezekiel. She’s a small Aspin with a bob tail. Magda is a friendly and well-behaved dog that fits perfectly into any house.', imageUrl: 'images/magdalena.jpg' },
        { name: 'Banoi', age: '5 years old', gender: 'Female', description: 'When Banoi shows you her happy face, you will surely be won over with delight. A 5-yr-old Aspin rescued in Marikina City during typhoon Ulysees, Banoi has been through difficulties in her life, but it does not change her friendly temperament. She loves pets and goes crazy for treats. She’s a happy, friendly dog who is also quite chill and not overly needy.', imageUrl: 'images/banoi.jpg' },
        { name: 'Tali', age: '3 yrs old', gender: 'Female', description: 'If you look closely at her before photo, you’ll see a deep line around her neck that looks like a collar. That is in fact a deep laceration caused by a rope tightly wound around her neck. The close-up photos are a bit too graphic to post. No wonder she was cowering inside a box and hiding from our volunteers when she was rescued. Until now, it will take a bit of time and patience for new people to earn her trust.', imageUrl: 'images/tali.jpg' },
        { name: 'Haley', age: '4 yrs old', gender: 'Female', description: 'When Haley, a hit-and-run victim, was found underneath a parked car, our volunteer rescuers were unsure if she would make it. After being treated for her injuries, our shelter vet was unsure if she would walk again. Haley also remained aloof for a while, and we were unsure if she would ever get over her fear. Well, Haley put all our uncertainties to rest by bouncing back and being one of the friendliest dogs at the shelter. We’re sure that she’ll make the best canine companion ever!', imageUrl: 'images/haley.jpg' },
        { name: 'Post', age: '1 year old', gender: 'Male', description: 'Just like a Facebook post by a pal, Post is easy to heart or like. He is a smart, trainable 1-yr-old Aspin who is still a bit skittish in unfamiliar surroundings. But just give him some time and love, and Post will show you his true, affectionate self. Post was recently rescued from a post office and we hope that he doesn’t wait too long for his forever home. He desperately needs a buddy or a family that will shower him with warmth and assure him that all is well in the world. We know that somewhere out there, there’s a human that can make him smile more often and show him that he has nothing to fear. We hope they get to meet at the AGJS shelter someday!', imageUrl: 'images/post.jpg' },
        { name: 'Menchie', age: '9 years old', gender: 'Female', description: 'Menchie was seen wandering around UP Campus with an electrical wire wound tightly around her neck. It wasn’t obvious at the time of rescue but she was also pregnant and gave birth immediately after being rescued. She is a very calm and gentle senior dog who gets along with everyone.', imageUrl: 'images/menchie.jpg' },
        { name: 'Blessing', age: '8 years old', gender: 'Male', description: 'It was such a blessing to be able to rescue this beautiful Aspin, Blessing, from a hit-and-run incident in Anonas, and to restore him back to health. Blessing is a highly energetic dog that needs time to bond with humans, being an 8-yr-old rescue that has been through rough times. He is getting a second chance as our volunteers work to socialize him further. We’re hoping that a foster parent or adopter will appreciate how far he has come and give him the chance to continue his rehabilitation in a home setting. When visiting the shelter to choose a new furry companion, please don’t count him out. He is getting old in years but still has plenty of zest, and he is ready for his forever home.', imageUrl: 'images/blessing.jpg' },
    ];

    // Cat profiles
    const catProfiles = [
        { name: 'Lot', age: '2 yrs old', gender: 'Male', description: 'Lot, a gray tabby Puspin, at a young age he suffered a lot because he was rescued in Makati City with an injured leg and was malnourished. After receiving all the treatment, he is now ready to light up your home. Can you give him a fur-ever home?', imageUrl: 'images/lot.jpg' },
        { name: 'Tala', age: '4 years old', gender: 'Male', description: 'Oh, sweet feline, Tala, the cat of our dreams, we here at AGJS love you just like our other cats. However, we need to save other cats in need, so this is where cat lovers out there come in. Please save Tala. Give Tala a loving home to cherish for life and we will have more precious space to devote to rehabilitating other animals in need. Tala was rescued at the recent Taal eruption, and it’s a good thing he’s with us today. Do your part and reap the benefit of adopting a true fur-ever loving companion—Tala, the sweet, loving feline with the friendly face.', imageUrl: 'images/tala.jpg' },
        { name: 'Foggy', age: '2.5 yrs old', gender: 'Male', description: 'Foggy is the last of his litter: nicknamed the Bad Weather Boys, after the inclement conditions under which they were rescued in Loyola Memorial Park. Because Foggy was more aloof than his brothers, Drizzle and Blaze, he remained in our Feline Quarantine section well into his adulthood. Deprived of exercise and comforted with unlimited food, Foggy grew into the feline equivalent of a Dad bod.', imageUrl: 'images/foggy.jpg' },
        { name: 'Bridget Boy', age: '3 yrs old', gender: 'Male', description: 'Okay, so Bridget is male and was only named Bridget because he was found at St. Bridget School, Quezon City, not because he identifies as a female cat (and there’s nothing wrong with that!) Kidding aside, some people love orange tabbies and can’t get enough of them, so AGJS presents yet another example of this type of appealing housecat with the orange and white fur. Bridget is timid and looks tired, so grab some cat toys or treats to perk him up. Cat owners who love cats jumping on the kitchen counters to join in for meal preparations will love Bridget Boy and his curious hunger for culinary treats. But he also has his bored, lazy cat moments, that is, until you invite him to play and cuddle.', imageUrl: 'images/bridget.jpg' },
        { name: 'Skyler', age: '2 years old', gender: 'Male', description: 'Just like his sibling who was rescued a couple of years ago, Skyler is a white male Puspin looking for a fur-ever home filled with warmth. Skyler’s most unique trait is his one odd eye. In fact, his eyes look different. They have different colors. No matter the disparity and uniqueness, Skyler is just like any cat who needs love and warmth. Use your soothing voice to call his name, and reward him with a treat when he responds. Skyler will become unique to you after you spend time with him at our cattery and he imprints with you after a good time. Cats are smart and they remember a loving human, so be that owner who he never forgets. Visit him today and get an unforgettable best friend.', imageUrl: 'images/skyler.jpg' },
        { name: 'Momo', age: '10 years old', gender: 'Female', description: 'Senior cats make for great pets. Just think: you don’t need to give them too much time to decompress. They have endless reserves of patience if you’re busy during the day at work. In fact, they may snuggle in their cat bed and wait for you to pick them up after a long, busy workday and choose to do little else. They seem to be grateful with a comfortable house, delicious cat food and whatever time you have during the day to give them rubs or treats. This all makes for one wonderful conclusion: you won’t regret getting the senior cat of your dreams. Adopt Momo, who has been with us since 2012 and hasn’t given up on luck finding you.', imageUrl: 'images/momo.jpg' }, 
        { name: 'Novy', age: '3 years old', gender: 'Female', description: 'Senior cats make for great pets. Just think: you don’t need to give them too much time to decompress. They have endless reserves of patience if you’re busy during the day at work. In fact, they may snuggle in their cat bed and wait for you to pick them up after a long, busy workday and choose to do little else. They seem to be grateful with a comfortable house, delicious cat food and whatever time you have during the day to give them rubs or treats. This all makes for one wonderful conclusion: you won’t regret getting the senior cat of your dreams. Adopt Novy, who has been with us since 2012 and hasn’t given up on luck finding you.', imageUrl: 'images/novy.jpg' }, 
        { name: 'Cornelia', age: '2 yrs old', gender: 'Female', description: 'Cornelia was a stray kitten in Barangka, Marikina. She had a serious eye injury and she knew that she needed to be rescued. On that lucky day, a AGJS caretaker was walking on his way to the shelter and Cornelia decided to follow him. The AGJS vet could no longer save her eye, but she’s now a healthy little girl with a zest for life.', imageUrl: 'images/cornelia.jpg' }, 
        { name: 'Sawyer', age: '2 years old', gender: 'Male', description: 'Some people like black cats while some LOVE white cats! Sawyer is a white Puspin and recent rescue along with a litter of kittens. Sawyer is male and loves to play with mice toys. He will climb perches with dexterity and chase after mice in your home like an expert hunter. Sawyer could really use a loving family or faithful single owner BFF. What more could a cat want than a comfortable home and delicious meals, regular vet appointments, belly rubs, petting, and treats? Sawyer could make a teen girl’s dreams of a BFF without hitches come true. In fact, no matter how young or old, Sawyer’s owner could use his touch at loving companionship.', imageUrl: 'images/sawyer.jpg' },
        { name: 'Cleo', age: '4 years old', gender: 'Male', description: 'Once a kitten who has been with us since 2019 and littermates of Cow and now a full-grown cat that needs an adopter or foster, Cleo seeks a home to ease his worries about living in a shelter where he doesn’t get the devotion he needs on a one-on-one basis. What a long way a loving home does for an animal anxious about the environment at a shelter. Even if Cleo has resided in AGJS for more than two years, his anxiety about finding a fur-ever home increases annually, so we’re doing what we can to change that. Cleo is in the cattery here at AGJS for anyone who wants to play with him and get to know him. Cleo just needs time with a cat lover who wants to bring out the best in him. So, what once was a kitten, now a full-grown cat and a candidate for the best decision you’ve ever made, make Cleo among your list of male Puspins to see here.', imageUrl: 'images/cleo.jpg' }
    ];

    const createProfileElement = (profile, type) => {
        const profileElement = document.createElement('div');
        profileElement.classList.add('profile');
        profileElement.innerHTML = `
            <img src="${profile.imageUrl}" alt="${profile.name}">
            <h3>${profile.name}</h3>
        `;
    
        profileElement.addEventListener('click', () => {
            modal.style.display = 'block';
            modalImage.src = profile.imageUrl;
            modalName.textContent = profile.name;
            modalAge.textContent = profile.age;
            modalGender.textContent = profile.gender;
            modalDescription.textContent = profile.description;
    
            // Add click event for the edit button
            editButton.addEventListener('click', () => {
                // Perform edit action here, e.g., redirect to edit page with profile details
                window.location.href = `edit-pet.php?id=${profile.id}&type=${type}`;
            });
        });
    
        return profileElement;
    };
    
    dogProfiles.forEach(profile => {
        const profileElement = createProfileElement(profile, 'dog');
        dogsSection.appendChild(profileElement);
    });
    
    catProfiles.forEach(profile => {
        const profileElement = createProfileElement(profile, 'cat');
        catsSection.appendChild(profileElement);
    });
    
    span.onclick = function () {
        modal.style.display = 'none';
    };
    
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    };
    
});