-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 09 mai 2023 à 18:20
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travel`
--
DROP DATABASE if EXISTS `travel`;
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `continent` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`continent`, `name`, `description`, `image`) VALUES
('South America', 'Argentina', 'Argentina is a diverse and captivating destination with something for everyone to enjoy. From the bustling streets of\r\n                                Buenos Aires, with its rich culture and tango rhythms, to the breathtaking natural wonders of the Andes mountains and\r\n                                the awe-inspiring Iguazu Falls, Argentina offers a wealth of experiences to discover and explore.', '../pics/argentina.jpg'),
('South America', 'Brazil', 'Brazil is a captivating country that offers travelers a rich tapestry of diverse cultures, breathtaking\r\n                                natural beauty, and vibrant cities. From the pristine beaches of Rio de Janeiro and the lush Amazon rainforest,\r\n                                to the pulsating rhythms of samba and the mouth-watering flavors of Brazilian cuisine, there\'s always something new and\r\n                                exciting to discover in this South American gem', 'pics/brazil.jpg'),
('North America', 'Canada', 'Canada, a vast and diverse country, offers a treasure trove of natural beauty and\r\n                                cultural\r\n                                wonders to explore, from the breathtaking Rocky Mountains to the vibrant cities of\r\n                                Toronto,\r\n                                Vancouver, and Montreal. With friendly locals and an abundance of outdoor adventures,\r\n                                Canada is a must-visit destination.', 'pics/canada.jpg'),
('Europe', 'France', 'France, a timeless and romantic destination, offers a world of exquisite cuisine, art, and culture.\r\n                                From the iconic Eiffel Tower in Paris to the picturesque vineyards of Bordeaux, and the historic chateaux\r\n                                of the Loire Valley, France is a treasure trove of landmarks and experiences that await travelers to discover\r\n                                its enchanting beauty and savoir-faire.', 'pics/france.jpg'),
('Asia', 'India', 'India, a land of diversity and contrasts, enthralls travelers with its rich history, culture,\r\n                                and spirituality. From the iconic Taj Mahal in Agra to the bustling streets of Delhi,\r\n                                India offers a sensory explosion of colors, flavors, and experiences where you can \r\n                                immerse in its vibrant tapestry of traditions.', 'pics/indua.jpg'),
('Asia', 'Indonesia', 'Indonesia: a vibrant and diverse tropical paradise, boasting stunning beaches, lush rainforests,\r\n                            and unique cultural experiences. Explore its rich heritage and indulge in its mouth-watering cuisine. \r\n                            From the bustling streets of Jakarta to the idyllic beaches of Bali, Indonesia offers something for everyone.', '../pics/indonisia.jpg'),
('Europe', 'Italy', 'Italy, the land of la dolce vita, beckons with its rich history, delicious cuisine, and\r\n                                breathtaking landscapes. From the iconic ancient ruins of Rome to the romantic canals of Venice,\r\n                                and the stunning coastlines of the Amalfi Coast, Italy offers an unrivaled blend of art, culture,\r\n                                and natural beauty that entices travelers to explore and discover its timeless charm.', 'pics/italy.jpg'),
('Asia', 'Japan', 'Japan is a captivating blend of ancient traditions and modern marvels that offer travelers a\r\n                                unique cultural experience. It offers a world of striking contrasts from the serene temples of Kyoto\r\n                                to cutting-edge technology, and timeless cultural treasures waiting to be explored and discovered.', 'pics/japan.jpg'),
('North America', 'Mexico', 'Mexico is a vibrant destination that offers a rich tapestry of culture, history, and\r\n                                natural beauty.\r\n                                From exploring ancient ruins and indulging in delicious cuisine to\r\n                                immersing in colorful festivals, Mexico is a treasure trove of experiences waiting to be\r\n                                discovered by\r\n                                adventurous travelers.', 'pics/mexico.jpg'),
('Africa', 'Morocco', 'Morocco is a vibrant destination that offers a rich tapestry of history, culture,\r\n                                and natural beauty. From the bustling markets of Marrakech to the awe-inspiring Sahara desert,\r\n                                Morocco is a treasure trove of exotic experiences waiting to be discovered by adventurous travelers.', 'pics/morroco.jpg'),
('South America', 'Peru', 'Peru is a land of ancient wonders, where travelers can explore the mystical ruins of Machu Picchu, immerse themselves\r\n                                in the colorful traditions of the Andean people, and indulge in the tantalizing flavors of Peruvian cuisine. With its\r\n                                rich history, breathtaking landscapes, and warm hospitality, Peru offers a truly unforgettable travel experience.', '../pics/peru.jpg'),
('Africa', 'South Africa', '  South Africa is a diverse and captivating destination that offers a rich blend of cultures, landscapes,\r\n                                and wildlife. From the iconic Table Mountain in Cape Town to the vast plains of Kruger National Park,\r\n                                travelers can explore the country\'s stunning natural beauty, indulge in its renowned wine regions,\r\n                                and experience its vibrant history and cultural heritage.', 'pics/southafrica.jpg'),
('Europe', 'Spain', 'Spain is a captivating destination with its vibrant culture, rich history, and stunning landscapes.\r\n                                From the bustling streets of Barcelona to the Moorish palaces of Granada, and the sun-drenched beaches\r\n                                of the Costa del Sol, Spain offers a tapestry of experiences that beckon travelers to immerse themselves\r\n                                in its lively traditions, flavorful cuisine, and warm hospitality.', '../pics/spain.jpg'),
('Australia', 'Sydney', 'Sydney, the jewel of Australia\'s east coast, is a vibrant city that beckons tourists with its\r\n                                iconic landmarks and stunning natural beauty. From the world-famous Sydney Opera House, with its\r\n                                distinctive sail-like design, to the sun-kissed beaches of Bondi and Manly, Sydney offers a captivating\r\n                                blend of modernity and nature that promises an unforgettable experience for every traveler.', 'pics/sydney.jpg'),
('Africa', 'Tanzania', 'Tanzania is a treasure trove for adventure seekers and wildlife enthusiasts. With its world-famous\r\n                                Serengeti National Park, majestic Mount Kilimanjaro, and pristine Zanzibar beaches, Tanzania offers a\r\n                                unique blend of safari experiences, breathtaking landscapes, and vibrant Swahili culture that make it\r\n                                an unforgettable destination for travelers to explore and discover.', '../pics/tanzania.jpg'),
('Australia', 'The Great Barrier Reef', 'Visiting the Great Barrier Reef is an unforgettable experience. With its stunningly clear waters and incredible biodiversity, it\'s a must-see destination for any nature lover. Whether you choose to snorkel, scuba dive, or take a scenic flight over the reef, you\'re sure to be amazed by the beauty and diversity of this natural wonder.', 'https://i.pinimg.com/564x/81/f7/f7/81f7f7b0f05dd3e203c004e24a6b7104.jpg'),
('Australia', 'Uluru', 'Uluru, the majestic red monolith rising out of the Australian outback in the Northern Territory,\r\n                                is a destination like no other. Its awe-inspiring size and spiritual significance to the Aboriginal\r\n                                people make it a captivating site to explore. A trip to Uluru promises a unique and unforgettable experience that will leave travelers with memories to cherish for a lifetime..', '../pics/uluru.jpg'),
('North America', 'USA', 'The United States offers a plethora of diverse and captivating destinations to explore,\r\n                                from the bustling streets of New York City to the natural wonders of Yosemite National\r\n                                Park.\r\n                                With its stunning landscapes, and vibrant cities, the U.S. is a\r\n                                destination that offers something for every traveler to discover.', 'pics/us.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `countrydetails`
--

CREATE TABLE `countrydetails` (
  `name` varchar(255) NOT NULL,
  `paragraph` text DEFAULT NULL,
  `place1` varchar(255) DEFAULT NULL,
  `titlePlace1` varchar(255) DEFAULT NULL,
  `place2` varchar(255) DEFAULT NULL,
  `titlePlace2` varchar(255) DEFAULT NULL,
  `place3` varchar(255) DEFAULT NULL,
  `titlePlace3` varchar(255) DEFAULT NULL,
  `place4` varchar(255) DEFAULT NULL,
  `titlePlace4` varchar(255) DEFAULT NULL,
  `place5` varchar(255) DEFAULT NULL,
  `titlePlace5` varchar(255) DEFAULT NULL,
  `place6` varchar(255) DEFAULT NULL,
  `titlePlace6` varchar(255) DEFAULT NULL,
  `food1` varchar(255) DEFAULT NULL,
  `titleFood1` varchar(255) DEFAULT NULL,
  `food2` varchar(255) DEFAULT NULL,
  `titleFood2` varchar(255) DEFAULT NULL,
  `food3` varchar(255) DEFAULT NULL,
  `titleFood3` varchar(255) DEFAULT NULL,
  `food4` varchar(255) DEFAULT NULL,
  `titleFood4` varchar(255) DEFAULT NULL,
  `food5` varchar(255) DEFAULT NULL,
  `titleFood5` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `countrydetails`
--

INSERT INTO `countrydetails` (`name`, `paragraph`, `place1`, `titlePlace1`, `place2`, `titlePlace2`, `place3`, `titlePlace3`, `place4`, `titlePlace4`, `place5`, `titlePlace5`, `place6`, `titlePlace6`, `food1`, `titleFood1`, `food2`, `titleFood2`, `food3`, `titleFood3`, `food4`, `titleFood4`, `food5`, `titleFood5`, `video`, `image`) VALUES
('Argentina ', '\r\nArgentina is a country of vast natural beauty and diverse cultures, making it a unique destination for any traveler. From the stunning Andes mountains to the vibrant city life of Buenos Aires, from the breathtaking glaciers of Patagonia to the colorful colonial town of Salta, Argentina has something to offer for every taste. The country\'s rich history, art, music, and literature scenes are also worth exploring, as they reflect the cultural diversity that makes Argentina such a fascinating place. Additionally, Argentine cuisine is a true delight, with mouth-watering dishes like empanadas, asado, and dulce de leche that are sure to satisfy any foodie\'s cravings. But what truly sets Argentina apart is the warmth and friendliness of its people, who are known for their hospitality and welcoming spirit. So if you\'re looking for an adventure of a lifetime, come and explore the wonders of Argentina, and you\'ll come back with memories that will last a lifetime.', 'https://tinyurl.com/38yysks3', 'Buenos Aires', 'https://tinyurl.com/4ssbcbby', 'Iguazu Falls\r\n', 'https://tinyurl.com/ytp885e7', 'Salta \r\n', 'https://tinyurl.com/2p8zn7ts', 'Mendoza', 'https://tinyurl.com/5n882yrd', 'Patagonia', 'https://tinyurl.com/4dc5y7dm', 'Bariloche ', 'https://tinyurl.com/5n8ae8y3', 'Asado ', 'https://tinyurl.com/56rmc736', 'Empanadas ', 'https://tinyurl.com/4bn4maab', 'Milanesa ', 'https://cdn.loveandlemons.com/wp-content/uploads/2020/02/chimichurri.jpg', 'Chimichurri ', 'https://tinyurl.com/4hxh9vcs', 'Dulce de leche', 'https://www.youtube.com/embed/8OvfmZ_TTkM', 'https://fotos.perfil.com/2022/07/14/trim/1280/720/ciudad-de-buenos-aires-1386884.jpg'),
('Brazil', 'Brazil is a land of stunning natural beauty and diverse cultures that make it a unique destination for any traveler. From the vast Amazon rainforest to the breathtaking beaches of Rio de Janeiro, from the vibrant city life of Sao Paulo to the colorful colonial towns of Salvador and Olinda, Brazil has something to offer for every taste. The country\'s rich history, art, music, and literature scenes are also worth exploring, as they reflect the cultural diversity that makes Brazil such a fascinating place. Additionally, Brazilian cuisine is a true delight, with mouth-watering dishes like feijoada, coxinha, and brigadeiro that are sure to satisfy any foodie\'s cravings. But what truly sets Brazil apart is the warmth and friendliness of its people, who are known for their hospitality and welcoming spirit. So if you\'re looking for an adventure of a lifetime, come and explore the wonders of Brazil, and you\'ll come back with memories that will last a lifetime.', 'https://a.cdn-hotels.com/gdcs/production143/d357/42fb6908-dcd5-4edb-9f8c-76208494af80.jpg', 'Rio de Janeiro ', 'https://tinyurl.com/44uwvkms', 'Salvador', 'https://tinyurl.com/mrrn2xdp', 'Iguaçu Falls', 'https://tinyurl.com/3z6um5m9', 'Florianópolis', 'https://tinyurl.com/yunjtyyh', 'Chapada Diamantina', 'https://tinyurl.com/3d9u89t3', 'Amazon Rainforest', 'https://tinyurl.com/mjf8zv68', 'Feijoada ', 'https://tinyurl.com/yh7ctzuv', 'Brigadeiro ', 'https://tinyurl.com/mr2ut972', 'Coxinha ', 'https://tinyurl.com/2s3euy36', 'Pão de queijo ', 'https://th.bing.com/th/id/OIP.q5WWR7fZxQdaa9SjOgFQhgHaE7?pid=ImgDet&rs=1', 'Moqueca ', 'https://www.youtube.com/embed/sW1SWAN6zlQ', 'https://getwallpapers.com/wallpaper/full/c/3/1/988170-rio-de-janeiro-wallpaper-1920x1200-for-ipad-2.jpg'),
('Canada', 'Canada, the land of breathtaking landscapes and warm-hearted people, awaits your arrival with open arms. From the towering peaks of the Canadian Rockies to the pristine lakes and sprawling forests, this vast country offers a myriad of natural wonders to explore. Immerse yourself in the vibrant cities, such as Toronto, Vancouver, or Montreal, where multiculturalism thrives and a vibrant arts scene awaits. Discover the rich Indigenous heritage that is deeply rooted in the country\'s history, or embark on an unforgettable wildlife adventure, encountering majestic whales or observing elusive bears in their natural habitat. Canada\'s reputation for safety, cleanliness, and hospitality ensures a worry-free and unforgettable journey. So pack your bags, embrace the true north\'s charm, and let Canada\'s splendor capture your heart. Your adventure awaits in the Great White North!', 'https://cdn.britannica.com/71/94371-050-293AE931/Mountains-region-Ten-Peaks-Moraine-Lake-Alberta.jpg', 'Banff National Park, Alberta', 'https://media.cntraveler.com/photos/5f934006fd98f7717febd296/master/w_1600%2Cc_limit/5cb4bd15cec0f6ee44a12d09_%25C2%25A9TPEI018_SAN_2018.06.27__20.33.47.jpg', 'Prince Edward Island', 'https://media.lmpm.website/uploads/sites/74/2018/12/I_Blackcomb_Dusk_1-scaled.jpg', 'Whistler, British Columbia', 'https://media.cntraveler.com/photos/5b311699fe04d40b64b22c9e/16:9/w_2560,c_limit/Niagara-Falls_GettyImages-959566100.jpg', 'Niagara Falls, Ontario', 'https://landsby.ca/wp-content/uploads/2021/09/Northern-Lights_Frontiers-North_Churchill_March-2022_Credit-Travel-Manitoba_TMB7767-large.jpg', 'Churchill, Manitoba', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/76/79/95/chesterman-beach.jpg?w=600&h=400&s=1', 'Tofino, British Columbia', 'https://thebeachhousekitchen.com/wp-content/uploads/2021/06/Canadian-Butter-Tarts-1-of-1-14.jpg', 'Butter tarts', 'https://www.girlversusdough.com/wp-content/uploads/2021/01/montreal-bagels-2-600x900.jpg', 'Montreal-style bagels', 'https://aubreyskitchen.com/wp-content/uploads/2022/09/traeger-smoked-salmon.jpg', 'Smoked salmon', 'https://preppykitchen.com/wp-content/uploads/2021/02/Nanaimo-Bars-Recipe.jpg', 'Nanaimo bars', 'https://static.weezbe.com/saveurserable/Images/products/p_130G_211207154439.jpg', 'Tourtière', 'https://www.youtube.com/embed/yyTbxCohs78', 'https://a.cdn-hotels.com/gdcs/production159/d204/01ae3fa0-c55c-11e8-9739-0242ac110006.jpg'),
('France', 'France, a land of exquisite beauty, rich history, and unparalleled charm, awaits your arrival. From the romantic streets of Paris to the sun-kissed beaches of the French Riviera, this enchanting country offers a myriad of experiences that will captivate your senses and leave you longing for more.\r\n\r\nImmerse yourself in the artistic masterpieces of the Louvre Museum, where the Mona Lisa beckons with her enigmatic smile. Explore the majestic châteaux of the Loire Valley, stepping into a world of fairy tales and grandeur. Indulge in the culinary delights of French cuisine, savoring delicate pastries, velvety cheeses, and world-renowned wines that will delight your taste buds.\r\n\r\nVenture beyond the iconic landmarks and discover the hidden gems that lie in every corner of France. Wander through quaint villages adorned with colorful flower boxes, where time seems to stand still. Stroll along the banks of the Seine River, absorbing the poetic ambiance that inspired countless writers and artists throughout history..', 'https://travellersworldwide.com/wp-content/uploads/2022/06/shutterstock_667548661.png.webp', 'Paris', 'https://static1.s123-cdn-static-a.com/uploads/3086630/2000_5e4bcee616b92.jpg', 'Versailles', 'https://cdn.sortiraparis.com/images/80/1467/523194-visuel-paris-arc-de-triomphe.jpg', 'arc de triomphe', 'https://a.travel-assets.com/findyours-php/viewfinder/images/res70/481000/481844-Bordeaux.jpg', 'Bordeaux', 'https://rivierabarcrawltours.com/wp-content/uploads/2020/04/provence-pic.jpg', 'Provence', 'https://www.planetware.com/photos-large/F/france-french-alps-chamonix.jpg', 'French Alps', 'https://lacuisinedegeraldine.fr/wp-content/uploads/2023/01/homemade-croissants-26-scaled.jpg', 'Croissant', 'https://foragerchef.com/wp-content/uploads/2014/02/foie-gras-with-ramps-and-apricots-4-2.jpg', 'Foie Gras', 'https://www.papillesetpupilles.fr/wp-content/uploads/2015/08/Ratatouille-%C2%A9comeirrez-shutterstock.jpg', 'Ratatouille', 'https://ileauxepices.com/blog/wp-content/uploads/2015/01/bouillabaisse-marsellaise-rouille-et-poisson.jpg', 'Bouillabaisse', 'https://images-prod.healthline.com/hlcmsresource/images/AN_images/healthiest-cheese-1296x728-swiss.jpg', 'Cheese', 'https://www.youtube.com/embed/j9q3NLqUvxI', 'https://www.lonelyplanet.fr/sites/lonelyplanet/files/styles/manual_crop/public/media/destination/slider/mobile/paris2.jpg?itok=Apn99YoY'),
('INDIA', 'India is a land of diversity and contrasts, and visiting this country can be an enriching experience for  anyone seeking to explore new cultures, histories, and ways of life. From the majestic Himalayas to the sun-kissed beaches of Goa, from the bustling cities of Delhi and Mumbai to the tranquil backwaters of Kerala, India has something for everyone. The country\'s rich history, vibrant art and music scenes, and mouth-watering cuisine are sure to captivate any visitor. Moreover, India is known for its warm hospitality and friendly people, who will welcome you with open arms and make you feel at home.So if you\'re looking for an adventure of a lifetime, come and explore the wonders of India, and you\'ll come back with memories that will last a lifetime.', './pictures/tajmahal.jpg', 'Taj Mahal', './pictures/kerala.jpg', 'Kerala', './pictures/Golden-Temple.webp', 'Golden Temple', './pictures/jaipur.webp', 'Jaipur', './pictures/laketoba.jpeg', 'Varanasi', './pictures/hampi.jpg', 'Hampi', './pictures/butter-chicken-4.jpg', 'Butter chicken', './pictures/Biryani.jpeg', 'Biryani', './pictures/Panipuri.jpg', 'Golgappa/Pani Puri', './pictures/Samosa-2-3.jpg', 'Samosa', './pictures/Dhokla.jfif', 'Dhokla', 'https://www.youtube.com/embed/35npVaFGHMY', './pictures/india_.jpg'),
('Indonesia', 'Indonesia, with its breathtaking natural beauty, rich cultural heritage, and warm hospitality, is a destination that should not be missed. With over 17,000 islands, Indonesia offers a diverse array of experiences, from pristine white-sand beaches and turquoise waters to lush rainforests teeming unique wildlife. Explore ancient temples, vibrant markets, and traditional villages that showcase the country\'s rich history and cultural diversity. Immerse yourself in the warmth of the local people,indulge in the tantalizing flavors of Indonesian cuisine, and witness breathtaking sunrises Whether you\'re an adventure seeker, a history buff, a nature lover.', './pictures/borobudurTemple.jfif', 'Borobudur Temple', './pictures/KomodoPark.webp', 'Komodo National Park', './pictures/bali.jpg', 'Bali', './pictures/mountbromo.jpg', 'Mount Bromo', './pictures/laketoba.jpeg', 'Lake Toba', './pictures/giliisland.webp', '>Gili Islands', './pictures/gado gado.webp', 'Gado-Gado', './pictures/soto.jpg', 'Soto', './pictures/basko.jpg', 'Bakso', './pictures/nasi goreng.jpg', ' Nasi Goreng', './pictures/rendag.jpg', 'Rendang', 'https://www.youtube.com/embed/2df5m0JcNS0', './pictures/indonesiaa.jpg'),
('Italy', 'Spain, Italy, a captivating country that weaves history, art, and natural beauty into an enchanting tapestry, awaits your discovery. From the ancient ruins of Rome to the romantic canals of Venice, Italy offers a sensory feast that will leave you spellbound. Immerse yourself in the Renaissance wonders of Florence, where masterpieces by Michelangelo and Botticelli adorn magnificent galleries. Explore the picturesque villages of the Amalfi Coast, bask in the glorious Tuscan countryside, or indulge in the culinary delights of Naples and Bologna. Let the serene beauty of Lake Como and the vibrant colors of the Cinque Terre take your breath away. Whether you seek cultural treasures, breathtaking landscapes, or delectable cuisine, Italy is a feast for the senses. Come, wander through the ancient ruins, stroll along cobblestone streets, and savor the warmth and hospitality of the Italian people. Let Italy\'s timeless allure capture your heart and create memories to last a lifetime.', 'https://www.fodors.com/wp-content/uploads/2018/10/HERO_UltimateRome_Hero_shutterstock789412159.jpg', 'Rome', 'https://cdn.britannica.com/71/8671-050-2EE6A745/Cathedral-Florence-Santa-Maria-del-Fiore.jpg', 'Florence', 'https://static.saltinourhair.com/wp-content/uploads/2019/04/23140026/things-to-do-venice-italy-header-768x662.jpg', 'Venice', 'https://www.travelandleisure.com/thmb/c-nuaEqUffHAByhV7Ls6iDEeXwc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/TAL-header-atrani-italy-amalfi-coast-AMALFITOWNS0223-c516bc91bb434e19b5ec6e2fb50cb9eb.jpg', 'Amalfi Coast', 'https://partir.ouest-france.fr/magazine/wp-content/uploads/2019/09/cinque-terre.jpg', 'Cinque Terre', 'https://media.timeout.com/images/105490133/image.jpg', 'Sicily', 'https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/62c59f6365a259b03da440de3973f201/Derivates/668cba6648888c61d249c0a5d9651157a4ce3793.jpg', 'Pizza Napoletana', 'https://realfood.tesco.com/media/images/1400x919-SpaghettiCarbonara-557b6ff5-c4f3-4565-ae8e-a506f7dcc415-0-1400x919.jpg', 'Pasta Carbonara:', 'https://insanelygoodrecipes.com/wp-content/uploads/2022/07/Assorted-Gelato-Ice-Cream-with-Berries-Chocolate-and-Pistachio-500x500.jpg', 'Gelato', 'https://www.mycake.fr/wp-content/uploads/2020/11/rs_tiramisu_1x1.jpg', 'Tiramisu', 'https://www.pastafrescarossi.it/Handlers/Image.ashx?ID=82162673-7781-4417-bfeb-c74ae078b5e4&src=ravioli-di-magro-860x530.jpg&wh=%40%1DS', 'Ravioli di Magro', 'https://www.youtube.com/embed/avLutMvjrQ0', 'https://lp-cms-production.imgix.net/features/2017/11/GettyRF_543346423-1-ab159824d5bd.jpg'),
('Japan', 'Japan is a fascinating country that offers a unique and unforgettable travel experience. With a rich history, diverse culture, and stunning natural beauty, Japan has something for everyone. From the bustling cities of Tokyo and Kyoto to the peaceful countryside and ancient temples, Japan has a lot to explore. Its delicious cuisine, including sushi and ramen, is world-renowned, and its advanced technology and fashion scene are also worth exploring. Japan is known for its politeness, cleanliness, and safety, making it a great destination for solo travelers,families, and couples alike. If you\'re looking for a travel destination that offers a perfect blend  of tradition and modernity, Japan is the place to go. So pack your bags and get ready for an adventure you\'ll never forget!', './pictures/Kyoto.jpeg', 'Kyoto', './pictures/Mount Fuji.jpg', 'Mount Fuji', './pictures/Tokyo.jpg', 'Tokyo', './pictures/Okinawa.webp', 'Okinawa', './pictures/Nara.webp', 'Nara', './pictures/Hokkaidoo.jpg', 'Hokkaido', './pictures/sushi.webp', 'Sushi', './pictures/ramen-poulet.jpg', 'Ramen', './pictures/tempura.jfif', 'Tempura', './pictures/yakt.jpeg', 'Yakitori', './pictures/Tonkatsu.jpeg', 'Tonkatsu', 'https://www.youtube.com/embed/rcnLTnGGBU0', './pictures/japan.jpg'),
('Mexico', 'Mexico is a vibrant and culturally-rich country that has something to offer for every type of traveler. Whether you are looking for beautiful beaches, ancient ruins, delicious food, or colorful markets, Mexico has it all. One of the most popular destinations in Mexico is Cancun, which is located on the northeastern coast of the Yucatan Peninsula. With its turquoise waters and white sand beaches, Cancun is a paradise for beach lovers. The nearby island of Cozumel is another must-visit destination, known for its stunning coral reefs and crystal-clear waters that are perfect for snorkeling and diving.\r\nNo trip to Mexico would be complete without trying the delicious local cuisine. Mexican food is famous around the world for its bold flavors and fresh ingredients, and there is no shortage of amazing dishes to try. From tacos and enchiladas to guacamole and churros, there is something for everyone. And for those who enjoy a good drink, Mexico is the birthplace of tequila and mezcal, which are both a must-try for any visitor.', 'https://i.pinimg.com/564x/aa/d7/15/aad7156e09e6c837a557757518da1818.jpg', 'Cancun and Cozumel', 'https://i.pinimg.com/564x/53/d8/8b/53d88b312e2116baefa69a064b84eb66.jpg', 'Chichen Itza and Tulum', 'https://i.pinimg.com/564x/72/28/f1/7228f1ee87617698f04a1dfb74204422.jpg', 'Mexico City', 'https://i.pinimg.com/564x/e6/e4/6e/e6e46e8003c7503fd2f12ba47749f830.jpg', 'Puerto Vallarta', 'https://i.pinimg.com/564x/e3/8d/35/e38d352ee13dd1cb9a6087a0c1edb24b.jpg', 'Guadalajara', 'https://i.pinimg.com/564x/76/0f/98/760f981080f5586cb2bdef84e76ca445.jpg', 'Cabo San Lucas', 'https://i.pinimg.com/564x/0f/97/42/0f9742bbbde470342e99d9cf63b3460b.jpg', 'Tacos al Pastor', 'https://i.pinimg.com/564x/bd/7c/71/bd7c7142ad18c04823bfe240f6fae188.jpg', 'Guacamole', 'https://i.pinimg.com/564x/17/d8/31/17d8314bb2e1685e4c251f6eb73348a1.jpg', 'Chiles Rellenos', 'https://i.pinimg.com/564x/17/51/cb/1751cb8cba8f83e8996167d9e579cab9.jpg', 'Tamales', 'https://i.pinimg.com/564x/23/cc/17/23cc176e7e967058152d2dcb51a5f7fc.jpg', 'Churros', 'https://www.youtube.com/embed/Xgk-5rTPq3c', 'https://i.pinimg.com/564x/d2/02/90/d2029058b5ba4a836c0264cd5f34b374.jpg'),
('Morocco', 'Morocco is a North African country known for its vibrant culture, stunning architecture, and diverse landscapes that range from rugged mountains to sweeping deserts. It\'s a popular destination for tourists seeking to experience its bustling markets, flavorful cuisine, and ancient history. Morocco is also known for its rich tradition of music, art, and literature, and its people are renowned for their hospitality and warmth', './pictures/morroco/agadir.jpg', 'Agadir', './pictures/morroco/casablanca.jpg', 'Casablanca', './pictures/morroco/ait ben haddou.jpg', 'Ait Ben Haddou', './pictures/morroco/fes.jpg', 'Fes', './pictures/morroco/marrakech.jpg', 'Marrakech', './pictures/morroco/ouarzazate.jpg', 'Ouarzazate', './pictures/morroco/couscous.jpg', 'Couscous', './pictures/morroco/taktouka.jpg', 'Taktouka', './pictures/morroco/tajin.jpg', 'Tajin', './pictures/morroco/harira.jpg', 'Harira', './pictures/morroco/bissara.jpg', 'Bissara', './video/morroco.mp4', './pictures/morroco/morroco.jpg'),
('Peru', 'Peru is a country full of fascinating contrasts, where ancient traditions blend with modern ways of life. From the iconic Machu Picchu ruins to the colorful colonial architecture of Cusco, from the exotic Amazon jungle to the stunning beauty of the Andes, Peru offers a wealth of natural and cultural wonders that are sure to captivate any traveler. The country\'s rich history, art, and cuisine also contribute to its unique character, with highlights including the Nazca Lines, the vibrant city of Lima, and the renowned ceviche dish. Additionally, the warmth and kindness of the Peruvian people create a welcoming and friendly atmosphere that makes visitors feel right at home. With its diverse landscapes, intriguing history, and vibrant culture, Peru is a destination that should be on every traveler\'s bucket list.', 'https://tinyurl.com/3y2f4vv9', 'Machu Picchu', 'https://tinyurl.com/5fbjdua2', 'Lake Titicaca', 'https://tinyurl.com/3d9u89t3', 'The Amazon Rainforest', 'https://tinyurl.com/mr2tfsx8', 'The Sacred Valley', 'https://tinyurl.com/t2a2c75h', 'Lima', 'https://tinyurl.com/yc67ywjh', 'Cusco', 'https://tinyurl.com/26hyrrww', 'Ceviche', 'https://tinyurl.com/2hv6vxtn', 'Lomo Saltado', 'https://tinyurl.com/2ktznxpv', 'Ají de Gallina', 'https://www.comedera.com/wp-content/uploads/2022/03/Anticucho-shutterstock_185287433.jpg', 'Anticuchos ', 'https://tinyurl.com/2s432ezp', 'Pisco Sour ', 'https://www.youtube.com/embed/1La4QzGeaaQ', 'https://wallpapercave.com/wp/wp1844667.jpg'),
('South Africa', 'South Africa is a southern African country renowned for its stunning natural landscapes, diverse wildlife, and rich cultural heritage. It\'s known for its history of apartheid and its successful transition to a democratic nation. South Africa boasts a strong economy and is home to numerous iconic landmarks such as Table Mountain and the Kruger National Park. It\'s a popular tourist destination, with visitors drawn to its beautiful beaches, world-class vineyards, and bustling cities. ', './pictures/south africa/blyde river canyon.jpg', 'Blyde River canyon', './pictures/south africa/cape peninsula.jpg', 'Cape peninsula', './pictures/south africa/cape town.jpg', 'Cape Town', './pictures/south africa/kruger park.jpg', 'Kruger Park', './pictures/south africa/hermanus.jpg', 'Hermanus', './pictures/south africa/garden route.jpg', 'Garden Route', './pictures/south africa/bobotie.jpg', 'Bobotie', './pictures/south africa/biltong.jpg', 'Biltong', './pictures/south africa/boerowors.jpg', 'Boerowors', './pictures/south africa/durban bunny.jpg', 'Durban Bunny', './pictures/south africa/vetkoek.jpg', 'Vetkoek', './video/southafrica.mp4', 'https://tinyurl.com/22fbs6wy'),
('Spain', 'Spain, a land of vibrant culture and breathtaking beauty, beckons you to embark on an unforgettable journey. From the lively streets of Barcelona to the historic charm of Madrid, Spain offers a tapestry of experiences that will leave you enchanted. Indulge in the rich flavors of tapas, savor the world-renowned wines, and immerse yourself in the passionate rhythms of flamenco. Explore the architectural wonders of Antoni Gaudí, lose yourself in the narrow alleys of ancient towns, or bask in the sun-kissed beaches along the Mediterranean coast. Whether you seek art, history, cuisine, or simply the warmth of its people, Spain will captivate your heart and ignite your senses. Let the spirit of fiesta embrace you as you discover the magic and charm that make Spain an irresistible destination. Come, let Spain embrace you in its embrace of beauty and culture.', 'https://cdn.generationvoyage.fr/2019/05/visiter-ibiza-e1558965384643.jpg', 'Ibiza', 'https://tinyurl.com/5fbjdua2', 'Barcelona', 'https://www.hellehollis.com/blog/en/wp-content/uploads/2019/08/Cordoba-at-sunset.jpg', 'Cordoba', 'https://a.cdn-hotels.com/gdcs/production85/d1474/95ef4e66-fd92-41dc-99af-c7f628857eb6.jpg', 'Seville', 'https://www.caminodesantiago.gal/osdam/filestore/7/1/7/6/0_7eef4e67c0cf83d/71760scr_0015f5e21ee4627.jpg', 'Santiago de Compostela', 'https://static.saltinourhair.com/wp-content/uploads/2019/07/23133327/valencia-spain-city-arts-sciences.jpg', 'Valencia', 'https://content.joseedistasio.ca/app/uploads/2020/03/04102344/PAELLA.jpg', 'Paella', 'https://images.immediate.co.uk/production/volatile/sites/30/2022/05/Meatball-Patatas-Bravas-2dcb0fc.jpg?quality=90&resize=556,505', 'Tapas', 'https://spanishsabores.com/wp-content/uploads/2015/11/IMG_5988-1024x683.jpg', 'Pintxos', 'https://resize.elle.fr/portrait/var/plain_site/storage/images/elle-a-table/recettes-de-cuisine/churros-ou-chichis-2078960/22073372-3-fre-FR/Churros-ou-chichis.jpg', 'Churros ', 'https://assets.unileversolutions.com/recipes-v2/37805.jpg', 'Tortilla Española', 'https://www.youtube.com/embed/n2ZvJd8aDRU', 'https://www.schengenvisainfo.com/news/wp-content/uploads/2022/02/Barcelona-Spain.-Nighttime-top-view-at-Spanish-Square.jpg'),
('Sydney', '\r\nSydney is a vibrant and cosmopolitan city located in Australia, known for its stunning architecture, beautiful beaches, and world-class cultural attractions. The city\'s iconic landmarks, such as the Sydney Opera House and the Sydney Harbour Bridge, make it a must-visit destination for any traveler. Visitors can enjoy breathtaking views of the city\'s skyline from various vantage points, including the top of the bridge or from one of the many ferries that crisscross the harbor. The city\'s beautiful beaches, such as Bondi and Manly, offer visitors the chance to relax and soak up the sun while enjoying the Australian surf culture. With its diverse food scene and bustling nightlife, Sydney offers something for every traveler, making it the perfect destination for a truly unforgettable holiday.', 'https://cms-cdn.travellink.com.au/volumes/brilliant-travels/images/syddroneimage.jpg?v=1606449331', 'Sydney Harbour\r\n', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_auto,h_600,q_auto,w_auto/v1/filestore/4053hn7mcjxo772mo7ex6ohg5s4g_eydkay41cs5mgpykxdt2.webp', 'Taronga Zoo ', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_auto,h_600,q_auto,w_auto/v1/filestore/py0k8x8jufb33y24zv8rh78pvzvz_292c2973-6dee-45d6-8e3c-9d8354bb5f48-10295-sydney-sydney--visit-2.jpeg', 'Sydney Tower Eye', 'https://i.pinimg.com/564x/bc/52/d1/bc52d176c38bd0a46a321223caf5314e.jpg', 'Royal Botanic Garden Sydney\r\n', 'https://i.pinimg.com/564x/a5/e8/1a/a5e81a6124b5049fc51452eb0df19503.jpg', 'Queen Victoria Building', 'https://i.pinimg.com/564x/31/25/57/3125571721c4eb84203c0ca7f50e2c90.jpg', 'SEA LIFE Sydney Aquarium', 'https://a.cdn-hotels.com/gdcs/production91/d801/4b5ebd45-5cf4-4fc8-83cd-875395617364.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'Barramundi', 'https://a.cdn-hotels.com/gdcs/production123/d394/b03aac63-cfe5-4c25-9ddb-9ac2c05bf3d4.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'Sydney rock oyster', 'https://a.cdn-hotels.com/gdcs/production165/d353/81aacecc-b55e-4e54-b117-f4b9134e4dad.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'Australian prawns', 'https://a.cdn-hotels.com/gdcs/production57/d1818/f22319bf-c9c9-4797-8484-ebdc89d23ae4.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'Avocado on toast', 'https://a.cdn-hotels.com/gdcs/production77/d388/1988d9dc-944c-4202-9347-d2b10794bd4a.jpg?impolicy=fcrop&w=1600&h=1066&q=medium', 'Bacon and egg roll', 'https://www.youtube.com/embed/OrIDTJH2ZZM', 'https://i.pinimg.com/564x/b6/27/e9/b627e9634bac99de88844fda703c59e4.jpg'),
('Tanzania', '\r\nTanzania is an East African country known for its breathtaking wildlife and natural beauty, including the iconic Mount Kilimanjaro and the Serengeti National Park. It\'s home to a diverse range of ethnic groups, each with their own unique culture and traditions. Tanzania\'s economy is largely driven by agriculture and tourism, with visitors flocking to experience its world-renowned safari adventures and pristine beaches. Despite facing challenges such as poverty and political instability, Tanzania remains a resilient and vibrant country with much to offer.', './pictures/Tanzania/zanzibar.jpg', 'Zanzibar', './pictures/Tanzania/stone town.jpg', 'Stone Town', './pictures/Tanzania/serengeti.jpg', 'Serengeti', './pictures/Tanzania/plage kendwa.jpg', 'Kendwa Beach', './pictures/Tanzania/parc arusha.jpg', 'Parc Arusha', './pictures/Tanzania/lac natron.jpg', 'Lac Natron', './pictures/Tanzania/pilaf.jpg', 'Pilaf', './pictures/Tanzania/pilao.jpg', 'Pilao', './pictures/Tanzania/kachumbari.jpg', 'Kachumbari', './pictures/Tanzania/samoussa.jpg', 'Samoussa', './pictures/Tanzania/ugali.jpg', 'Ugali', './video/tanzania.mp4', './pictures/Tanzania/tanzania.jpg'),
('The Great Barrier Reef', 'The Great Barrier Reef is one of the world\'s most magnificent natural wonders, located off the coast of Australia. It is the world\'s largest coral reef system, stretching over 2,300 kilometers (1,430 miles) along the east coast of Australia. The reef is home to a stunning array of marine life, including over 1,500 species of fish, 400 species of coral, and numerous species of turtles, dolphins, and sharks. Visitors to the Great Barrier Reef can snorkel or scuba dive among the vibrant coral and swim alongside colorful fish and other sea creatures. There are also glass-bottom boat tours and helicopter tours available, providing a unique perspective of the reef from above. The Great Barrier Reef is not only a natural wonder but also a UNESCO World Heritage Site, recognized for its significant ecological, scientific, and cultural value. A visit to this extraordinary reef is a must for any nature lover, and an unforgettable experience that will leave a lasting impression.', 'https://www.nomadicmatt.com/wp-content/uploads/2022/08/cairnsguide3.jpeg', 'Cairns', 'https://s1.at.atcdn.net/wp-content/uploads/2013/11/INTRO.jpg', 'Whitsunday Islands', 'https://www.green-island.com.au/gi/p1.jpg', 'Green Island', 'https://i.pinimg.com/564x/96/ec/a5/96eca57ac431afd53a89a8663ad6b612.jpg', 'Lady Elliot Island', 'https://www.lizardisland.com.au/wp-content/uploads/2022/09/lizard-island-luxury-experiences-turtle-in-waves.jpg', 'Lizard Island', 'https://i.pinimg.com/564x/8a/2b/b0/8a2bb09f97b092e21bdf3329dc7946a9.jpg', 'Ribbon Reefs', 'https://i.pinimg.com/564x/78/29/15/782915d9f33db92ed78854041f24a5e2.jpg', 'coral trout', 'https://insanelygoodrecipes.com/wp-content/uploads/2022/04/Homemade-Baked-Barramundi-Fish-Fillet-with-Lemon-Sauce-Potatoes-and-Cherry-Tomatoes.jpg', 'Barramundi', 'https://i.pinimg.com/736x/81/9d/17/819d17cf5f23f12b392a5874d1d4644d.jpg', 'Mud Crab', 'https://i.pinimg.com/564x/4a/72/ba/4a72ba1967ba8763da75c99e259d8210.jpg', 'Tropical Fruits', 'https://www.allrecipes.com/thmb/52ELIXumw_B6G216LSNLg_2Spxs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Macadamia-Nut-Pie-Timothy-f3b4c022210742f4883e9f979fdfd58e.jpg', 'Macadamia Nuts', 'https://www.youtube.com/embed/JUEEDCPa7e0', 'https://www.barrierreef.org/generated/1920w-16-9/dsc-1505-1637107131.jpg?1637107163'),
('Uluru', 'Uluru, also known as Ayers Rock, is a must-visit destination for any traveler to Australia. This iconic natural wonder is located in the heart of the country\'s outback and is sacred to the local Anangu people, who have lived in the area for tens of thousands of years. The towering sandstone monolith rises 348 meters above the surrounding desert and is an awe-inspiring sight to behold.\r\n\r\nVisitors to Uluru can take a base walk around the rock, which is approximately 10 kilometers long and provides breathtaking views of the surrounding landscape. The Uluru-Kata Tjuta Cultural Centre is a great place to learn more about the history and significance of Uluru to the Anangu people. The Field of Light art installation, created by artist Bruce Munro, is a stunning display of over 50,000 lights that illuminate the desert landscape at night. The sunset viewing area is also a popular spot for visitors, who come to see the rock change color as the sun sets.', 'https://i.pinimg.com/736x/ee/af/cd/eeafcd937c6a02e3da32da2b5e952ad7.jpg', 'the base walk around the rock', 'https://i.pinimg.com/736x/a3/db/2d/a3db2d4eb4d10b5e361c2cca8aa9b392.jpg', 'the Uluru-Kata Tjuta Cultural Centre', 'https://i.pinimg.com/564x/91/10/f8/9110f86bbb7930d9760249442b74fd2e.jpg', 'the Field of Light art installation', 'https://i.pinimg.com/736x/db/c7/b9/dbc7b9e157c82f205ead59b81a8e23ed.jpg', 'the sunset viewing area', 'https://i.pinimg.com/564x/05/c5/25/05c525729d1da8c06e76996359da2497.jpg', 'the Kata Tjuta (the Olgas) rock formations', 'https://i.pinimg.com/564x/d9/45/c5/d945c5c22ddfaa0fd95c51bb89dd1ab7.jpg', 'the Uluru Camel Tours', 'https://i.pinimg.com/564x/a7/6e/5f/a76e5f872b12c483f36a5a68640572c1.jpg', 'bush tucker', 'https://i.pinimg.com/564x/8b/12/77/8b1277445563ebfd42a637022662b9ac.jpg', ' kangaroo meat', 'https://i.pinimg.com/564x/8d/0f/50/8d0f50cded0f006d94b9be0163474b02.jpg', 'crocodile meat', 'https://i.pinimg.com/564x/87/d2/ff/87d2ff6a6a60117b9d6a636233d957fb.jpg', ' emu meat', 'https://i.pinimg.com/564x/e7/fa/6d/e7fa6d0013d66ef6df80acf395ec9f45.jpg', 'damper bread', 'https://www.youtube.com/embed/qL2aTgk266s', 'https://i.pinimg.com/564x/60/b1/6c/60b16c7680230e079970d889d3932fa8.jpg'),
('USA', 'The United States of America is a large and diverse country located in North America, bordered by Canada to the north and Mexico to the south. With a population of over 330 million, it is the third most populous country in the world. The US is known for its iconic landmarks such as the Statue of Liberty and the Golden Gate Bridge, as well as its cultural contributions to the world such as Hollywood movies and jazz music', './pictures/usa/new york.jpg', 'New York', './pictures/usa/san francisco.jpg', 'San Francisco', './pictures/usa/utah.jpg', 'Utah', './pictures/usa/louisiana.jpg', 'Louisiana', './pictures/usa/los angeles.jpg', 'Los Angeles', './pictures/usa/colorado.jpg', 'Colorado', './pictures/usa/hamburger.jpg', 'Hamburger', './pictures/usa/clam chowder.jpg', 'Clam Chowder', './pictures/usa/bagel.jpg', 'Bagel', './pictures/usa/deep dish pizza.jpg', 'Deep-dish pizza', './pictures/usa/texas barbewue.jpg', 'Texas Barbecue', './video/usa.mp4', './pictures/usa/usa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `countrytips`
--

CREATE TABLE `countrytips` (
  `name` varchar(255) NOT NULL,
  `language` text NOT NULL,
  `religion` text NOT NULL,
  `visa` text NOT NULL,
  `climate` text NOT NULL,
  `currency` text NOT NULL,
  `power_plugs` text NOT NULL,
  `capital` text NOT NULL,
  `apps` text NOT NULL,
  `flights` text NOT NULL,
  `safety` text NOT NULL,
  `budget` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `countrytips`
--

INSERT INTO `countrytips` (`name`, `language`, `religion`, `visa`, `climate`, `currency`, `power_plugs`, `capital`, `apps`, `flights`, `safety`, `budget`) VALUES
('Argentina', 'Spanish', 'predominantly Roman Catholic', 'Visa-free for Aaproximately 90 countries ', 'diverse, ranging from subtropical to subpolar', 'Argentine peso (ARS)', 'Type C and I, with a voltage of 220V.', 'Argentine peso (ARS)', ' Uber, Cabify, and BA Cómo Llego', 'Buenos Aires is the main entry point to Argentina, and there are several airlines that fly there from major cities around the world. Booking in advance can often help you get better deals. It\'s worth noting that flights within Argentina can be expensive, so consider other forms of transportation, such as buses or trains.', 'Be aware of your surroundings and avoid carrying valuables with you. Petty crime can be a problem, especially in crowded tourist areas. Be cautious when using public transportation, and avoid traveling alone at night.', ' Argentina can be relatively affordable, but prices can vary greatly depending on the region and the time of year. Be aware of the exchange rate and try to avoid tourist traps. Eating out at lunchtime is generally cheaper than dinner.'),
('Brazil', 'Mostly Portuguese,English and Spanish', 'Christianity (majority)', 'Required for most countries', 'Tropical and sub-tropical', 'Brazilian Real (BRL)', 'Type N (Brazilian standard)', 'Brasília', 'Uber, 99, iFood, Waze', ' Brazil is a large country, so if you\'re planning to visit multiple destinations, it may be more cost-effective to book domestic flights instead of relying on ground transportation. It\'s also important to check for flight deals and book in advance to save money.', ' Brazil is a large country, so if you\'re planning to visit multiple destinations, it may be more cost-effective to book domestic flights instead of relying on ground transportation. It\'s also important to check for flight deals and book in advance to save money.', 'Brazil can be an expensive destination, but there are ways to travel on a budget. Some tips include staying in hostels or budget hotels, eating at local markets and street vendors, and using public transportation instead of taxis.'),
('Canada', ' English and French ', 'Christianity ', 'visa or an Electronic Travel Authorization', 'Diverse climate', ' Canadian Dollar', 'Type A / B', 'Ottawa', 'El Tiempo', 'Canada has a well-developed aviation network with a range of domestic and international flights. Major airports such as Toronto Pearson International Airport, Vancouver International Airport, and Montréal-Pierre Elliott Trudeau International Airport serve as important hubs, connecting travelers to various destinations. Domestic flights within Canada are plentiful, offering convenient connections between cities and regions. Additionally, international flights provide access to destinations across the globe, with frequent routes to major cities in the United States, Europe, Asia, and beyond', 'Canada is generally considered a safe country for travelers. It has a low crime rate and a strong focus on public safety. The country\'s cities and towns are known for their cleanliness and efficient infrastructure, contributing to a safe and secure environment. However, it\'s always important to exercise caution and common sense, especially in urban areas, by keeping an eye on personal belongings and avoiding risky situations. Canada\'s healthcare system is also reliable, ensuring access to medical assistance if needed. Overall, visitors can feel confident in their safety while exploring the diverse landscapes and vibrant cities of Canada', 'Canada offers a range of budget options for travelers. Accommodation choices vary from budget-friendly hostels and motels to affordable guesthouses and campgrounds. Public transportation, such as buses and trains, provide cost-effective ways to get around, especially within cities. Many attractions, parks, and natural wonders offer free or low-cost entry, allowing visitors to explore without breaking the bank. Dining options also cater to various budgets, with affordable local eateries, food trucks, and grocery stores offering budget-friendly meals. While Canada can be an expensive destination in some areas, careful planning and research can help travelers find budget-friendly options and make the most of their experience without overspending.a'),
('France', 'French', 'Secular (Religious diversity)', 'Schengen Area rules apply', ' Diverse climate ', 'Euro (EUR)', 'Type C / E ', 'Paris', 'Le Monde', 'France is well-connected to international destinations, and it has several major airports that serve as gateways to the country. The primary international airports in France are Charles de Gaulle Airport (CDG) and Orly Airport (ORY) in Paris, as well as Nice Côte d Azur Airport (NCE) in Nice. These airports are major hubs for both domestic and international flights.', 'France is generally a safe country for travelers, but like any popular tourist destination, it\'s important to take certain precautions. In major cities and tourist areas, pickpocketing and petty theft can occur, so it\'s advisable to remain vigilant and keep an eye on your belongings. Avoid displaying valuable items openly and be cautious in crowded places, such as public transportation or popular attractions. It\'s also recommended to be aware of your surroundings, especially during evening hours, and to stay in well-lit and populated areas. In case of an emergency, familiarize yourself with the local emergency numbers. While the majority of visitors to France have a safe and enjoyable experience, it\'s always prudent to exercise common sense and take appropriate measures to ensure your personal safety and security.', 'Traveling to France can be done on a budget, but costs can vary depending on your choices and preferences. Accommodations, especially in major cities like Paris, can be expensive, but there are budget-friendly options such as hostels, budget hotels, or vacation rentals. Public transportation, like buses and trains, is generally affordable and convenient for getting around within and between cities. Dining in local cafes and brasseries can provide a more cost-effective option compared to high-end restaurants. Additionally, taking advantage of free or discounted attractions, like museums on certain days or city walking tours, can help keep costs down. With careful planning and budgeting, it is possible to explore the beauty of France without breaking the bank.'),
('INDIA', 'Hindi & English, with many other local\r\n                                languages', 'Hinduism', 'eVisa available for 160+ countries', 'Varies by altitude & geography', 'Indian Rupee (INR)', 'Type C / D / M', 'New Delhi', 'Uber', 'As a tourist, your main airports in India will be New Delhi (code: DEL) and Jaipur\r\n            (code: JAI). These have lots of direct flights from other countries around the\r\n            world.', 'India is a relatively safe travel destination, with a low homicide rate of 3.2 per 100k inhabitants\r\n            (48% lower than the global average). Still, sexual assaults are common in India, so women traveling\r\n            alone may want to join a shared tour or other group if possible. Road safety can be an issue too,\r\n            because the driving and traffic in India can be chaotic and dangerous; taking the train is a safer bet\r\n            whenever it\'s an option.', 'India is a very budget friendly place to travel, with hostels available from $3 and private rooms\r\n            starting from $6, but this is one place in Asia where you get what you pay for. Meals are also cheap,\r\n            costing about $1 to $5 depending on location. Transportation in India is generally by tuk-tuk or car, but\r\n            the train is better for long distance trips. Short distance trips can be done with the Uber transportation\r\n            app.'),
('Indonesia', 'Indonesian languages', 'Islam', 'Visa free access or VOA for 160+ countries', 'Tropical; hot & humid year round', 'Indonesian Rupiah (IDR)', 'Type C / F', 'Jakarta', 'Grab, Go-Jek', 'As a tourist, your main airports in Indonesia will be Bali (code: DPS) and Jakarta (code: CGK). These\r\n            have lots of direct flights from other countries around the world. Other major airports include Surabaya\r\n            (SUB) in East Java, Medan (KNO) in Sumatra, Makassar (UPG) in south Sulawesi, and Manado (MDC) in north\r\n            Sulawesi. ', 'Indonesia is one of the safest countries in the world, with a very low murder rate of 0.5 per 100k\r\n            inhabitants (92% lower than the global average), according to the United Nations yearly study.\r\n\r\n            I’ve traveled in many parts of Indonesia and haven\'t really witnessed any crime. Just take normal\r\n            precautions. Indonesia is a Muslim country, and outside of Bali the culture is very conservative, so it’s\r\n            important to dress modestly. Terrorism is not a significant issue here and attitudes toward foreigners are\r\n            generally welcoming.\r\n\r\n            The biggest safety risks are transportation and natural threats, like animals, mosquitoes, volcanoes, and\r\n            earthquakes. I’d also stay away from motorbikes here unless you’re an experienced driver in Southeast Asia.\r\n            However, one of my closest brushes with death in Indonesia was probably a boat trip in Sumatra where we ran\r\n            into a bad storm.', 'Indonesia is a tropical country, so the weather is hot and humid year round.\r\n\r\n            The climate can vary a bit between islands, but generally Indonesia has a rainy season that runs from\r\n            November to April, and a dry season that runs from April to November. It’s still very possible to visit\r\n            Indonesia in the rainy season, but give yourself some buffer days in case of bad weather.\r\n\r\n            The best time to visit Indonesia depends on what you’re looking for. The nicest weather is during the dry\r\n            season, when it\'s generally sunny and windy. This is a great time to hike a mountain (or volcano) and go see\r\n            wildlife in the jungle.\r\n\r\n            However, the wet season can be a great time to see waterfalls and bright green crop terraces, and the rain\r\n            is mostly in the evenings or at night anyway, so it\'s usually not too disruptive.'),
('Italy', 'italian', 'Christianity ', 'diverse', 'Mediterranean climate', 'Euro (EUR)', 'Type C/F', 'rome', 'Rome2rio', 'Italy is well-connected to international destinations, and there are several major airports throughout the country. The primary international airports in Italy are Leonardo da Vinci-Fiumicino Airport (FCO) in Rome, Milan Malpensa Airport (MXP) in Milan, and Marco Polo Airport (VCE) in Venice. These airports serve as major hubs for both domestic and international flights.', 'Italy is generally a safe country to visit, with a low crime rate. However, as with any destination, travelers should exercise caution and take basic safety precautions, especially in tourist areas where pickpocketing and petty theft can occur. Its advisable to keep an eye on your belongings and avoid carrying large amounts of cash or valuables with you. In some areas, there may also be a risk of petty crime, such as bag-snatching or theft from cars, so it s best to stay aware of your surroundings and take precautions to keep yourself and your belongings safe.', 'Traveling to Italy can be done on a budget, but costs can vary depending on your travel style and preferences. Accommodations and transportation can be expensive in major cities like Rome and Venice, but there are budget-friendly options available such as hostels, Airbnb rentals, and public transportation. Food can be affordable in Italy if you opt for local street food and trattorias rather than high-end restaurants. Admission to museums and historical sites can add up, but many offer discounted or free admission on certain days of the week. Overall, traveling to Italy on a budget requires some research and planning, but it is definitely possible to enjoy the countrys beauty and culture without breaking the bank.'),
('Japan', 'Japanese\r\n                                languages', 'Buddhism & Shinto', '90 day visa free access for many countries', 'Varies, but generally mild', 'Japanese Yen (JPY)', 'Type A / B', 'Tokyo', 'Hyperdia', 'As a tourist, your main airports in Japan will be in Tokyo (code: NRT or HND) and Osaka (code: KIX). These have lots of direct flights from other countries around the world. The city of Kyoto doesn\'t have an airport, but it\'s easy to get there from Osaka', 'Japan is one of the safest countries in the world, with an extremely low violent crime rate of 0.28 per 100k inhabitants (96% lower than the global average). Japanese people are polite and friendly to outsiders, but the language barrier can be difficult at times because English isn\'t as widespread as you might think. It\'s a good idea to know at least a few important Japanese words.', 'Japan may not be the cheapest place to travel, but it\'s still less pricey than you might expect. Hostels are available from $13 and private hotels from $30, although a private room in Japan will be pretty small and the bathroom will be shared. Meals are about $5 to $10 depending on location.'),
('Mexico', ' Spanish.', ' Roman Catholic.', 'No visa needed.', ' diverse climate with ', ' peso', '120V  Type A and Type B plugs.', 'Mexico City.', 'Google Maps, Uber, and the Mexico Travel Guide by Triposo.', ' Mexico is well-connected to major cities in North and South America, with many direct flights available from the US and Canada. There are also some direct flights from Europe and Asia, but these may be less frequent.', 'Mexico is generally a safe country for tourists, but it\'s important to exercise caution in certain areas and be aware of your surroundings.', 'Mexico can be a very affordable destination for travelers, with a wide range of accommodation options and low-cost food and transportation. However, luxury resorts and tourist areas can be more expensive.'),
('Morocco', 'Arabic', 'Islam', 'no visa needed', 'mediterranean climate', 'Morrocan Dirham', 'Type C and E', 'Rabat', 'Uber, Yassir, Careem', 'Morocco has airports everywhere: Marrakech, Fes, Agadir, Rabat, ... Transport is easy', 'Crime in Morocco is mostly petty crime such as scams and pickpockets. It\'s very unlikely that you\'ll be assaulted or hurt as a tourist. That being said, there are still a few things I wouldn\'t recommend doing and some areas of Morocco that should be avoided like going out alone or at night ', 'Morocco can be super cheap but if luxury travel is more your thing, the country also offers the most luxurious and lavish lifestyle money can afford'),
('Peru', 'Spanish', 'Roman Catholicism', 'Visa-free or visa-on-arrival .', 'Varied with tropical, desert, and mountainous regions.', 'Sol', ' Type A, B, C', 'Spanish', 'Uber, Google Maps', ' Book in advance for the best deals and consider domestic flights within Peru for convenient travel between destinations. Pack comfortable clothing and layers for varying temperatures.', 'While Peru is generally safe, travelers should remain vigilant and take necessary precautions, especially in larger cities. Avoid walking alone at night, keep your valuables secure, and stay aware of your surroundings. If traveling to higher elevations, take the necessary time to acclimate and seek medical attention if needed.', 'Peru is an ideal destination for budget-conscious travelers with a wide range of affordable accommodations and dining options. Traveling during the shoulder season and exploring smaller towns can further stretch your budget.'),
('South Africa', 'Ndebele, Pedi, Sotho, Swati, Tsonga, Tswana.', 'Christianity', 'visa required', ' both sub-tropical and temperate climate conditions', 'South African Rand', 'types C, D, M and N', 'Cape Town', 'Uber, inDriver, Waze', 'there are airports in Cape Town and OR Tambo that have international lines', 'Be particularly alert in major city centres and township areas, and when travelling after dark. Crimes in South Africa often involve the use of weapons', 'Once you arrive, it tends to be very affordable, due to the weakness of the South African Rand'),
('Spain', 'Spanish', 'Christianity ', 'Shengen Area rules apply', 'Mediterranean; hot, dry summers & mild winters', 'Euro (EUR)', 'Type C / F', 'Madrid', 'El Tiempo', ' The three main airports in Spain are Madrid (MAD), Barcelona (BCN) and Palma de Mallorca (PMI), which have direct international flights from many countries in Europe and beyond.', 'Spain is generally a safe place to travel, with a very low violent crime rate of 0.6 per 100k inhabitants (90% lower than the global average). It\'s one of the safest countries in the world. With that said, pickpocketing and theft are notoriously common in Barcelona. Practice situational awareness and keep your hands in your pockets if you\'re sitting on a train or in any other place with lots of people.', 'Spain may not be the most budget friendly travel destination, but it\'s still not too bad. You can find hostels starting from $10 and private hotels starting from $40. Meals are about $5 to $10 depending on location. Transportation is generally by bus or train, and these are efficient and great for longer distance trips. The train system may seem a bit complex at first, but it gets easier as you go.'),
('Sydney', 'English', 'Christianity, Buddhism, Islam, and Hinduism.', 'Required for most Countries', 'temperate climate with mild winters and warm summers.', 'the Australian Dollar (AUD)', 'Type I.', 'The capital of Australia is Canberra.', 'Google Maps, Citymapper, TripView, and Airbnb.', 'Sydney has one major airport, Sydney Kingsford Smith International Airport (SYD), which is located about 8 kilometers south of the city center.', 'Sydney is generally a safe city to visit, but like any other city, it is recommended to be cautious and aware of your surroundings, especially at night.', 'Sydney can be an expensive city to visit, with prices for accommodation, food, and activities higher than other parts of Australia'),
('Tanzania', 'Swahili/ english', 'christianity', 'e-visa', 'higher in summer, and coolest in winter.', 'Tanzanian Shilling', 'types D and G', 'Dodoma', 'Paisha, Bolt, Uber', 'airports in Arusha, Kigoma, Musoma', 'Violent armed robbery, petty theft and threats of violence are common in Tanzania, especially in Dar es Salaam. Sexual assaults of travellers happen. HIV/AIDS is widespread in Tanzania. If you\'re a victim of rape or violent crime, seek immediate medical attention', 'Tanzania is considered to be a fairly cheap country for tourists'),
('The Great Barrier Reef', 'English', 'Secular country.', 'Require a valid visa. ', 'Tropical climate. ', 'The Australian dollar . ', 'Type I power plugs,  230V and 50Hz.', 'Canberra.', 'reef guides, snorkeling and diving guides, and weather apps.', ' The main airports for accessing the Great Barrier Reef are located in Cairns and Townsville. ', 'The Great Barrier Reef is generally a safe destination for visitors', 'The cost of visiting the Great Barrier Reef can vary depending on the type of accommodation and length of stay. '),
('uluru', 'English', 'Australia is a secular country.', 'Require a valid visa.', 'Desert climate, with hot temperatures .', 'The Australian dollar.', 'Type I power plugs, with 230V and 50Hz. ', ' Canberra.', 'park guides, hiking guides, and weather apps.', 'The closest airport to Uluru is Ayers Rock Airport, which is served by domestic airlines from major Australian cities such as Sydney, Melbourne, and Cairns.', 'Visitors to Uluru should be aware of the extreme weather conditions and come prepared with appropriate clothing and supplies.', 'The cost of visiting Uluru can vary depending on the type of accommodation, activities, and length of stay.'),
('USA', 'English', 'Christianity', 'visa required', 'Its south is hot and its north is cold in winter', 'US Dollar', 'Type A and Type B', 'Washington', 'Uber, Bolt, Lyft', 'All states of the USA have airports that include international lines', 'Safety in the USA can vary from a state to another so be careful and get info before visiting each state', 'the USA is considered to be expensive for tourists');

-- --------------------------------------------------------

--
-- Structure de la table `demandedetails`
--

CREATE TABLE `demandedetails` (
  `name` varchar(255) NOT NULL,
  `paragraph` text DEFAULT NULL,
  `place1` varchar(255) DEFAULT NULL,
  `titlePlace1` varchar(255) DEFAULT NULL,
  `place2` varchar(255) DEFAULT NULL,
  `titlePlace2` varchar(255) DEFAULT NULL,
  `place3` varchar(255) DEFAULT NULL,
  `titlePlace3` varchar(255) DEFAULT NULL,
  `place4` varchar(255) DEFAULT NULL,
  `titlePlace4` varchar(255) DEFAULT NULL,
  `place5` varchar(255) DEFAULT NULL,
  `titlePlace5` varchar(255) DEFAULT NULL,
  `place6` varchar(255) DEFAULT NULL,
  `titlePlace6` varchar(255) DEFAULT NULL,
  `food1` varchar(255) DEFAULT NULL,
  `titleFood1` varchar(255) DEFAULT NULL,
  `food2` varchar(255) DEFAULT NULL,
  `titleFood2` varchar(255) DEFAULT NULL,
  `food3` varchar(255) DEFAULT NULL,
  `titleFood3` varchar(255) DEFAULT NULL,
  `food4` varchar(255) DEFAULT NULL,
  `titleFood4` varchar(255) DEFAULT NULL,
  `food5` varchar(255) DEFAULT NULL,
  `titleFood5` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `continent` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandetips`
--

CREATE TABLE `demandetips` (
  `name` varchar(255) NOT NULL,
  `language` text NOT NULL,
  `religion` text NOT NULL,
  `visa` text NOT NULL,
  `climate` text NOT NULL,
  `currency` text NOT NULL,
  `power_plugs` text NOT NULL,
  `capital` text NOT NULL,
  `apps` text NOT NULL,
  `flights` text NOT NULL,
  `safety` text NOT NULL,
  `budget` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demandetips`
--

INSERT INTO `demandetips` (`name`, `language`, `religion`, `visa`, `climate`, `currency`, `power_plugs`, `capital`, `apps`, `flights`, `safety`, `budget`) VALUES
('sa', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `comment` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(20) DEFAULT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `role`, `password`) VALUES
(1, 'sabaa', 'sabaa@gmail.com', 'Admin', '0000'),
(5, 'arij', 'arij@gmail.com', 'Admin', '0000'),
(6, 'taher', 'taher@gmail.com', 'Admin', '0000'),
(7, 'ala', 'ala@gmail.com', 'Admin', '0000'),
(8, 'jihen', 'jihen@gmail.com', 'Admin', '0000'),
(10, 'user', 'user@gmail.com', 'User', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `countrydetails`
--
ALTER TABLE `countrydetails`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `countrytips`
--
ALTER TABLE `countrytips`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `demandedetails`
--
ALTER TABLE `demandedetails`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `demandetips`
--
ALTER TABLE `demandetips`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
