-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 06:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inthemoment`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categID` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categID`, `name`, `image`) VALUES
(1, 'Outdoor', 'fa-tree'),
(2, 'Events', 'fa-calendar-check'),
(3, 'Food', 'fa-cookie-bite'),
(4, 'Drinks', 'fa-wine-glass-alt'),
(5, 'At home activities', 'fa-home');

-- --------------------------------------------------------

--
-- Table structure for table `demouser`
--

CREATE TABLE `demouser` (
  `userID` int(255) NOT NULL,
  `name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demouser`
--

INSERT INTO `demouser` (`userID`, `name`) VALUES
(1, 'test'),
(2, 'test1'),
(3, 'test3'),
(4, 'test4');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `interestID` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interest`
--

INSERT INTO `interest` (`interestID`, `name`, `image`) VALUES
(1, 'Music', 'fa-music'),
(2, 'Art', 'fa-paint-brush'),
(3, 'Fitness', 'fa-running'),
(4, 'Cooking', 'fa-utensils'),
(5, 'Food', 'fa-food'),
(6, 'Animals', 'fa-paw');

-- --------------------------------------------------------

--
-- Table structure for table `recommendation`
--

CREATE TABLE `recommendation` (
  `recomID` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `categID` int(255) NOT NULL,
  `interestID` int(255) NOT NULL,
  `timeRangeStart` int(50) NOT NULL,
  `timeRangeEnd` int(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `startTimeSuitable` time NOT NULL,
  `endTimeSuitable` time NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommendation`
--

INSERT INTO `recommendation` (`recomID`, `title`, `categID`, `interestID`, `timeRangeStart`, `timeRangeEnd`, `image`, `startTimeSuitable`, `endTimeSuitable`, `type`) VALUES
(1, 'Grab a coffee at the local cafe', 4, 4, 30, 80, 'img\\activity\\coffee.png', '09:00:00', '17:00:00', 'Location'),
(2, 'Visit the Brisbane art gallery', 1, 2, 20, 90, 'img\\activity\\gallery.png', '09:00:00', '20:00:00', 'Location'),
(3, 'Try Yoga', 5, 3, 0, 30, 'img\\activity\\yoga.png', '18:00:00', '24:00:00', 'Location'),
(4, 'Go for a hike', 1, 3, 0, 45, 'img\\activity\\hiking.png', '08:00:00', '17:00:00', 'Location'),
(5, 'Music Festival', 2, 1, 60, 180, 'img\\activity\\mFestival.png', '12:00:00', '20:00:00', 'Location'),
(6, 'Wine Taste Testing', 4, 5, 30, 90, 'img\\activity\\wine.png', '14:00:00', '17:00:00', 'Location'),
(7, 'Draw a cat', 5, 2, 0, 30, 'img\\activity\\cat.png', '06:00:00', '24:00:00', 'Activity'),
(8, 'Go Bird Watching', 1, 6, 30, 90, 'img\\activity\\bird.png', '12:00:00', '16:00:00', 'Location'),
(9, 'Attend an opera show', 2, 1, 30, 150, 'img\\activity\\opera.png', '12:00:00', '20:00:00', 'Location'),
(10, 'Attend the Cake Festival', 3, 5, 30, 90, 'img\\activity\\cake.png', '11:00:00', '17:00:00', 'Location'),
(11, 'Attend a Bread Making Class', 3, 4, 30, 150, 'img\\activity\\bread.png', '12:00:00', '19:00:00', 'Location'),
(12, 'Make a simple dessert', 5, 4, 0, 70, 'img\\activity\\cook_dessert.png', '06:00:00', '24:00:00', 'Activity'),
(13, 'Take part in a Marathon Event', 2, 3, 30, 90, 'img\\activity\\marathon.png', '08:00:00', '16:00:00', 'Location'),
(14, 'Learn Calligraphy', 5, 2, 0, 90, 'img\\activity\\calligraphy.png', '06:00:00', '24:00:00', 'Activity'),
(15, 'Visit the Dog Show', 1, 6, 30, 150, 'img\\activity\\dogShow.png', '10:00:00', '15:00:00', 'Location'),
(16, 'Visit the Egyptian Museum', 2, 2, 60, 180, 'img\\activity\\egyptian.png', '10:00:00', '19:00:00', 'Location'),
(17, 'Have a nibble at the Cheese Festival', 2, 5, 60, 180, 'img\\activity\\cheese.png', '10:00:00', '18:00:00', 'Location'),
(18, 'Take part in a Cycling Event', 2, 3, 30, 150, 'img\\activity\\cycling.png\r\n', '08:00:00', '18:00:00', 'Location'),
(19, 'Attend a Pastry Masterclass', 2, 4, 60, 180, 'img\\activity\\pastry.png', '14:00:00', '17:00:00', 'Location'),
(20, 'Outback road show', 2, 6, 30, 90, 'img\\activity\\outback.png', '12:00:00', '19:00:00', 'Location'),
(21, 'Have a Barbeque', 1, 4, 30, 180, 'img\\activity\\bbq.png', '06:00:00', '18:00:00', 'Activity'),
(22, 'Have a picnic', 1, 5, 30, 90, 'img\\activity\\picnic.png', '06:00:00', '19:00:00', 'Activity'),
(23, 'Attend the German Festival', 3, 1, 30, 210, 'img\\activity\\german.png', '06:00:00', '21:00:00', 'Location'),
(24, 'Make a fancy fruit salad', 3, 2, 0, 60, 'img\\activity\\fruit.png', '06:00:00', '24:00:00', 'Activity'),
(25, 'Learn a dance', 5, 3, 0, 30, 'img\\activity\\dance.png', '06:00:00', '24:00:00', 'Activity'),
(26, 'Make a margherita', 4, 4, 0, 60, 'img\\activity\\margherita.png', '11:00:00', '22:00:00', 'Activity'),
(27, 'Knit a scarf', 5, 2, 0, 90, 'img\\activity\\scarf.png', '06:00:00', '20:00:00', 'Activity'),
(28, 'Watch an animal documentary', 5, 6, 0, 90, 'img\\activity\\documentary.png', '06:00:00', '24:00:00', 'Activity'),
(29, 'Learn to make a mean Mac n Cheese', 5, 5, 10, 60, 'img\\activity\\macNcheese.png', '06:00:00', '20:00:00', 'Activity'),
(30, 'Learn how eating healthy can be beneficial', 3, 3, 0, 10, 'img\\activity\\learn.png\r\n', '05:00:00', '24:00:00', 'Activity');

-- --------------------------------------------------------

--
-- Table structure for table `recommendationdetails`
--

CREATE TABLE `recommendationdetails` (
  `recomDId` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `link1` varchar(500) NOT NULL,
  `link2` varchar(500) NOT NULL,
  `link3` varchar(500) NOT NULL,
  `latitude` decimal(65,4) DEFAULT NULL,
  `longitude` decimal(65,4) DEFAULT NULL,
  `recomID` int(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recommendationdetails`
--

INSERT INTO `recommendationdetails` (`recomDId`, `title`, `description`, `link1`, `link2`, `link3`, `latitude`, `longitude`, `recomID`, `image`, `rating`) VALUES
(1, 'Visit the local Cafe', 'BellTop Cafe is quiet right now. Coffee is selling for 50% off. Do you wish to go?', '', '', '', '-27.4946', '153.0140', 1, '', 4),
(2, 'Admire beautiful artwork', 'The Brisbane art gallery is nearby. Today art showcases famous paintings from around the globe. Dont miss this perfect opportunity!', '', '', '', '-27.4978', '153.0132', 2, '', 4),
(3, 'Yoga class', 'A nearby yoga class is starting. Yoga is proven to be good for the body and mind. If the stress of everyday life has you bent out of shape, balance the madness with Gentle Yoga', '', '', '', '-27.4992', '153.0142', 3, '', 0),
(4, 'Hiking', 'Go hiking in a nearby forest. Explore the nature and admire the beautiful Australian wildlife. ', '', '', '', '-27.4984', '153.0154', 4, '', 0),
(5, 'International music festival', 'The international music festival is happening in SouthBank. Take part in the musical festives. Entry is free!', '', '', '', '-27.4825', '153.0208', 5, '', 5),
(6, 'Wine Taste Testing', 'The annual Brisbane Wine Tasting event is happening in Woolloongabba. Taste the flavours of gourmet Australian wine from the valley', '', '', '', '-27.4864', '153.0258', 6, '', 3),
(7, 'Learn to draw a cat', 'Draw a cat in 15 minutes!\r\n\r\nWhen was the last time you drew a picture? Pick up a pencil and rekindle your creativity!', 'How to Draw a Cat Easy Step by Step|https://www.youtube.com/watch?v=XSu24eKHShE|youtube', 'How to draw a basic cat sitting|https://www.youtube.com/watch?v=rJWlF9-jslQ|youtube', '', NULL, NULL, 7, 'img\\specificActivity\\cat.png', 0),
(8, 'Bird Watching', 'Go admire the wildlife in the nearby park', '', '', '', '-27.4988', '153.0081', 8, '', 2),
(9, 'Opera', 'Opera Queensland is performing a tour in SouthBank!', '', '', '', '-27.4782', '153.0215', 9, '', 4),
(10, 'Cake Festival', 'The annual cake festival is happening in St Lucia. Indulge in beautiful cakes and pastries.', '', '', '', '-27.4974', '153.0124', 10, '', 2),
(11, 'Bread Making Class', 'A bread making master class is happening at indooroopilly! Learn the techniques of bread making in this cooking class. ', '', '', '', '-27.4997', '152.9771', 11, '', 2),
(12, 'Make a dessert', 'Learn to make a quick and simple easy dessert at home!', '9 Easy 3-Ingredient Desserts|https://www.youtube.com/watch?v=03_EDK9Sn_E|youtube', '25 EASIEST 1-MINUTE DESSERTS|https://www.youtube.com/watch?v=tBUEAAHB_L0|youtube', 'Quick And Easy Dessert Ideas|https://www.youtube.com/watch?v=f2NtFc2vbi0|youtube', NULL, NULL, 12, 'img\\specificActivity\\dessert.jpg', 0),
(13, 'Marathon', 'Join the Brisbane marathon race for charity.\r\n\r\nTest your fitness over 21.1km half marathon distance over a single loop course taking in the sights and sounds of the beautiful Brisbane River.', '', '', '', '-27.4826', '153.0054', 13, '', 5),
(14, 'Calligraphy', 'Spice up your art and learn to do Calligraphy!', 'AMAZING CALLIGRAPHY DRAWINGS - FAMOUS BRANDS LOGOS 2018|https://www.youtube.com/watch?v=SK1ZqftWtBw|youtube', 'How To: Calligraphy & Hand Lettering for Beginners!|https://www.youtube.com/watch?v=sBoVGqiSzr4|youtube', '4 Types of Handlettering|https://www.youtube.com/watch?v=6s72_tZj6zg|youtube', NULL, NULL, 14, 'img\\specificActivity\\calligraphy.jpg', 0),
(15, 'Dog show', 'Attend the performance of highly trained dogs at West End', '', '', '', '-27.4847', '153.0048', 15, '', 5),
(16, 'Wine Taste Testing', 'Sample delicious wine at Fortitude Valley', '', '', '', '-27.4588', '153.0335', 6, '', 3),
(17, 'Cheese Festival', 'Attend the Cheese-A-Holic Festival happening in Brisbane City. \r\n\r\nWhere do you even begin when it comes to cheeses? Which are mild, and which are tasty? And when did generic \"blue cheese\" expand into 38 different varieties.\r\n\r\nThe Cheese-A-Holic festival will indulge you in a cheese tasting journey and learn all about your favourite cheese whilst enjoying wine and beer master classes at the same time.', '', '', '', '-27.4669', '153.0242', 17, '', 5),
(18, 'Cycling Event', 'Join the Charity Ride at SouthBank. There is a ride for every cycling level, a 10km, 25km, 50km and 100km. Join the ride and take part is Brisbane largest charity event', '', '', '', '-27.4765', '153.0158', 18, '', 5),
(19, 'Pastry Masterclass', 'Attend the Pastry Masterclass in Queen Street Mall. \r\n\r\nLearn to make puff pastry, shortcrust pastry, sweet pastry and choux pastry. Make a savoury tart, create a chocolate ganache tart with your sweet pastry. There will be lots of food to eat, and plenty to take home, including extra pastry!', '', '', '', '-27.4708', '153.0257', 19, '', 4),
(20, 'Outback Road Show', 'Saddle up for a remarkable journey at the Australian Outback Spectacular!\r\n\r\nThe Australian Outback Spectacular is an Australiana dinner and show package featuring many Australian animals, songs and bush tucker.', '', '', '', '-27.4708', '153.0257', 20, '', 5),
(21, 'Barbeque', 'Cook up a barbeque in your back yard', 'How to Barbeque Ribs|https://www.youtube.com/watch?v=tC6keui55e8|youtube', 'How to Use a Charcoal Grill (7 Steps)|https://www.youtube.com/watch?v=5HIBx4w8HpU|youtube', '', NULL, NULL, 21, 'img\\specificActivity\\barbeque.jpg', 0),
(22, 'Picnic', 'Bring some food and set up a picnic in your backyard or local park', 'Summer Picnic Ideas|https://www.youtube.com/watch?v=9VglERHTcj4|youtube', 'PERFECT PICNIC for Summer|https://www.youtube.com/watch?v=0RAs0fnKRU4|youtube', '1 Picnic Food Ideas That Aren’t Sandwiches!|https://www.kitchensanctuary.com/11-picnic-food-ideas-that-arent-sandwiches/|kitchen', NULL, NULL, 22, 'img\\specificActivity\\picnic.jpg', 0),
(23, 'German Festival', 'Attend the German Festival and enjoy music and food.\r\n\r\nDon your Dirndl or Lederhosen and find out more about the cultural side of Oktoberfest Brisbane. Steeped in tradition, our festival prides itself in providing you with an authentic Bavarian and German experience.', '', '', '', '-27.4799', '153.0110', 23, '', 3),
(24, 'Create a fancy fruit salad', 'Toss and create a beautiful fruit salad', 'Easy Fruit Salad 3 Delicious Ways|https://www.youtube.com/watch?v=wn3xBDqdqpc|youtube', 'Perfect Summer Fruit Salad|https://www.allrecipes.com/recipe/214947/perfect-summer-fruit-salad/|allrecipes', '15 Completely Not Basic Fruit Salad Recipes|https://www.delish.com/cooking/g1333/fruit-salad/|delish', NULL, NULL, 24, 'img\\specificActivity\\fruit-salad.jpg', 0),
(25, 'Learn a dance', 'Practice and learn some fabulous dance moves!', '3 Simple Dance Moves for Beginners|https://www.youtube.com/watch?v=ujREEgxEP7g|youtube', 'ARM WAVE TUTORIAL|https://www.youtube.com/watch?v=K2FFULkmC-g|youtube', 'TOP-3 THE COOLEST FOOTWORK DANCE MOVES EVER!|https://www.youtube.com/watch?v=eDx4jcmHQYA|youtube', NULL, NULL, 25, 'img\\specificActivity\\dance.png', 0),
(26, 'Make a Margherita Drink', 'Learn to make a Margherita.\r\n\r\nThe classic margarita is one of the easiest cocktails you can make from scratch and you\'ll love the refreshing lime flavor backed by your favorite tequila.', 'How to Make a Margarita|https://www.youtube.com/watch?v=q-gYcvipozY|youtube', 'Margarita - The Basics|https://www.youtube.com/watch?v=lNwNvq8Kxl8|youtube', 'The Best Way to Make a Margarita|https://www.esquire.com/food-drink/drinks/recipes/a3659/margarita-drink-recipe/|esquire', NULL, NULL, 26, 'img\\specificActivity\\margherita.jpg', 0),
(27, 'Knit a Scarf', 'Try your craft and learn to knit a scarf!\r\n\r\nAnyone can easily knit a scarf. There\'s no need to spend exorbitant amounts of money at the store! You can start off by knitting a scarf for beginners. This scarf pattern will use the most basic stitching pattern out there. All you need is two knitting needles and some yarn! ', 'How to Knit a Scarf for Beginners Step By Step|https://www.youtube.com/watch?v=24lR2IRS57A|youtube', 'How to Knit a Scarf for the Absolute Beginner|https://www.youtube.com/watch?v=UHlsW0wI144|youtube', 'How to Knit a Scarf - Step by Step Tutorial for Beginners|https://www.youtube.com/watch?v=o8scF8cgm0E|youtube', NULL, NULL, 27, 'img\\specificActivity\\knit.jpg', 0),
(28, 'Watch a Documentary', 'Relax and watch an animal Documentary. \r\n\r\nLearn about the world\'s most exquisite animals. You will delight in these exceptional documentaries about the many wonders of the animal kingdom.', 'Strange Animals of Asia [National Geographic Documentary 2017 HD]|https://www.youtube.com/watch?v=88-JKzAebLo|youtube', 'David Attenborough\'s - Animals of Africa|https://www.youtube.com/watch?v=wE2bOOnDH8E|youtube', 'he Rare and Exotic Animals - National Geographic Documentary|https://www.youtube.com/watch?v=JZf9TUDYmME|youtube', NULL, NULL, 28, 'img\\specificActivity\\documentary.jpg', 0),
(29, 'Make a Mean mac N Cheese', 'Create a delicious Mac N Cheese to whet your appetite', 'Home made macaroni and cheese|http://allrecipes.com.au/recipe/4571/homemade-macaroni-and-cheese.aspx|allrecipes ', 'Easy Vs. Ultimate: Mac \'N\' Cheese|https://www.youtube.com/watch?v=S1CH8X92gfs|youtube', 'Macaroni and Cheese Recipe|https://www.youtube.com/watch?v=nCHMqQc5JlU|youtube', NULL, NULL, 29, 'img\\specificActivity\\mac.jpg', 0),
(30, 'Learn how eating healthy can be beneficial', 'Learn the benefits and importance of being healthy. \r\n\r\nGood nutrition is an important part of leading a healthy lifestyle. Combined with physical activity, your diet can help you to reach and maintain a healthy weight, reduce your risk of chronic diseases (like heart disease and cancer), and promote your overall health.', 'Importance of Good Nutrition|https://www.hhs.gov/fitness/eat-healthy/importance-of-good-nutrition/index.html|hhs', 'Why Is Eating Healthy Important?|https://healthyeating.sfgate.com/eating-healthy-important-7166.html|sfgate', '6 Reasons for Eating Healthy|https://www.nerdwallet.com/blog/health/medical-costs/benefits-of-eating-healthy/|nerdwallet', NULL, NULL, 30, 'img\\specificActivity\\healthy.jpg', 0),
(300, 'Yoga. Your gateway to good health. ', 'If you thought that yoga was all about bending and twisting your body in odd shapes, it\'s time to rethink. Yoga is much more. In very simple words, giving care to your body, mind and breath is yoga. This means that the century-old practice includes yoga postures (asanas), breathing techniques (pranayamas) and meditation. Through these, the body, mind and breath come in harmony with each other and that very moment yoga happens.', 'Yoga For Complete Beginners - 20 Minute Home Yoga Workout!|https://www.youtube.com/watch?v=v7AYKMP6rOE|youtube', 'Yoga for Beginners|https://www.yogajournal.com/practice/beginners|yogaJournal', 'Yoga Poses for Beginners|https://www.fitnessmagazine.com/workout/yoga/poses/beginner-yoga-poses/|fitness', NULL, NULL, 3, 'img/specificActivity/yoga.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `userID` int(255) NOT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hour` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userinterest`
--

CREATE TABLE `userinterest` (
  `userID` int(255) NOT NULL,
  `InterestID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinterest`
--

INSERT INTO `userinterest` (`userID`, `InterestID`) VALUES
(1, 1),
(1, 3),
(1, 6),
(2, 1),
(2, 2),
(2, 5),
(3, 3),
(3, 4),
(3, 5),
(4, 2),
(4, 3),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'zxczczxczxc', 'zxczxccz@asdads', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(4, 'dd', 'dd@dd', '1aabac6d068eef6a7bad3fdf50a05cc8'),
(5, 'ee', 'ee@ee', '08a4415e9d594ff960030b921d42b91e'),
(6, 'qq', 'qq@qq', '099b3b060154898840f0ebdfb46ec78f'),
(7, 'ss', 'ss@ss', '3691308f2a4c2f6983f2880d32e29c84'),
(8, 'ww', 'ww@ww', 'ad57484016654da87125db86f4227ea3'),
(9, 'asdas', 'asdsd@asd', '3691308f2a4c2f6983f2880d32e29c84');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categID`);

--
-- Indexes for table `demouser`
--
ALTER TABLE `demouser`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`interestID`);

--
-- Indexes for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD PRIMARY KEY (`recomID`),
  ADD KEY `categID` (`categID`),
  ADD KEY `interestID` (`interestID`);

--
-- Indexes for table `recommendationdetails`
--
ALTER TABLE `recommendationdetails`
  ADD PRIMARY KEY (`recomDId`),
  ADD KEY `recomID` (`recomID`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`userID`,`day`);

--
-- Indexes for table `userinterest`
--
ALTER TABLE `userinterest`
  ADD PRIMARY KEY (`userID`,`InterestID`),
  ADD KEY `InterestID` (`InterestID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demouser`
--
ALTER TABLE `demouser`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interest`
--
ALTER TABLE `interest`
  MODIFY `interestID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `recommendation`
--
ALTER TABLE `recommendation`
  MODIFY `recomID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `recommendationdetails`
--
ALTER TABLE `recommendationdetails`
  MODIFY `recomDId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recommendation`
--
ALTER TABLE `recommendation`
  ADD CONSTRAINT `recommendation_ibfk_1` FOREIGN KEY (`categID`) REFERENCES `category` (`categID`),
  ADD CONSTRAINT `recommendation_ibfk_2` FOREIGN KEY (`interestID`) REFERENCES `interest` (`interestID`);

--
-- Constraints for table `recommendationdetails`
--
ALTER TABLE `recommendationdetails`
  ADD CONSTRAINT `recommendationDetails_ibfk_1` FOREIGN KEY (`recomID`) REFERENCES `recommendation` (`recomID`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `demouser` (`userID`);

--
-- Constraints for table `userinterest`
--
ALTER TABLE `userinterest`
  ADD CONSTRAINT `userInterest_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `demouser` (`userID`),
  ADD CONSTRAINT `userInterest_ibfk_2` FOREIGN KEY (`InterestID`) REFERENCES `interest` (`interestID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
