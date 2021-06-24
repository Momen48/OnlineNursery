-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 11:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'admin', 'last', 'admin@gmail.com', 'admin'),
(2, 'test', 'com', 'test@test.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`) VALUES
(1, 'Plants'),
(2, 'Seeds'),
(3, 'Home Décors'),
(4, 'Fertilizers & Soils'),
(5, 'Planter Pot'),
(6, 'Fresh Fruits'),
(7, 'Flowers'),
(18, 'Insecticide & Hormones');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Merritt Berry', 'lixazagi@mailinator.com', 'Et sunt pariatur El'),
(4, 'Edan Hopper', 'cabowozyf@mailinator.com', 'Rerum vitae perspici');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES
(1, 2, '3', 1, '20000'),
(2, 6, '4', 5, '800'),
(3, 5, '1', 5, '3000'),
(4, 5, '1', 6, '3000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(1, 1, '20000', '', 'code', '2021-02-01 01:20:38'),
(2, 0, '0', 'Order Placed', 'cod', '0000-00-00 00:00:00'),
(3, 0, '0', 'Delivered', 'cheque', '0000-00-00 00:00:00'),
(4, 4, '0', 'Dispatched', 'on', '0000-00-00 00:00:00'),
(5, 4, '6200', 'In Progress', 'cod', '0000-00-00 00:00:00'),
(6, 4, '3000', 'Order Placed', 'cod', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `message`, `timestamp`) VALUES
(1, 1, 'In Progress', 'Order is in Progress', '2021-02-01 01:20:38'),
(2, 1, 'Dispatched', ' lets go', '0000-00-00 00:00:00'),
(3, 1, '', ' ', '0000-00-00 00:00:00'),
(4, 3, 'Delivered', ' delivery man will provide your product soon', '0000-00-00 00:00:00'),
(5, 3, 'Delivered', ' ', '0000-00-00 00:00:00'),
(6, 3, 'Delivered', ' ', '0000-00-00 00:00:00'),
(7, 4, 'Dispatched', 'Dispatched', '0000-00-00 00:00:00'),
(8, 5, 'In Progress', ' ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `shopid` int(11) NOT NULL,
  `price` float NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `catid`, `shopid`, `price`, `product_qty`, `product_desc`, `image`) VALUES
(3, 'Red Spinach', 2, 2, 50, 5, 'Amaranthus dubius, the red spinach, Chinese spinach, (simplified Chinese: 苋菜; traditional Chinese: 莧菜; pinyin: xiàncài), spleen amaranth, hon-toi-moi, yin choy, hsien tsai, or Arai keerai (அரை கீரை) is a plant species. It belongs to the economically important family Amaranthaceae. This plant is native to South America, Mexico, and the West Indies, however; it is widely introduced throughout the world. The species occurs locally in France and Germany and is naturalized or invasive in tropical and subtropical regions of the United States (Florida and Hawaii), Africa, Asia, Australia and the Pacific.', 'uploads/red-spinach-seeds-500x500.jpg'),
(5, 'Bonsai', 3, 3, 3000, 21, 'Bonsai is a Japanese art form which utilizes cultivation techniques to produce, in containers, small trees that mimic the shape and scale of full size trees. Similar practices exist in other cultures, including the Chinese tradition of penzai or penjing from which the art originated, and the miniature living landscapes of Vietnamese Hòn non bộ. The Japanese tradition dates back over a thousand years.', 'uploads/p6.jpg'),
(6, 'Dendrobium orchid', 1, 1, 800, 24, 'Dendrobium can grow at home; Dendrobium Winter Wine Orchid flowers are the real beauty to add your flower garden.\r\n\r\nDendrobium Orchids have their profuse, delicate blooms, are hugely popular with many a green-fingered connoisseur. Their life cycle consists of three stages, which include the flowering stage (winter to spring), the growing phase (summer to autumn) and dormancy (late autumn to winter).', 'uploads/orchi.jpg'),
(7, 'Urea', 4, 2, 80, 50, 'Expanded Perlite is a unique inorganic addition to amend the heavy soils to make them light weight while still retaining moisture and nutrients.\r\nThis high quality product is widely loved by gardeners for its benefits.\r\nExpanded perlite is wonderful inorganic product made up of volcanic soil. Perlite improves soils draining capacity while still retaining moisture.This is suitable for plants in pots and ground and can be used indoors, in terrace gardening, kitchen gardens etc.', 'uploads/1386936370_urea-400x400.jpg'),
(8, 'potasium', 4, 1, 2300, 40, 'Expanded Perlite is a unique inorganic addition to amend the heavy soils to make them light weight while still retaining moisture and nutrients.\r\nThis high quality product is widely loved by gardeners for its benefits.\r\nExpanded perlite is wonderful inorganic product made up of volcanic soil. Perlite improves soils draining capacity while still retaining moisture.This is suitable for plants in pots and ground and can be used indoors, in terrace gardening, kitchen gardens etc.', 'uploads/d7c198428425d5213c831cb02504bc8f.jpg'),
(9, 'Spider Orchid', 3, 1, 2000, 0, 'Spider orchid, any of the orchids in the genera Brassia and Caladenia (family Orchidaceae). While Brassia species and hybrids are commonly cultivated for their unusual and attractive flowers, Caladenia species are difficult to grow and require symbiotic fungi to flourish. The flowers of both genera often feature long thin sepals and petals that give them a spidery appearance.', 'uploads/spider orchid.jpg'),
(10, 'Cowslip Orchid', 3, 1, 1800, 0, '\r\nCaladeniastrum flavum ( R.Br.) Szlach. Caladenia flava, commonly known as cowslip orchid, is a species of orchid endemic to the south-west of Western Australia. It is a relatively common orchid with a single, hairy leaf and up to three yellow flowers which often have red markings.', 'uploads/orchid-500x500-1.jpg'),
(11, 'Dendrobium', 3, 1, 1200, 0, 'The genus Brassia consists of 35 species of epiphytic orchids native to southeastern North America, the West Indies, and parts of Central and South America. Each stem of a spider orchid has one to three leaves. The flower spike extends laterally from the plant in most species. The flowers are yellow, greenish yellow, or orange-yellow, often with spots or markings.\r\n\r\nThe genus Caladenia, largely native to Australia, consists of about 350 species of terrestrial orchids. They typically feature a single hairy leaf and are deciduous. The flowers come in a variety of colours and are borne singly or in racemes of up to eight blooms. The central labellum (modified petal) is often delicately fringed.', 'uploads/nurserylive-plants-orchid-plant-dendrobium-orchid-visa-peach-plant-16969149546636_517x517.jpg'),
(12, 'mango', 6, 2, 150, 0, 'Mango Himsagar has a sweet aroma and is musky sweet in taste.\r\n\r\nIt has the considerable shelf life of a week after it is ripe making it exportable. It is also one of the most expensive kinds of mango and is grown mainly in western India.Mango is the leading fruit crop of India and considered to be the king of fruits.\r\n\r\nThe tropical fruit is called the \"King of Fruits\" in India. The tree has been around for more than 4000 years in India and was taken to South America by the Portuguese, other parts of South Asia by Indians and to other tropical regions by others. A mango tree needs an ideal climate to grow. It is a tropical fruit and needs a lot of suns to grow and bear fruit.', 'uploads/Alfoos-Mango-400x400.jpg'),
(13, 'Diammonium Phosphate', 4, 1, 1500, 0, 'Diammonium Phosphate Diammonium phosphate (DAP) is the world’s most widely used phosphorus fertilizer. It’s made from two common constituents in the fertilizer industry, and its relatively high nutrient content and excellent physical properties make it a popular choice in farming and other industries.', 'uploads/DiAmmonium-Phosphate.jpeg'),
(14, 'TSP', 4, 1, 2000, 0, 'Trisodium phosphate (TSP) is the inorganic compound with the chemical formula Na 3PO 4. It is a white, granular or crystalline solid, highly soluble in water, producing an alkaline solution.\r\n\r\nSuperphosphate is a group of fertilizers which provides crops with the phosphate mineral element. Single superphosphate, double superphosphate and triple superphosphate are the three major types of superphosphate.', 'uploads/index.jpg'),
(15, 'Rose', 7, 3, 25, 0, 'A rose is a woody perennial flowering plant of the genus Rosa, in the family Rosaceae, or the flower it bears. There are over three hundred species and tens of thousands of cultivars. They form a group of plants that can be erect shrubs, climbing, or trailing, with stems that are often armed with sharp prickles. Flowers vary in size and shape and are usually large and showy, in colours ranging from white through yellows and reds. Most species are native to Asia, with smaller numbers native to Europe, North America, and northwestern Africa. Species, cultivars and hybrids are all widely grown for their beauty and often are fragrant. Roses have acquired cultural significance in many societies. Rose plants range in size from compact, miniature roses, to climbers that can reach seven meters in height. Different species hybridize easily, and this has been used in the development of the wide range of garden roses.', 'uploads/dffaf68e81d5f97c6b1eaef9917cfd70.jpg'),
(16, 'Tube Rose', 7, 3, 200, 0, 'Agave amica, formerly Polianthes tuberosa, the tuberose, is a perennial plant in the family Asparagaceae, subfamily Agavoideae, extracts of which are used as a note in perfumery. Now widely grown as an ornamental plant, the species was originally native to Mexico.', 'uploads/nurserylive-plants-rajnigandha-tuberose-plant-16969240019084_520x520.jpg'),
(17, 'Joba', 7, 3, 15, 0, 'Hibiscus is a genus of flowering plants in the mallow family, Malvaceae. The genus is quite large, comprising several hundred species that are native to warm temperate, subtropical and tropical regions throughout the world. Member species are renowned for their large, showy flowers and those species are commonly known simply as \"hibiscus\", or less widely known as rose mallow. Other names include hardy hibiscus, rose of sharon, and tropical hibiscus.\r\n\r\n# Available colors-  Yellow, Red, Pink Orange. White', 'uploads/e0c8b946f49ec571aba549bdc162ae3f.jpg'),
(18, 'Camellia sinensis', 1, 3, 400, 0, 'Tea is a shrub grown to produce a beverage made from its leaves. It is appreciated for its stimulant properties and health benefits.\r\n\r\nCamellia sinensis is a species of evergreen shrub or small tree whose leaves and leaf buds are used to produce tea. It is of the genus Camellia of flowering plants in the family Theaceae.', 'uploads/nurserylive-plants-camellia-sinensis-plant-16968681685132_520x520.jpg'),
(19, 'Banana', 1, 1, 500, 0, 'Velvet Pink Banana is an interesting dwarf species of banana.\r\n\r\nVelvet Pink Banana is an interesting dwarf species of banana, growing only 4-6 ft tall. It bears somewhat waxy leaves which are quite large and can grow to 1-2 ft long. The flowers are pink to orange.\r\n\r\nThe most ornamental part of the plant is its fruits, dwarf bananas, which are a bright, velvety pink and last for months at a time. Fruits are covered with thin hairs. They are edible and quite sweet, but also full of seeds. This is one of the few bananas that will actually flower and fruit in the house.', 'uploads/67173.jpg'),
(20, 'Jackfruit', 6, 1, 350, 0, 'Enjoy the most delicious and nutritious tropical fruit at your home easily by growing Jackfruit plant.\r\n\r\nJackfruit erect evergreen perennial tree in Moraceae family. Leaves are dark green, alternate, glossy and somewhatleathery, fairly large and oval in shape. Flowers are short, stout and emerges from the trunk and large branches. The Jackfruit is a multiple fruit that is composed ofthe coherence of multiple flowers', 'uploads/5-14.jpg'),
(21, 'Guava', 6, 1, 100, 0, 'Guavas are common tropical fruits cultivated and enjoyed in many tropical and subtropical regions.\r\n\r\nThe guava tree is an interesting plant with mottled greenish bark and long 3 to 7 inch serrated leaves. Guava trees produce white, 1-inch flowers that yield to small round, oval or pear-shaped fruits.', 'uploads/nurserylive-plants-red-guava-amrud-psidium-guajava-plant-16969248571532_600x600.jpg'),
(22, 'Areca Plum', 6, 2, 500, 0, 'A plum is a fruit of some species in Prunus subg. Prunus. Mature plum fruit may have a dusty-white waxy coating that gives them a glaucous appearance. This is an epicuticular wax coating and is known as \"wax bloom\". Dried plum fruits are called \"dried plums\" or prunes, having a wrinkled appearance.', 'uploads/download.jpg'),
(23, 'Cactus', 3, 2, 1000, 0, ' cactus is a member of the plant family Cactaceae, a family comprising about 127 genera with some 1750 known species of the order Caryophyllales. The word \"cactus\" derives, through Latin, from the Ancient Greek κάκτος, kaktos, a name originally used by Theophrastus for a spiny plant whose identity is now not certain.\r\nDensely spined, and in many types the spines are so elongated and soft that the plant appears hairy.\r\n\r\nStems 1 to several, more or less spherical, dark green, to 2 inches in diameter, covered with spirally arranged projections called tubercles; areoles at tubercle tips, white-woolly when young; perianth parts numerous, petal-like, in several rows; outer parts greenish or brownish; inner parts pink to reddish purple; tips sharply pointed; stamens numerous, anthers bright orange. Fruits are berries, fleshy, oblong to club-shaped, green when mature; seeds tiny, pitted, yellowish brown.', 'uploads/nurserylive-phalaenopsis-yellow-plant_92edb738-95b1-4386-94ec-60980a6ed195_520x520.jpg'),
(24, 'Cherry', 6, 2, 1500, 0, 'A cherry is the fruit of many plants of the genus Prunus, and is a fleshy drupe. Commercial cherries are obtained from cultivars of several species, such as the sweet Prunus avium and the sour Prunus cerasus. The name \'cherry\' also refers to the cherry tree and its wood, and is sometimes applied to almonds and visually similar flowering trees in the genus Prunus, as in \"ornamental cherry\" or \"cherry blossom\". Wild cherry may refer to any of the cherry species growing outside cultivation, although Prunus avium is often referred to specifically by the name \"wild cherry\" in the British Isles.', 'uploads/cherry-punnet1-400x400.jpg'),
(25, 'Eucalyptus ', 1, 1, 250, 0, '\r\nEucalyptus is a genus of over seven hundred species of flowering trees, shrubs or mallees in the myrtle family, Myrtaceae. Along with several other genera in the tribe Eucalypteae, including Corymbia, they are commonly known as eucalypts. Plants in the genus Eucalyptus have bark that is either smooth, fibrous, hard or stringy, leaves with oil glands, and sepals and petals that are fused to form a \"cap\" or operculum over the stamens. The fruit is a woody capsule commonly referred to as a \"gumnut\".', 'uploads/DF199232-400x400.jpg'),
(26, 'Jasmine Plant', 1, 1, 120, 0, 'The jai plant has leaves that are dark green in colour and have kept it in a place that receives indirect sunlight. The jai plant looks like a plant decked with white ornaments. and the fragrance is heavenly.\r\n\r\nFragrant flowers, white blooms,heavenly fragrance, the jai plant is one wonder of God. the flowers are so beautiful and pure white in colour.\r\n\r\nPlant Specifications\r\nPlant Height	19 inch (48 cm)\r\nPlant Spread	5 inch (13 cm)\r\n*above specification are indicative only. actual dimensions may vary by +-10%\r\nCommon Name	Jai\r\nMaximum Reachable Height	4 to 5 feet\r\nFlower Colour	White color\r\nBloom Time	June to August\r\nDifficulty Level	Easy to grow\r\nPlanting And Care\r\nJasmine plants can be affected by pests like aphids, caterpillar, spider mites, etc. and fungus disease.\r\nTo avoid these problems,always water your Spanish jasmine properly without wetting the leaves.& Ensure that the vine receives sunlight for 4-5 hours daily.', 'uploads/21216.jpg'),
(27, 'Bean Seed', 2, 3, 2000, 0, 'A bean is the seed of one of several genera of the flowering plant family Fabaceae, which are used as vegetables for human or animal food. They can be cooked in many different ways, including boiling, frying, and baking, and are used in many traditional dishes throughout the world', 'uploads/7f61a108a67ecbbf4cc6b61e4ec8d9f4.jpg'),
(28, 'Pumpkin Seed', 2, 3, 125, 0, 'A pumpkin is a cultivar of winter squash that is round with smooth, slightly ribbed skin, and is most often deep yellow to orange in coloration. The thick shell contains the seeds and pulp. The name is most commonly used for cultivars of Cucurbita pepo, but some cultivars of Cucurbita maxima, C. argyrosperma, and C. moschata with similar appearance are also sometimes called \"pumpkin\".', 'uploads/pumkin.jpg'),
(29, 'Watermelon Seed', 2, 1, 545, 0, 'Watermelon (Citrullus lanatus) is a flowering plant species of the Cucurbitaceae family . A scrambling and trailing vine-like plant, it was originally domesticated in Africa. It is a highly cultivated fruit worldwide, with more than 1,000 varieties.\r\nWild watermelon seeds have been found in the prehistoric Libyan site of Uan Muhuggiag. There is also evidence from seeds in Pharaoh tombs of watermelon cultivation in Ancient Egypt.', 'uploads/watermelon.jpg'),
(30, 'Mango Seed', 2, 3, 300, 0, '2 Mango Seeds (Southeast Asian fruit) - Sweet fruit \"2 Seed/ Pack\"\r\nFresh and Viable direct from farm!! High quality!!\r\nIt’s fun and very interesting to grow Lotus from seeds.\r\nIt’s fast growing and will take only 2-3 months only.', 'uploads/indianjadibooti-mango-seeds-5-100gm__512-512-400x400.jpg'),
(32, 'Pesticide', 18, 2, 700, 0, 'INSECT KILLER - This pest control is designed for use on caterpillars and worm type insects, such as cabbage looper, bagworm, gypsy moth, fall cankerworm, elm spanworm and many more.\r\nFOLIAGE PROTECTOR - This insecticide is designed for use on a variety of plants including broccoli, celery, cabbage, turnip greens, mustard greens, cauliflower, melons, lettuce, tomatoes, shade trees, ornamentals and many more.\r\nSAFE FOR EARTHWORMS & BEES - When used as directed, Monterey B.t. has no effect on birds, earthworms, or beneficial insects such as honeybees or ladybugs.\r\nORGANIC GARDENING - Our insecticide is OMRI listed and approved for organic gardening. OMRI, The Organic Materials Review Institute, determines whether or not a product qualifies as organic under the USDA\'s National Organic Program.\r\nREADY TO USE - Monterey B.t. is conveniently ready to use when it arrives. Apply directly from the container which is fitted with a trigger sprayer. Product can be used on edible plants up to the day of harvest.', 'uploads/polestar-pesticide-1526031616-3853514.jpeg'),
(33, 'Chemosterilant', 18, 1, 1000, 0, 'chemosterilant is a chemical compound that causes reproductive sterility in an organism. They may be used to control pest populations by sterilizing males. More technically, a chemosterilant is any chemical compound used to control economically destructive or disease-causing pests by causing temporary or permanent sterility of one or both of the sexes or preventing maturation of the young to a sexually functional adult stage.', 'uploads/amc4440awca_01.jpg'),
(34, 'Malathion', 18, 1, 1200, 0, 'Malathion is an organophosphate insecticide which acts as an acetylcholinesterase inhibitor. In the USSR, it was known as carbophos, in New Zealand and Australia as maldison and in South Africa as mercaptothion,', 'uploads/120041D.jpg'),
(35, 'Garden gibberellic acid', 18, 2, 150, 0, 'Liquid\r\nMade in USA or Imported\r\nClonex is a high performance, water-based, rooting gel\r\nIt is a tenacious gel which will remain in contact around the stem, sealing the cut tissue and supplying the hormones needed to promote root cell development and vitamins to protect the delicate new root tissue\r\nClonex has a full spectrum of mineral nutrients and trace elements to nourish the young roots during their important formative stages', 'uploads/gibberellic-acid-90.jpg'),
(36, 'Aloe vera', 1, 3, 250, 0, 'Aloe vera, Ghrita-kumari is the famous medicinal plant with ornamental and cultural beliefs.\r\n\r\n\r\nWhat makes it special:\r\nLow maintenance plant.\r\nBest for sunny windows.\r\nHardy nature with an attractive look.\r\nPopular house plant with medicinal values.\r\nSr	Item name\r\n1	Aloe vera - Succulent Plant\r\n2	4 inch (10 cm) Nursery Pot as Inner\r\n3	4.5 inch (11 cm) Ronda No. 1110 Round Plastic Planter (Black)\r\nAloe vera belongs to the Asphodelaceae family. Aloe vera cultivated for agricultural and medicinal uses. Aloe vera also used for decorative purposes and grows successfully indoors and outdoor. The leaves are thick and fleshy, green to grey-green.\r\n\r\nIt is found in many consumer products including beverages, skin lotion, cosmetics, or ointments for minor burns and sunburns.Note: Any variety of these plants will be delivered, a few shown in the photos.', 'uploads/nurserylive-plants-aloe-vera-succulent-plant-16968585871500_520x520.jpg'),
(37, 'Coco peat block', 4, 1, 140, 0, 'Coco peat is a soil substitute or addition to it. Known for its good water holding capacity. Expands to 10-15 liters.\r\n\r\nCoco peat is the soilless potting mix. Easy to carry block form.It is lightweight, best for balconies & terrace gardening, easy to carry, saves Water, eco-friendly Organic. Best potting media for seeds germination.\r\n\r\n## Care Instructions--\r\nStorage in the dry area,\r\nKeep out of reach of children\r\n##Benefits -- \r\nOrganic Soilless mediaExpands to 10-15 litersEnhance water drainage in soil mix while still retaining the moisture in soil', 'uploads/nurserylive-cocopeat-block-900-g_520x520.jpg'),
(38, 'Cabbage Special Pride Seeds', 2, 1, 55, 0, 'This Cabbage, leafy vegetable contains a good amount of nutrition. This pack contains approximately 35 seeds.\r\n\r\nCabbage (Brassica oleracea or variants) is a leafy green annual-biennial plant, grown as an annual vegetable crop for its dense-leaved heads.Cabbage heads generally range from 1 to 8 pounds (0.5 to 4 kg) and can be green, purple and white.\r\n\r\nSmooth-leafed firm-headed greencabbages are the most common, with smooth-leafed red and crinkle-leafed savoy cabbages of both colors seen more rarely.This cool-season crop grows best when daytime temperatures are in the 60s F. Direct-seed or transplant spring crops for fresh use in summer.Plant fall crops for winter storage or sauerkraut.', 'uploads/nurserylive-seeds-cabbage-special-pride-desi-vegetable-seeds-16968672444556_520x520.jpg'),
(39, 'Poinsettia, Christmas Flower', 7, 3, 1500, 0, 'This pack contains 3 different color poinsettia plants along with Colorful pots. No flower says Christmas like the beautiful poinsettia.\r\n\r\n##About Poinsettia- \r\nYou get 3 different bract color Poinsettias flowering plants in a single pack.\r\nPlants in this pack are easy to care.\r\nPlants are perfect to bring contrast colors in your garden.\r\nPerfect to bring colors to garden in winter season', 'uploads/nurserylive-combo-packs-plants-poinsettia-christmas-flower-pack-of-3-plants-1_0d9a554a-6873-4d4d-8f9a-f549b7368d6e_520x520.jpg'),
(40, 'Zinnia Flower', 7, 1, 600, 0, 'This pack contains 14 Zinnia flower seeds.\r\n\r\n## About- \r\nGardening improve health and reduce stress.\r\nGet 14 different Zinnia flowering seeds in a single pack.\r\nMake your own flowering garden with this pack.', 'uploads/nurserylive-combo-pack-seeds-set-of-14-attractive-zinnia-flower-seeds-16969315123340_520x520.jpg'),
(41, 'Gandha Flower', 7, 3, 30, 0, 'Gardening improve health and reduce stress.\r\nGet 12 different flowering seeds in a single pack.\r\nMake your own flowering garden with this pack.\r\nThis is a perfect combo of seeds of different flowering plant for sowing in rainy season.', 'uploads/nurserylive-combo-pack-seeds-set-of-12-best-flower-seeds-to-sow-in-rainy-season-16969312534668_520x520.jpg'),
(42, 'Bauhinia Purpurea', 3, 2, 200, 0, 'Phanera purpurea: Common names include purple bauhinia, camel\'s foot, butterfly tree, Hawaiian orchid tree, Pink butterfly tree, \r\n# Purple butterfly tree, \r\n# Purple orchid tree.', 'uploads/nurserylive-seeds-bauhinia-purpurea-purple-orchid-tree-0-5-kg-seeds-16968614903948_520x520.jpg'),
(43, 'Bauhinia Variegated', 7, 2, 200, 0, 'This tree is the official floral emblem of Hong Kong and it is widely cultivated in tropical regions.\r\n\r\nThe Orchid Tree grows to approximately 10m tall in the warm climate, and 5-6m tall in the cooler climate. It has large, fragrant, pink to purple flowers. The flowers resemble the flowers borne on orchids, which is where the common name originates from, and are absolutely stunning.\r\n\r\nFlowers are followed by seed pods of up to 30cm long, which contain several seeds. Leaves are large and shaped like a butterfly. The Orchid Tree is native to Asia, and it is the emblem of Hong Kong.', 'uploads/nurserylive-seeds-bauhinia-variegated-kachnar-orchid-tree-0-5-kg-seeds-16968614969484_520x520.jpg'),
(44, 'Ground Orchid', 3, 2, 500, 0, 'Spathoglottis plicata or Ground orchid, native of South-eastern Asia to the Philippines, is the common species of Orchid which blooms round the year.\r\n\r\nSr	Item name\r\n1	Ground Orchid, Spathoglottis Plicata (Purple) - Plant\r\n2	5 inch (13 cm) Grower Round Plastic Pot (Black)\r\nThis easily grown terrestrial herb has pretty, arching broad leaves with prominent parallel veins and a few or large cluster of small flowers at the end of a long stalk as tall as 1 metre arising from a basal leaf axil.\r\n\r\nThe leaves emerge from round pseudo bulbs that become increasingly multiple and larger as the orchid matures.', 'uploads/nurserylive-plants-ground-orchid-spathoglottis-plicata-purple-plant-16968908963980_520x520.jpg'),
(45, 'Flying Duck Orchid', 3, 2, 1200, 0, 'Caleana major, Monkey Orchid\r\n\r\nCaleana major, the flying duck orchid, is a small orchid found in eastern and southern Australia. This terrestrial plant features a remarkable flower, resembling a duck in flight.', 'uploads/nurserylive-flying-duck-orchid-flower_520x520.jpg'),
(46, 'Buxus Bonsai', 3, 3, 5000, 0, 'Bonsai is closely resembling circumstances in nature. These styles are open to personal interpretation and creativity of nature.\r\n\r\nWhat makes it special:\r\nA Bonsai tree is a replication of nature.\r\nEnhance the aesthetic appeal.\r\nA tree which is planted in a shallow container.\r\nBest for both indoor and outdoor.\r\nBoxwood is a very hardy plant and grows rapidly as well. This is mostly used as an ornamental plant and is grown and shaped into a variety of designs. There are more than 70 species of boxwood. In nature, the boxwood often grows with twisted trunks and branches.\r\n\r\nThe flowers are white. Boxwood has many good characteristics that are useful for bonsai. It has the smallest leaf of all Boxwoods which is why it is sought after for bonsai. Dark green leaves that create greenery, naturally short internodes and they can take hard pruning that prompts prolific back budding. It works best for bonsai shaping because its root system is shallow and fibrous that often produces powerful surface roots and nebari and the bark is thin.Idea location for Buxus bonsai is the window sill, terrace, balcony, patio, outdoor garden, etc.', 'uploads/nurserylive-plants-buxus-bonsai-plant-16968671363212_520x520.jpg'),
(47, 'Ficus Bonsai ', 3, 1, 3000, 0, 'Enjoy your surrounding with this adorable Ficus microcarpa bonsai.\r\n\r\nBonsai is the artificial production of natural tree forms in miniature appearance. Ficus microcarpa bonsai has a shape of its strong roots, stems, and small alternating oval shape with dark green leaves.\r\n\r\nIt has the number of heavy, thick aerial exposed roots that appears like the trunks than a natural root.', 'uploads/nurserylive-plants-ficus-bonsai-plant-16968858140812_520x520.jpg'),
(48, '3.3 inch  quare Plastic Planters', 5, 3, 150, 0, 'This combo pack contains 3 Red, Blue, and Yellow color planters. Make a terrace, balcony, window, and indoor garden vibrant with these pots.\r\n\r\n**About 3.3 Inch -\r\nIn this pack you will get 3 red, yellow and blue color planters in a single pack.\r\nThese planters introduce new designs with the latest color trends.\r\nDesigned to bring color and vibrancy to your home/office interiors.\r\nCreate a colorful garden in limited space with these planters', 'uploads/nurserylive-combo-packs-pots-3-1-inch-8-cm-square-plastic-planters-with-rounded-edges-pack-of-three-16968457191564_520x520.jpg'),
(49, '3 inch Grower Round Plastic Pot', 5, 2, 200, 0, 'Designed to bring color and vibrancy to your home/office interiors. It makes growing plants more fun.\r\n\r\nThese pots introduce new designs with latest color trends keeping in mind the increasing demand for planters for garden, terrace, indoor and outdoor plants.The opinion of customers, plant nurseries, architects, and professionals has been taken into consideration while selecting this range of pots.\r\n\r\nThis pot has sufficient drainage holes at the bottom, which helps to avoid the overwatering to the plant.', 'uploads/nurserylive-planters-3-inch-8-cm-grower-round-plastic-pot-terracotta-color-16968469807244_520x520.jpg'),
(50, 'Grower Round Plastic Pot (Black)', 5, 2, 250, 0, 'Designed to bring color and vibrancy to your home/office interiors. It makes growing plants more fun.\r\n\r\nThese pots introduce new designs with latest color trends keeping in mind the increasing demand for planters for garden, terrace, indoor and outdoor plants.The opinion of customers, plant nurseries, architects, and professionals has been taken into consideration while selecting this range of pots.\r\n\r\nThis pot has sufficient drainage holes at the bottom, which helps to avoid the overwatering to the plant.', 'uploads/nurserylive-planters-3-inch-8-cm-grower-round-plastic-pot-black-16968469315724_520x520.jpg'),
(51, 'Round Plastic Plate for 5 inch ', 5, 1, 200, 0, 'The bottom plate reduces the risk of damage/staining of the floor through water, by collecting excess, drained water from a pot.\r\n\r\nCan be used to collect drained water, from4.5 inch Grower Round Plastic Pots of approximate size 12.5 x 9 x 11 (Upper Diameter X Lower Diameter X Height) in cms.5 inch Grower Round Plastic Pots of approximate size 13.5 x 9.5 x 12.5 (Upper Diameter X Lower Diameter X Height) in cms.\r\n\r\n6 inch Grower Round Plastic Pots of approximate size 15.5 x 10.5 x 14 (Upper Diameter X Lower Diameter X Height) in cms.Any round pot having lower diameter 10.5cms or less than 10.5cms.', 'uploads/nurserylive-planters-5-9-inch-15-cm-round-plastic-plate-for-5-inch-13-cm-6-inch-15-cm-grower-pots-black-16969277866124_520x520.jpg'),
(52, 'Strawberry', 6, 2, 300, 0, '1 packet contains Strawberry - 30 Seeds. The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.\r\n\r\nThey are one of the most productive plants when what is produced from the weight of the plant is considered. The leaves are compound, typically with three leaflets, and usually hairy. The flowers, generally white, rarely reddish, are borne in small clusters on slender stalks.\r\n\r\nBotanically, the bright colored strawberry fruit is considered an accessory fruit and is not a true berry. Strawberries begin to ripen four to five weeks after the first flowers open and continue to ripen for about three weeks. Propagation is possible by runners.', 'uploads/nurserylive-seeds-strawberry-fruit-seeds-16969353068684_520x520.jpg'),
(53, 'Papaya ', 6, 2, 60, 0, 'Sweet and delicious, this papaya s bright orange flesh is wonderfully refreshing in fresh salads, alone or mixed with other fruit. Plants grow to 8 feet in containers kept in full sun with temperatures above 65 F. In warm, sunny areas, plants grow fast and ripen fruit within a year.\r\n\r\nOverwinter indoors and move outdoors in the summer. Fruits are borne along the trunk and ripen from hard green to softer yellow-orange. Palm-shaped, long-stalked foliage adds to the tropical look.Papaya tree bears many spherical or pear-shaped fruits that can have about 6-20 inches in length and 4-12 inches in diameter. The average-sized papaya weighs about a pound. The fruit is said to ripen when it feels soft to thumb pressure, and its skin has attained an amber to orange hue.', 'uploads/nurserylive-seeds-papaya-selection-i-fruit-seeds-16969106423948_520x520.jpg'),
(54, 'Anjeer Fruit', 6, 1, 500, 0, 'Growing Anjeer plant is an easy way to add a tropical flair to your garden. When you know that its important and how to care for Anjeer plants, you will be rewarded with many years of lovely fruit.\r\n\r\nWhat makes it special:\r\nOne of the best attractive and nutritional fruit plants.\r\nGood source of calcium.\r\nLow maintenance plant.\r\nPerfect plant for outdoor garden.\r\nThis product does not have the flowers and fruits at the time of shipping. Afterward, the plant will bloom and produce fruits.Anjeer is a beautiful small deciduous tree with an interesting spreading habit from Moraceae family. The breadth is often wider than the height of 4-9 meter.\r\n\r\nThe bark is a smooth, silvery gray. The leaves of the tree are the identifying feature, they are about 4 inches long and have 3 or 5 lobes.The species name carica means having papaya-like leaves. The fruit, which is called anjeer, may be top-shaped, or pear-shaped, 1 to 4 in long, and varies in color from yellowish-green to coppery, bronze, or dark-purple.Well loved for their sweet, mild flavor fruit and multiple uses and fig are great source of calcium.In Missouri, plants may be grown in sheltered locations outdoors with root mulch or in containers that are overwintered indoors. Planting is usually done in the month of January-February month.', 'uploads/nurserylive-plants-fig-tree-anjeer-fruit-common-fig-fruit-plant-16968860139660_520x520.jpg'),
(55, 'Miracle Fruit', 6, 2, 800, 0, 'The miracle fruit is a slow-growing shrub or tree with a height of 15 feet grown for its mild fruits that make subsequently eaten sour foods taste sweet.\r\n\r\nInteresting fact: After eating one miracle fruit, sour things will instantly taste sweet. Eating even the sourest of lemons, one will taste only sugary sweetness. The effect lasts an hour or two.\r\n\r\nThe Miracleberry (Synsepalum dulcificum) is a large shrub with dense foliage clustered at the tips of its many slender branches. It is native to West and West-Central tropical Africa. This plant is best known for its red berries, which contain a glycoprotein known as miraculin. Miraculin has the remarkable property of modifying sour tastes into sweet.', 'uploads/nurserylive-plants-miracle-fruit-synsepalum-dulcificum-plant-16969029451916_520x520.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `uid`, `review`, `timestamp`) VALUES
(1, 2, 1, 'wow!', '2021-02-01 01:20:38'),
(2, 3, 3, '', '0000-00-00 00:00:00'),
(3, 3, 3, '', '0000-00-00 00:00:00'),
(4, 3, 3, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`) VALUES
(1, 'Ever Green Nursery'),
(2, 'Chittagong Nursery'),
(3, 'Flower Garden');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestamp`) VALUES
(2, 'user@gmail.com', '12345', '2021-02-01 01:20:38'),
(4, 'admin@gmail.com', '$2y$10$9C8.lJVrCCgRYwp1lHkdguAMYEreh6HEAwo7sCzVdIuO8Nj8vSEhm', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `plcstation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobile2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `address1`, `address2`, `city`, `country`, `zip`, `plcstation`, `email`, `mobile`, `mobile2`) VALUES
(2, 0, 'Camden Page', '', '', '', '', '', '', '', '', '', ''),
(3, 0, 'Camden Page', '', '', '', '', '', '', '', '', '', ''),
(4, 0, 'Charity Lester', '', '', '', '', '', '', '', '', '', ''),
(5, 0, 'Charity Lester', '', '', '', '', '', '', '', '', '', ''),
(6, 0, 'Oleg Mcclain', '', '', '', '', '', '', '', '', '', ''),
(7, 0, 'Audrey Reid', '', '', '', '', '', '', '', '', '', ''),
(8, 4, 'Winter Holcomb', 'Keegan Lang', '182 South Fabien Parkway', 'In officiis anim exe', 'Amet blanditiis aut', 'AU', '22426', 'Ut dolor sapiente oc', '', '12121212121', '42342');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
