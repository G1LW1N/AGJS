-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 09:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petchoices`
--

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `age`, `gender`, `description`, `image_url`, `thumbnail_url`) VALUES
(1, 'Lot', '2 yrs old', 'M', 'Lot, a gray tabby Puspin, at a young age he suffered a \"lot\" because he was rescued in Makati City with an injured leg and was malnourished. After receiving all the treatment, he is now ready to light up your home. Can you give him a fur-ever home?', 'images/lot.jpg', 'images/lot-thumbnail.jpg'),
(2, 'Tala', '4 yrs old', 'M', 'Oh, sweet feline, Tala, the cat of our dreams, we here at AGJS love you just like our other cats. However, we need to save other cats in need, so this is where cat lovers out there come in. Please save Tala. Give Tala a loving home to cherish for life and we will have more precious space to devote to rehabilitating other animals in need. Tala was rescued at the recent Taal eruption, and it’s a good thing he’s with us today. Do your part and reap the benefit of adopting a true fur-ever loving companion—Tala, the sweet, loving feline with the friendly face.', 'images/tala.jpg', 'images/tala-thumbnail.jpg'),
(3, 'Foggy', '2.5 yrs old', 'M', 'Foggy is the last of his litter: nicknamed the Bad Weather Boys, after the inclement conditions under which they were rescued in Loyola Memorial Park. Because Foggy was more aloof than his brothers, Drizzle and Blaze, he remained in our Feline Quarantine section well into his adulthood. Deprived of exercise and comforted with unlimited food, Foggy grew into the feline equivalent of a \"Dad bod\".', 'images/foggy.jpg', 'images/foggy-thumbnail.jpg'),
(4, 'Bridget Boy', '3 yrs old', 'M', 'Okay, so Bridget is male and was only named Bridget because he was found at St. Bridget School, Quezon City, not because he identifies as a female cat (and there’s nothing wrong with that!) Kidding aside, some people love orange tabbies and can’t get enough of them, so AGJS presents yet another example of this type of appealing housecat with the orange and white fur. Bridget is timid and looks tired, so grab some cat toys or treats to perk him up. Cat owners who love cats jumping on the kitchen counters to join in for meal preparations will love Bridget Boy and his curious hunger for culinary treats. But he also has his bored, lazy cat moments, that is, until you invite him to play and cuddle.', 'images/bridget.jpg', 'images/bridget-thumbnail.jpg'),
(5, 'Skyler', '2 yrs old', 'M', 'Just like his sibling who was rescued a couple of years ago, Skyler is a white male Puspin looking for a fur-ever home filled with warmth. Skyler’s most unique trait is his one odd eye. In fact, his eyes look different. They have different colors. No matter the disparity and uniqueness, Skyler is just like any cat who needs love and warmth. Use your soothing voice to call his name, and reward him with a treat or a tummy rub and Skyler is yours for life.', 'images/skyler.jpg', 'images/skyler-thumbnail.jpg'),
(6, 'Momo', '10 yrs old', 'F', 'Senior cats make for great pets. Just think: you don’t need to give them too much time to decompress. They have endless reserves of patience if you’re busy during the day at work. In fact, they may snuggle in their cat bed and wait for you to pick them up after a long, busy workday and choose to do little else. They seem to be grateful with a comfortable house, delicious cat food and whatever time you have during the day to give them rubs or treats. This all makes for one wonderful conclusion: you won’t regret getting the senior cat of your dreams. Adopt Momo, who has been with us since 2012 and hasn’t given up on luck finding you.', 'images/momo.jpg', 'images/momo-thumbnail.jpg'),
(7, 'Novy', '3 yrs old', 'F', 'Senior cats make for great pets. Just think: you don’t need to give them too much time to decompress. They have endless reserves of patience if you’re busy during the day at work. In fact, they may snuggle in their cat bed and wait for you to pick them up after a long, busy workday and choose to do little else. They seem to be grateful with a comfortable house, delicious cat food and whatever time you have during the day to give them rubs or treats. This all makes for one wonderful conclusion: you won’t regret getting the senior cat of your dreams. Adopt Novy, who has been with us since 2012 and hasn’t given up on luck finding you.', 'images/novy.jpg', 'images/novy-thumbnail.jpg'),
(8, 'Cornelia', '2 yrs old', 'F', 'Cornelia was a stray kitten in Barangka, Marikina. She had a serious eye injury and she knew that she needed to be rescued. On that lucky day, an AGJS caretaker was walking on his way to the shelter and Cornelia decided to follow him. The AGJS vet could no longer save her eye, but she’s now a healthy little girl with a zest for life.', 'images/cornelia.jpg', 'images/cornelia-thumbnail.jpg'),
(9, 'Sawyer', '2 yrs old', 'M', 'Some people like black cats while some LOVE white cats! Sawyer is a white Puspin and recent rescue along with a litter of kittens. Sawyer is male and loves to play with mice toys. He will climb perches with dexterity and chase after mice in your home like an expert hunter. Sawyer could really use a loving family or faithful single owner BFF. What more could a cat want than a comfortable home and delicious meals, regular vet appointments, belly rubs, petting, and treats? Sawyer could make a teen girl’s dreams of a BFF without hitches come true. In fact, no matter how young or old, Sawyer’s owner could use his touch at loving companionship.', 'images/sawyer.jpg', 'images/sawyer-thumbnail.jpg'),
(10, 'Cleo', '4 yrs old', 'M', 'Once a kitten who has been with us since 2019 and littermates of Cow and now a full-grown cat that needs an adopter or foster, Cleo seeks a home to ease his worries about living in a shelter where he doesn’t get the devotion he needs on a one-on-one basis. What a long way a loving home does for an animal anxious about the environment at a shelter. Even if Cleo has resided in AGJS for more than two years, his anxiety about finding a fur-ever home increases annually, so we’re doing what we can to change that. Cleo is in the cattery here at AGJS for anyone who wants to play with him and get to know him. Cleo just needs time with a cat lover who wants to bring out the best in him. So, what once was a kitten, now a full-grown cat and a candidate for the best decision you’ve ever made, make Cleo among your list of male Puspins to see here.', 'images/cleo.jpg', 'images/cleo-thumbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `thumbnail_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `age`, `gender`, `description`, `image_url`, `thumbnail_url`) VALUES
(1, 'Tiki', '3 yrs old', 'Male', 'Thanks to a concerned citizen’s report, Tiki was rescued from the threat of being slaughtered for food. He\'s a loving dog ready for a new home.', 'images/tiki.jpg', 'images/tiki-thumbnail.jpg'),
(2, 'Pumi', '3 yrs old', 'F', 'Pumi was rescued by a celebrity supporter of AGJS who spotted the poor dog inside a barangay pound cage while she was shooting a television show. Pumi is shy and gentle but she is easily startled by loud noises. We are looking for someone who understands that overcoming traumatic life experiences is tough and may take time; someone who can assure Pumi that she will always be safe and that she will never be abandoned.', 'images/pumi.jpg', 'images/pumi-thumbnail.jpg'),
(3, 'Mita', '5 yrs old', 'F', 'AGJS rescued Mita at Ermita Center after she had wounds in some parts of her body. A small dog who is quiet and adorably well-behaved, Mita is an Aspin that shows discreet affection and is perfect for someone who wants a well-rounded, well-behaved companion.', 'images/mita.jpg', 'images/mita-thumbnail.jpg'),
(4, 'Magdalena', '2 yrs old', 'F', 'Magdalena or sometimes we called her \"Magda\" was rescued from Gilmore at Carmel of St. Therese of the Child Jesus along with her 4 babies namely: Josiah, Jonas, Ezra, and Ezekiel. She’s a small Aspin with a bob tail. Magda is a friendly and well-behaved dog that fits perfectly into any house.', 'images/magdalena.jpg', 'images/magdalena-thumbnail.jpg'),
(5, 'Banoi', '5 yrs old', 'F', 'When Banoi shows you her happy face, you will surely be won over with delight. A 5-yr-old Aspin rescued in Marikina City during typhoon Ulysees, Banoi has been through difficulties in her life, but it does not change her friendly temperament. She loves pets and goes crazy for treats. She’s a happy, friendly dog who is also quite chill and not overly needy.', 'images/banoi.jpg', 'images/banoi-thumbnail.jpg'),
(6, 'Tali', '3 yrs old', 'F', 'If you look closely at her \"before\" photo, you’ll see a deep line around her neck that looks like a collar. That is in fact a deep laceration caused by a rope tightly wound around her neck. The close-up photos are a bit too graphic to post. No wonder she was cowering inside a box and hiding from our volunteers when she was rescued. Until now, it will take a bit of time and patience for new people to earn her trust.', 'images/tali.jpg', 'images/tali-thumbnail.jpg'),
(7, 'Haley', '4 yrs old', 'F', 'When Haley, a hit-and-run victim, was found underneath a parked car, our volunteer rescuers were unsure if she would make it. After being treated for her injuries, our shelter vet was unsure if she would walk again. Haley also remained aloof for a while, and we were unsure if she would ever get over her fear. Well, Haley put all our uncertainties to rest by bouncing back and being one of the friendliest dogs at the shelter. We’re sure that she’ll make the best canine companion ever!', 'images/haley.jpg', 'images/haley-thumbnail.jpg'),
(8, 'Post', '1 yr old', 'M', 'Just like a Facebook post by a pal, Post is easy to heart or like. He is a smart, trainable 1-yr-old Aspin who is still a bit skittish in unfamiliar surroundings. But just give him some time and love, and Post will show you his true, affectionate self. Post was recently rescued from a post office and we hope that he doesn’t wait too long for his forever home. He desperately needs a buddy or a family that will shower him with warmth and assure him that all is well in the world. We know that somewhere out there, there’s a human that can make him smile more often and show him that he has nothing to fear. We hope they get to meet at the AGJS shelter someday!', 'images/post.jpg', 'images/post-thumbnail.jpg'),
(9, 'Menchie', '9 yrs old', 'F', 'Menchie was seen wandering around UP Campus with an electrical wire wound tightly around her neck. It wasn’t obvious at the time of rescue but she was also pregnant and gave birth immediately after being rescued. She is a very calm and gentle senior dog who gets along with everyone.', 'images/menchie.jpg', 'images/menchie-thumbnail.jpg'),
(10, 'Blessing', '8 yrs old', 'M', 'It was such a blessing to be able to rescue this beautiful Aspin, Blessing, from a hit-and-run incident in Anonas, and to restore him back to health. Blessing is a highly energetic dog that needs time to bond with humans, being an 8-yr-old rescue that has been through rough times. He is getting a second chance as our volunteers work to socialize him further. We’re hoping that a foster parent or adopter will appreciate how far he has come and give him the chance to continue his rehabilitation in a home setting. When visiting the shelter to choose a new furry companion, please don’t count him out. He is getting old in years but still has plenty of zest, and he is ready for his forever home.', 'images/blessing.jpg', 'images/blessing-thumbnail.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
