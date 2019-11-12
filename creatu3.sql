-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 11:41 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creatu3`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimageabout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `altimage`, `aboutimage`, `altimageabout`, `description`, `created_at`, `updated_at`) VALUES
(1, '1569891936banner2.jpg', 'banner Image', '1569891936banner2.jpg', 'our office', '<span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-weight: 400; text-align: justify;">Bhawani Solutions is a ‘A’ class construction company registered with the Office of the Company Registrar as per the rules of Private Limited Company Act 2021.The main purpose of the company is to carry out different constructions works related to water resource, sanitary and irrigation, roads, residential and commercial building, bridge, hydropower, communication tower, transmission and distrinution line, infrastructure as well as repair and maintenance work throughout Nepal. We also work with designs and constructions. The company started in the year 2017 with a group of entrepreneur minded team. The main of the company was to provide timely delivery of high quality projects being cost effective. With time, the company has transformed into a specialized construction company satisfying all of our customers. All of our projects are well designed, well planned, and properly constructed following all the required standards. We specialize in construction works and renovation works. SInce the establishment of the company we have been successful enough in completing the construction works of residential building, commercial building, bridges, roads and much more. For every of our projects, we select the best team depending upon the need of the project so as to control the project cost, time and quality.</span>', '2019-09-30 19:20:36', '2019-09-30 19:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `altimage`, `title`, `description`, `seotitle`, `keywords`, `seodescription`, `status`, `created_at`, `updated_at`) VALUES
(1, '1569916526vastu.jpg', 'वास्तुशास्त्र', 'वास्तुशास्त्र सँग सम्बन्धित केहि जीवनमा सफलता उपयोगी कुरा……', '<header class="entry-header" style="color: rgb(51, 51, 51); font-weight: 400; margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;"><span style="font-weight: inherit;">१. पढ्दा के गर्ने ?</span></header><div class="entry-content" style="color: rgb(51, 51, 51); font-weight: 400; margin: 0px; padding: 0px; border: 0px; font-size: 13px; vertical-align: baseline; position: relative; overflow: hidden; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif;"><p style="margin-bottom: 1.5em; font-family: Roboto, sans-serif; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">पढ्ने बेला जहिले पनि उत्तर–पूर्वी दिशातर्फ फर्केर पढ्नुपर्छ<br>यदि कोही विद्यार्थी पढ्नमा कमजोर भएको खण्डमा उक्त विद्यार्थीलाई दैनिक रुपमा तुलसीको बोटमा पानी हाल्न लगाउनुपर्छ ।<br>घरमा अशोकको रुख पूर्वपट्टी रोप्नाले पनि यसको प्रभावले विद्यार्थीलाई पढ्न मनलाग्छ ।<br>परिक्षामा जाँदा जहिले पनि हरियो रङको लुगा लगाउने ।<br>२. घरमा के गर्ने के नगर्ने ?<br>घर उत्तर पट्टी बनाउँदा निकै राम्रो मानिन्छ । पूर्व पट्टी बनाइएको घरलाई पनि राम्रो मानिन्छ ।<br>पाहुनाहरु खुसी भएर चाँडै फर्कुन् भन्ने चाहनुहुन्छ भने पाहुनाकोठालाई पश्चिम–उत्तर कुनाको कोठामा बनाउनुहोला ।<br>पूजाकोठालाई भुँइतलाको उत्तरपूर्वी कोठामा बनाउनु होला । वर्षमा ३६५ दिन नै पूजा गर्न नसकिँने हुँदा मूर्तीलाई भन्दा फोटोलाई पूजा गर्नुहोस् । मूर्तीलाई कहिले पनि भोको राख्न नहुने बास्तुको बुझाई छ ।<br>दक्षिण पश्चिम कुनामा मेन गेट नराख्नुहोला । इनार अथवा रिजर्भ ट्याङ्की खनाउँदा पनि यो कुनामा नखनाउँदा नै वेश हुन्छ ।<br>गेटमा त्रिशुल अंकित तस्बिर र जनावरका तस्बिरहरु नराख्नुहोला । यसले परिवारमा मनमुटाव पैदा गर्ने गर्दछ । यस्ता तस्बिरहरुको सट्टामा कमलको फूल, महालक्ष्मी, गणेशजस्ता भगवानको तस्बिर राख्नुहोला ।<br>घरमा पिपल, बर र अरु जंगली बोट कहिले पनि नरोप्नुहोला । यदि आफैँ उम्रेको खण्डमा त्यसलाई तत्काल उखेलेर फाल्नुहोला । यस्तो बोटबिरुवा घरभन्दा २०० मिटर टाढा हुनुपर्छ ।<br>हात्तिसँग सम्बन्धित केहि पनि वस्तुहरु घरमा नराख्ने । यस्तो सामानहरु घरमा भएमा आयमा कमी हुने, व्यापार डामाडोल हुने, बदनामी भएर जागीर छुट्नजस्ता नकारात्मक असर पर्ने गर्दछ । हात्तीको पुच्छरमा सुनचाँदी मोडेर लगाउनाले ९९ प्रतिशत मानिसहरुलाई नोक्सानी हुन्छ ।<br>घरको उत्तर–पूर्वी कोठा सधैँ खुल्ला र सफा राख्नपर्ने हुन्छ । यस कोठाको झ्यालहरु बिहान उठ्ने बित्तिकै खोल्ने गर्नुपर्छ ।<br>क्याकटसजस्ता काँडा भएका बोटहरु घरमा भरसक नरोप्ने । यदि रोप्नै परे पश्चिम तिर रोप्नुहोस् ।<br>ठूला–ठूला बोटहरु रोप्नु छ भने दक्षिणमा रोप्नुहोस् ।<br>३. आमाबुवासँग छोराछोरीको कुरा नमिलेमाः<br>उत्तरपूर्वी कुनामा पहेँलो रङको चिम राख्नाले आमाबुवासँग छोराछोरीको कुरा मिल्ने<br>गर्दछ ।<br>४. विवाह हुन नसकेको छोरी घरमा भएः<br>अविवाहित महिला सधैँ उत्तर–पूर्वमा सुत्नुपर्छ ।<br>यदि लामो प्रयासपछि पनि विवाह हुन नसकेको खण्डमा सकिन्छ भने दिनदिनै नभए प्रत्येक बिहिबार केराको जरालाई दुध चढाएर पाकेको केराले नै पूजा गर्नुपर्दछ ।<br>५. आयमा बढोत्तरीका निम्तिः<br>घरको मूल व्यक्ति (जसले परिवारको लागि कमाउने गर्दछन्), दक्षिणमा शिर र उत्तरमा खुट्टा राखेर सुत्नुपर्ने हुन्छ ।<br>घरको भर्याङ दाहिने घुमेको हुनुपर्छ ।<br>६. नवविवाहित जोडिको कोठाः<br>श्रीमान–श्रीमतीको कोठा दक्षिण पश्चिममा फर्केको हुनुपर्छ । यदि पूर्व–दक्षिण कुनामा नवविवाहित जोडिको कोठा छ भने कोठा परिवर्तन गर्नु नै राम्रो मानिन्छ नभएर सम्बन्ध विच्छेद हुने पक्का छ ।</p></div>', 'BhawaniGroup-Articles-वास्तुशास्त्र', 'BhawaniGroup-Articles-वास्तुशास्त्र', 'BhawaniGroup-Articles-वास्तुशास्त्र', 'active', '2019-10-01 07:55:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`, `description`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'banner', 'banner', '1569909908banner2.jpg', 'banner', 'active', '2019-10-01 06:05:08', NULL),
(3, 'test', 'test', '15699137133k5wbSLXLABkAlpKPJvg.jpg', 'test', 'active', '2019-10-01 07:08:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bhawani Group', '1569892141bhawanigroup.png', 'Bhawani Group', 'active', '2019-10-01 01:09:01', NULL),
(2, 'Ector Group', '1569892178ectorgroup.png', 'ector group', 'active', '2019-10-01 01:09:38', NULL),
(3, 'ASF', '15699113142.jpg', 'D', 'active', '2019-10-01 06:28:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@admin.com', '9876123456', 'hello', '2019-10-01 01:54:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(1, '1569918174house.jpg', 'My House', 'active', '2019-10-01 08:22:54', NULL),
(2, '1569918192house.jpg', 'My House', 'active', '2019-10-01 08:23:12', NULL),
(3, '1569918210G2XNyYT4bSgOoSCrJ9zR.jpg', 'My House', 'active', '2019-10-01 08:23:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_14_105116_create_carousels_table', 1),
(4, '2019_09_27_155245_create_abouts_table', 1),
(5, '2019_09_28_011854_create_services_table', 1),
(6, '2019_09_28_070738_create_designs_table', 1),
(7, '2019_09_28_084725_create_testonomials_table', 1),
(8, '2019_09_29_013300_create_articles_table', 1),
(9, '2019_09_29_063247_create_contacts_table', 1),
(10, '2019_09_29_070512_create_replies_table', 1),
(11, '2019_09_29_100848_create_sections_table', 1),
(12, '2019_09_30_014723_create_teams_table', 1),
(13, '2019_09_30_054034_create_clients_table', 1),
(14, '2019_09_30_054432_create_seos_table', 1),
(15, '2019_09_30_071618_create_quickmails_table', 1),
(16, '2019_09_30_095707_create_works_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quickmails`
--

CREATE TABLE `quickmails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Art Of Designing', '<span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-weight: 400;">We follow the modern approach and techniques while designing the property. The designs are unique and simple with a blend of creativity.</span>', 'active', '2019-10-01 01:06:42', NULL),
(2, 'Clean Designs', '<span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-weight: 400;">The designs are made by following the international standard. We maintain and assure quality of the building during the process of construction.</span>', 'active', '2019-10-01 01:07:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `name`, `title`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'BhawaniGroup-Home', 'BhawaniGroup-Home', 'Bhawani Solutions is a ‘A’ class construction company registered with the Office of the Company Registrar as per the rules of Private Limited Company Act 2021.', '2019-10-01 08:31:32', '2019-10-01 08:45:04'),
(2, 'About', 'BhawaniGroup-About', 'BhawaniGroup-About', 'BhawaniGroup-About', '2019-10-01 08:32:13', NULL),
(3, 'Design', 'BhawaniGroup-Designs', 'BhawaniGroup-Designs', 'BhawaniGroup-Designs', '2019-10-01 08:33:09', NULL),
(4, 'Article', 'BhawaniGroup-Article', 'BhawaniGroup-Article', 'BhawaniGroup-Article', '2019-10-01 08:33:40', '2019-10-01 09:03:50'),
(5, 'Service', 'BhawaniGroup-Services', 'BhawaniGroup-Services', 'BhawaniGroup-Services', '2019-10-01 09:09:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seokeyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `altimage`, `title`, `description`, `seotitle`, `seokeyword`, `seodescription`, `status`, `created_at`, `updated_at`) VALUES
(1, '1569914135residental.jpg', 'residental', 'Residential Building', '<p><span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-weight: 400; text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua. Ut enimet minim veniam magna aliqua. Ut enim minim veniam exercitation laboris ut siad consequat siad minim enum esqudiat dolore.</span><br></p>', 'BhawaniGroup-Services-Residental', 'BhawaniGroup-Services-Residental', 'BhawaniGroup-Services-Residental', 'active', '2019-10-01 07:15:35', NULL),
(2, '1569914618interior design.jpg', 'interior design', 'Interior Design', '<p style="font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-weight: 400;">Bhawani Solutions interior design team uses its extensive experience and professional skills to take charge of your interior design project while keeping your premises and needs in mind - whether for public or business premises, or for your own home. Different kinds of premises with their specific requirements, from hotels to offices, business premises, restaurants and lounge, are all familiar interior decoration and design objects for us. In our design process, we are product-oriented; our designers are well-acquainted with our product range, and we can help implement designs. This ensures that even more challenging projects can proceed quickly under the same roof, from design to implementation.&nbsp;</p><p style="font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-weight: 400;">&nbsp;</p><p style="font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-weight: 400;">We are familiar with various scales: for example we can design and implement your idea for a whole chain concept, or for your holiday home. As needed, we approach premises either as people''s operating environment, as a concept, or as a brand. We will also take into account the purpose of a room also from the perspective of lighting and technology.</p><p style="font-family: Roboto, sans-serif; color: rgb(51, 51, 51); font-weight: 400;">Whether your project is still only an idea, already under construction, or in need of some finishing touches, our team will handle it with strong competence and creativity. You will have our interior design specialists, decades of know-how and creativity at your service. We will customize solutions to fit your needs: from designs to the finished room.</p>', 'BhawaniGroup-Services-Interior', 'BhawaniGroup-Services-Interior', 'BhawaniGroup-Services-Interior', 'active', '2019-10-01 07:23:38', NULL),
(3, '1569914755communication.jpg', 'communication tower', 'Communication Tower', '<span style="color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-weight: 400;">Perform comprehensive analysis and design of monopoles (tapered and straight), self-supporting (three leg and four leg) and guyed towers (three leg and four leg), and communication towers through physical modeling and parametric tools, ensuring minimum user interaction. Easily attach components and generate wind, ice, and seismic loads following TIA codes and IS codes along with other standard reference loads.</span>', 'BhawaniGroup-Services-CommunicationTower', 'BhawaniGroup-Services-CommunicationTower', 'BhawaniGroup-Services-CommunicationTower', 'active', '2019-10-01 07:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `position`, `department`, `name`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chief executive director', 'CEO', 'ER. BHAWANI OJHA', '1569892070bhawani.jpg', 'Bhawani Ojha', 'active', '2019-10-01 01:07:50', NULL),
(2, 'Executive Director', 'Construction', 'ER.Janak Poudel', '1569892103janak.jpg', 'Janak Poudel', 'active', '2019-10-01 01:08:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testonomials`
--

CREATE TABLE `testonomials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seotitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seodescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testonomials`
--

INSERT INTO `testonomials` (`id`, `image`, `altimage`, `name`, `description`, `seotitle`, `keywords`, `seodescription`, `status`, `created_at`, `updated_at`) VALUES
(1, '1569893457test1.jpg', 'hospital', 'Hospital by bhawani group', 'Its a well structured hospital designed by Senior architect of  Bhawani Group construction which is going to be constructed in Sindhuli, Nepal.', 'BhawaniGroup-Testimonial', 'BhawaniGroup-Testimonial', 'BhawaniGroup-Testimonial', 'active', '2019-10-01 01:30:57', NULL),
(2, '1569893545test2.jpg', 'test', 'Rajiv Kumar singh', 'Our store is truly a compliment to your organization. We have been tremendously impressed with not only the workmanship and timeliness, but most important, your ongoing effort to coordinate and motivate your subcontractors.', 'BhawaniGroup-Testimonial', 'BhawaniGroup-Testimonial', 'BhawaniGroup-Testimonial', 'active', '2019-10-01 01:32:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'superadmin', 'admin@admin.com', '$2y$10$raNeKWlMSoN4njq2an7OZuLeR5dTH1CFBHjo/cThUfWoFo.DNLnCC', NULL, '2019-09-30 04:31:49', '2019-09-30 04:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `image`, `alt`, `status`, `created_at`, `updated_at`) VALUES
(2, 'house', '1569918379JRMURBEXsO4IATwfgwjE.jpg', 'My House', 'active', '2019-10-01 08:26:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `quickmails`
--
ALTER TABLE `quickmails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testonomials`
--
ALTER TABLE `testonomials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `quickmails`
--
ALTER TABLE `quickmails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testonomials`
--
ALTER TABLE `testonomials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
