-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 11:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timbuktudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`cartID`, `userID`, `productID`, `quantity`) VALUES
(17, 302, 3, 4),
(18, 302, 2, 1),
(19, 304, 1, 1),
(20, 304, 2, 1),
(21, 304, 13, 1),
(22, 304, 6, 2),
(23, 304, 11, 1),
(24, 304, 17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `productID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`productID`, `name`, `description`, `price`, `image_url`, `category`, `in_stock`, `keywords`) VALUES
(1, 'Lenovo ThinkPad T480 - 14\" - Core i5 8250U - 8 GB RAM - 256 GB SSD ', 'The ThinkPad T480 gives you powerful processing and a range of security features in a durable chassis that\'s built to withstand the rigors of the office.', '999.99', 'lenovo-thinkpad-t480.jpg', 'Computers', 10, 'Lenovo, ThinkPad, T480, 14 inch, Core i5, 8GB RAM, 256GB SSD'),
(2, 'HP ProDesk 600 G6 - SFF - Core i5 10500 - 8 GB RAM - 256 GB SSD', 'The HP ProDesk 600 SFF delivers powerful performance, security, and manageability features in a stylish, compact design that fits any workspace.', '899.99', 'hp-prodesk-600-g6.jpg', 'Computers', 5, 'HP, ProDesk, 600 G6, SFF, Core i5, 8 GB RAM, 256 GB SSD, business, desktop, compact design, security features'),
(3, 'Dell OptiPlex 3080 Micro - Core i5 10500T - 8 GB RAM - 256 GB SSD', 'The Dell OptiPlex 3080 Micro delivers essential business-class performance and security in a compact design that\'s perfect for small and medium businesses.', '749.99', 'dell-optiplex-3080-micro.jpg', 'Computers', 15, 'Dell, OptiPlex, 3080 Micro, Core i5, 8 GB RAM, 256 GB SSD, business, desktop, essential performance, security features, compact design'),
(5, 'Logitech M325 Wireless Mouse - Blue', 'The Logitech M325 is a comfortable and reliable wireless mouse that features a contoured design and advanced optical tracking for smooth, precise cursor control.', '29.99', 'logitech-m325-wireless-mouse.jpg', 'Accessories', 20, 'Logitech, M325, wireless, mouse, blue, contoured design, optical tracking'),
(6, 'Amazon Echo Dot (4th Gen) - Smart Speaker with Alexa - Charcoal', 'The Amazon Echo Dot is a powerful smart speaker that can control your smart home devices, play music, answer questions, and more, all with the help of Alexa, Amazon\'s voice assistant.', '59.99', 'amazon-echo-dot-4th-gen.jpg', 'Accessories', 8, 'Amazon, Echo Dot, 4th Gen, smart speaker, Alexa, voice assistant, smart home control, speaker'),
(7, 'Samsung T7 Portable SSD - 500GB - USB 3.2 Gen 2 External Solid State Drive', 'The Samsung T7 Portable SSD delivers fast and reliable storage in a compact and durable design that\'s perfect for professionals on the go.', '99.99', 'samsung-t7-portable-ssd.jpg', 'Accessories', 12, 'Samsung, T7, portable SSD, 500GB, USB 3.2 Gen 2, external solid state drive, fast, reliable, compact, durable'),
(8, 'Smart Thermostat', 'Control the temperature of your home from anywhere', '99.99', 'smart_thermostat.jpg', 'smart-home-devices', 50, 'thermostat, temperature, control'),
(9, 'Xiaomi Mi Smart Speaker ', 'Play music and control your smart home devices with this speaker. \r\n\r\nFeatures Bluetooth and CarPlay settings. ', '149.99', 'smart_speaker.png', 'smart-home-devices', 25, 'speaker, music, control'),
(10, 'MT450 Fingerprint & Keypad Smart Lock', 'This smart lock is suitable for houses, apartments, hotels, and commercial buildings as well. Different modes of entry are offered for flexibility of access. The physical key is still available as a backup.\r\n\r\nThis is battery-operated and can be easily installed into your doors with no special wiring or internet connection needed.', '199.99', 'smart_lock.jpg', 'smart-home-devices', 10, 'lock, security, remote access'),
(11, 'Netflix', 'Stream popular TV shows and movies. Watch award-winning Netflix originals.', '8.99', 'netflix.png', 'digital-streaming-services', 100, 'tv shows, movies, streaming, originals'),
(13, 'Hulu', 'Watch current and past TV shows and movies. Access live TV channels.', '11.99', 'hulu.png', 'digital-streaming-services', 50, 'tv shows, movies, live TV, streaming'),
(14, 'HBO Max', 'Stream new and classic series and movies. Access to HBO content.', '14.99', 'hbomax.jpg', 'digital-streaming-services', 25, 'hbo, series, movies, streaming'),
(15, 'Disney+', 'Stream Disney, Pixar, Marvel, Star Wars, and more. Exclusive originals and classic favorites.', '7.99', 'disney-plus.jpg', 'digital-streaming-services', 50, 'disney, pixar, marvel, star wars, streaming'),
(17, 'Google Cloud AI Platform', 'Develop, deploy and scale machine learning models. Pre-built models and custom training options.', '500.00', 'google_cloud.png', 'artificial-intelligence-solutions', 25, 'AI, machine learning, models, training'),
(18, 'Amazon AI Services', 'Natural language processing, computer vision, speech recognition and more. Pre-built APIs and custom models.', '1000.00', 'amazon_ai_services.jpg', 'artificial-intelligence-solutions', 15, 'AI, NLP, computer vision, speech recognition'),
(19, 'Microsoft Azure AI', 'AI-powered analytics, bots, and cognitive services. Machine learning and pre-built APIs.', '2500.00', 'microsoft_azure_ai.jpg', 'artificial-intelligence-solutions', 5, 'AI, analytics, bots, machine learning'),
(20, 'OpenAI', 'Advanced AI research and development. Language models, robotics and more.', '10000.00', 'openai.png', 'artificial-intelligence-solutions', 2, 'AI, research, development, language models, robotics'),
(21, 'Google Ads', 'Google Ads lets you reach customers when they search for what you offer or browse relevant websites.', '100.00', 'google_ads.jpg', 'online-advertising-tools', 50, 'online advertising, search ads, display ads'),
(22, 'Facebook Ads', 'With Facebook Ads, you can create targeted ads that reach people where they’re engaged the most.', '75.00', 'facebook_ads.png', 'online-advertising-tools', 30, 'online advertising, social media ads, targeting'),
(23, 'LinkedIn Ads', 'With LinkedIn Ads, you can reach the world’s professionals and create highly-targeted campaigns.', '200.00', 'linkedin_ads.jpg', 'online-advertising-tools', 10, 'online advertising, B2B ads, targeting'),
(24, 'AdRoll', 'AdRoll is an all-in-one platform for cross-channel retargeting, prospecting, and performance marketing.', '150.00', 'adroll.png', 'online-advertising-tools', 20, 'online advertising, retargeting, performance marketing'),
(25, 'Ahrefs', 'Ahrefs is a powerful SEO tool that can help you improve your organic search rankings and drive more traffic to your site.', '300.00', 'ahrefs.jpg', 'online-advertising-tools', 5, 'online advertising, SEO, keyword research'),
(26, 'Google Cloud Platform', 'Google Cloud Platform is a suite of cloud computing services that runs on the same infrastructure that Google uses internally for its end-user products, such as Google Search and YouTube.', '600.00', 'gcp.jpg', 'cloud-computing-services', 20, 'cloud computing, infrastructure as a service, platform as a service'),
(27, 'IBM Cloud', 'IBM Cloud is a collection of cloud computing services for business offered by the information technology company IBM.', '450.00', 'ibm_cloud.png', 'cloud-computing-services', 40, 'cloud computing, hybrid cloud, platform as a service'),
(28, 'Oracle Cloud Infrastructure', 'Oracle Cloud Infrastructure is an IaaS that delivers high-performance computing power to run cloud-native and enterprise company’s IT workloads.', '550.00', 'oracle_cloud.jpeg', 'cloud-computing-services', 25, 'cloud computing, infrastructure as a service, hybrid cloud');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl_old`
--

CREATE TABLE `products_tbl_old` (
  `productID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `keywords` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tbl_old`
--

INSERT INTO `products_tbl_old` (`productID`, `name`, `description`, `price`, `image_url`, `category`, `in_stock`, `keywords`) VALUES
(1, 'Lenovo ThinkPad T480 - 14\" - Core i5 8250U - 8 GB RAM - 256 GB SSD ', 'The ThinkPad T480 gives you powerful processing and a range of security features in a durable chassis that\'s built to withstand the rigors of the office.', '999.99', 'lenovo-thinkpad-t480.jpg', 'Computers', 10, 'Lenovo, ThinkPad, T480, 14 inch, Core i5, 8GB RAM, 256GB SSD'),
(2, 'HP ProDesk 600 G6 - SFF - Core i5 10500 - 8 GB RAM - 256 GB SSD', 'The HP ProDesk 600 SFF delivers powerful performance, security, and manageability features in a stylish, compact design that fits any workspace.', '899.99', 'hp-prodesk-600-g6.jpg', 'Computers', 5, 'HP, ProDesk, 600 G6, SFF, Core i5, 8 GB RAM, 256 GB SSD, business, desktop, compact design, security features'),
(3, 'Dell OptiPlex 3080 Micro - Core i5 10500T - 8 GB RAM - 256 GB SSD', 'The Dell OptiPlex 3080 Micro delivers essential business-class performance and security in a compact design that\'s perfect for small and medium businesses.', '749.99', 'dell-optiplex-3080-micro.jpg', 'Computers', 15, 'Dell, OptiPlex, 3080 Micro, Core i5, 8 GB RAM, 256 GB SSD, business, desktop, essential performance, security features, compact design'),
(5, 'Logitech M325 Wireless Mouse - Blue', 'The Logitech M325 is a comfortable and reliable wireless mouse that features a contoured design and advanced optical tracking for smooth, precise cursor control.', '29.99', 'logitech-m325-wireless-mouse.jpg', 'Accessories', 20, 'Logitech, M325, wireless, mouse, blue, contoured design, optical tracking'),
(6, 'Amazon Echo Dot (4th Gen) - Smart Speaker with Alexa - Charcoal', 'The Amazon Echo Dot is a powerful smart speaker that can control your smart home devices, play music, answer questions, and more, all with the help of Alexa, Amazon\'s voice assistant.', '59.99', 'amazon-echo-dot-4th-gen.jpg', 'Accessories', 8, 'Amazon, Echo Dot, 4th Gen, smart speaker, Alexa, voice assistant, smart home control, speaker'),
(7, 'Samsung T7 Portable SSD - 500GB - USB 3.2 Gen 2 External Solid State Drive', 'The Samsung T7 Portable SSD delivers fast and reliable storage in a compact and durable design that\'s perfect for professionals on the go.', '99.99', 'samsung-t7-portable-ssd.jpg', 'Accessories', 12, 'Samsung, T7, portable SSD, 500GB, USB 3.2 Gen 2, external solid state drive, fast, reliable, compact, durable'),
(8, 'Smart Thermostat', 'Control the temperature of your home from anywhere', '99.99', 'smart_thermostat.jpg', 'smart-home-devices', 50, 'thermostat, temperature, control'),
(9, 'Xiaomi Mi Smart Speaker ', 'Play music and control your smart home devices with this speaker. \r\n\r\nFeatures Bluetooth and CarPlay settings. ', '149.99', 'smart_speaker.png', 'smart-home-devices', 25, 'speaker, music, control'),
(10, 'MT450 Fingerprint & Keypad Smart Lock', 'This smart lock is suitable for houses, apartments, hotels, and commercial buildings as well. Different modes of entry are offered for flexibility of access. The physical key is still available as a backup.\r\n\r\nThis is battery-operated and can be easily installed into your doors with no special wiring or internet connection needed.', '199.99', 'smart_lock.jpg', 'smart-home-devices', 10, 'lock, security, remote access'),
(11, 'Netflix', 'Stream popular TV shows and movies. Watch award-winning Netflix originals.', '8.99', 'netflix.png', 'digital-streaming-services', 100, 'tv shows, movies, streaming, originals'),
(13, 'Hulu', 'Watch current and past TV shows and movies. Access live TV channels.', '11.99', 'hulu.png', 'digital-streaming-services', 50, 'tv shows, movies, live TV, streaming'),
(14, 'HBO Max', 'Stream new and classic series and movies. Access to HBO content.', '14.99', 'hbomax.jpg', 'digital-streaming-services', 25, 'hbo, series, movies, streaming'),
(15, 'Disney+', 'Stream Disney, Pixar, Marvel, Star Wars, and more. Exclusive originals and classic favorites.', '7.99', 'disney-plus.jpg', 'digital-streaming-services', 50, 'disney, pixar, marvel, star wars, streaming'),
(17, 'Google Cloud AI Platform', 'Develop, deploy and scale machine learning models. Pre-built models and custom training options.', '500.00', 'google_cloud.jpg', 'artificial-intelligence-solutions', 25, 'AI, machine learning, models, training'),
(18, 'Amazon AI Services', 'Natural language processing, computer vision, speech recognition and more. Pre-built APIs and custom models.', '1000.00', 'amazon_ai_services.jpg', 'artificial-intelligence-solutions', 15, 'AI, NLP, computer vision, speech recognition'),
(19, 'Microsoft Azure AI', 'AI-powered analytics, bots, and cognitive services. Machine learning and pre-built APIs.', '2500.00', 'microsoft_azure_ai.jpg', 'artificial-intelligence-solutions', 5, 'AI, analytics, bots, machine learning'),
(20, 'OpenAI', 'Advanced AI research and development. Language models, robotics and more.', '10000.00', 'openai.jpg', 'artificial-intelligence-solutions', 2, 'AI, research, development, language models, robotics');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `userID` int(11) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` text NOT NULL,
  `u_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`userID`, `u_name`, `u_email`, `u_password`) VALUES
(302, 'Shelliboo', '1alexcia1@gmail.com', '$2y$10$i5fUPts6D.ScuaBfKJlAW.bodiv5yw91HhNj253KHy229khwdPiFy'),
(304, 'Terry', '1rose2345@gmail.com', '$2y$10$XaMSMKxBAAq7TszFxNl6wO0v2DkSaYtvi2rI4uKxF2Ef2614pJQ4q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `fk_cart_user` (`userID`),
  ADD KEY `fk_cart_product` (`productID`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `products_tbl_old`
--
ALTER TABLE `products_tbl_old`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products_tbl_old`
--
ALTER TABLE `products_tbl_old`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD CONSTRAINT `fk_cart_product` FOREIGN KEY (`productID`) REFERENCES `products_tbl` (`productID`),
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`userID`) REFERENCES `user_tbl` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
