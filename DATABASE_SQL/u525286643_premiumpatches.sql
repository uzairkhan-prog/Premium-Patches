-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2025 at 05:47 PM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u525286643_premiumpatches`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `summary`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'predefined chunk necessary the Internet.', 'predefined chunk necessary the Internet.', 'predefined chunk necessary the Internet.', 'img-1.jpg', '2025-03-21 01:44:09', '2025-03-21 01:44:09'),
(2, 'Choose a CMS and set up your blog and details.', 'Choose a CMS and set up your blog and details.', 'Choose a CMS and set up your blog and details.', 'img-2.jpg', '2025-03-21 01:44:28', '2025-03-21 01:44:28'),
(3, 'Necessary the Internet predefined post.', 'Necessary the Internet predefined post.', 'Necessary the Internet predefined post.', 'img-3.jpg', '2025-03-21 01:44:44', '2025-03-21 01:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `service`, `message`, `created_at`, `updated_at`) VALUES
(24, 'Admin', 'basimkhan8034@gmail.com', '0315467897987', 'Woven Patches', 'f ds sd', '2025-03-26 00:22:20', '2025-03-26 00:22:20'),
(25, 'Uzair Khan', 'uzairkhanvt@gmail.com', '03155588951', 'Raster to Vector', 'sadad asd', '2025-04-17 18:48:52', '2025-04-17 18:48:52'),
(26, 'Mens Shirt', 'emergingghostwriter@gmail.com', '03102849556', 'Digitizing', 'dfs sdf sd sf d', '2025-04-17 18:50:27', '2025-04-17 18:50:27'),
(27, 'Basim', 'uzairkhanvt@gmail.com', '03184567893', 'Digitizing', 's', '2025-04-17 19:21:18', '2025-04-17 19:21:18'),
(28, 'Basim', 'basimkhan8034@gmail.com', '03155588951', 'Raster to Vector', 'dsad asd a d', '2025-05-27 19:12:16', '2025-05-27 19:12:16'),
(29, 'Anas Shakil', 'anasshakil.9@gmail.com', '03110980126', 'Custom Patches', 'I want patches', '2025-05-27 19:36:03', '2025-05-27 19:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"dac1ece3-3d32-49d7-bb17-fc6be9a14089\",\"displayName\":\"App\\\\Mail\\\\ClientInquiryMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:26:\\\"App\\\\Mail\\\\ClientInquiryMail\\\":3:{s:10:\\\"clientData\\\";a:6:{s:6:\\\"_token\\\";s:40:\\\"ebnZ3Lc9DQr5LakdiIw6m5kFTEqsBN6nZJMpj3wZ\\\";s:4:\\\"name\\\";s:5:\\\"Basim\\\";s:5:\\\"email\\\";s:23:\\\"basimkhan8034@gmail.com\\\";s:5:\\\"phone\\\";s:11:\\\"03155588951\\\";s:7:\\\"service\\\";s:13:\\\"Woven Patches\\\";s:7:\\\"message\\\";s:33:\\\"yr rty rt yrt yrty try r ytr yr t\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:23:\\\"basimkhan8034@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1742850979, 1742850979),
(2, 'default', '{\"uuid\":\"14648fb8-9030-4576-83a6-a1e02ff171c4\",\"displayName\":\"App\\\\Mail\\\\ClientInquiryMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:26:\\\"App\\\\Mail\\\\ClientInquiryMail\\\":3:{s:10:\\\"clientData\\\";a:6:{s:6:\\\"_token\\\";s:40:\\\"ebnZ3Lc9DQr5LakdiIw6m5kFTEqsBN6nZJMpj3wZ\\\";s:4:\\\"name\\\";s:5:\\\"Admin\\\";s:5:\\\"email\\\";s:23:\\\"basimkhan8034@gmail.com\\\";s:5:\\\"phone\\\";s:11:\\\"03102849556\\\";s:7:\\\"service\\\";s:15:\\\"Leather Patches\\\";s:7:\\\"message\\\";s:17:\\\"dsf sf sdf sd fsd\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:23:\\\"basimkhan8034@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"}}', 0, NULL, 1742851108, 1742851108);

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_04_152203_create_services_table', 1),
(5, '2025_02_04_152224_create_blogs_table', 1),
(6, '2025_02_04_152230_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Book', '22.jpg', '2025-03-12 23:49:08', '2025-03-12 23:49:08'),
(2, 'Book', '2.jpg', '2025-03-12 23:49:20', '2025-03-12 23:49:20'),
(3, 'Book', '12.jpg', '2025-03-12 23:49:30', '2025-03-12 23:49:30'),
(4, 'Book', '27.jpg', '2025-03-12 23:49:41', '2025-03-12 23:49:41'),
(5, 'Book', '33.jpg', '2025-03-12 23:50:33', '2025-03-12 23:50:33'),
(6, 'Book', '1.jpg', '2025-03-12 23:50:43', '2025-03-12 23:50:43'),
(7, 'Book', '28.jpg', '2025-03-12 23:50:53', '2025-03-12 23:50:53'),
(8, 'Book', '30.jpg', '2025-03-12 23:51:02', '2025-03-12 23:51:02'),
(9, 'Book', '34.jpg', '2025-03-12 23:51:20', '2025-03-12 23:51:20'),
(10, 'Book', '6.jpg', '2025-03-12 23:51:35', '2025-03-12 23:51:35'),
(11, 'Book', '13.jpg', '2025-03-12 23:52:03', '2025-03-12 23:52:03'),
(12, 'Book', '18.jpg', '2025-03-12 23:52:12', '2025-03-12 23:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `feature_icon` varchar(255) DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `parent_id`, `title`, `description`, `feature_icon`, `service_type`, `summary`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Book Writing', '<p id=\"isPasted\"><strong><span style=\"font-size: 30px; color: rgb(184, 49, 47);\">Creative Writing Services</span></strong></p><p><strong><span style=\"font-size: 24px;\">Story Development</span></strong><br>We help shape your ideas into compelling stories with strong themes, engaging plots, and immersive worlds.</p><p><strong><span style=\"font-size: 24px;\">Character Development</span></strong></p><p>We create relatable, multi-dimensional characters with authentic motivations and growth throughout the story.</p><p><strong><span style=\"font-size: 24px;\">Narrative Style &amp; Tone</span></strong></p><p>We define the perfect style, tone, and pacing that aligns with your story&rsquo;s genre and voice.</p><p><strong><span style=\"font-size: 24px;\">Plot Structuring</span></strong></p><p>We craft dynamic story arcs, meaningful conflict, and seamless subplots to keep readers hooked.</p><p><strong><span style=\"font-size: 24px;\">Genre Expertise</span></strong></p><p>Our team excels in various genres, ensuring your story fits while standing out.</p><p><strong><span style=\"font-size: 24px;\">Revisions &amp; Feedback</span></strong></p><p>We provide detailed feedback and edits to refine your manuscript, improving clarity and pacing.</p><p><strong>Why Choose Us?</strong></p><ul><li style=\"color: rgb(226, 80, 65);\" class=\"fr-text-bordered fr-text-uppercase\"><strong>Experienced Writers</strong></li><li style=\"color: rgb(226, 80, 65);\" class=\"fr-text-bordered fr-text-uppercase\"><strong>Personalized Approach</strong></li><li style=\"color: rgb(226, 80, 65);\" class=\"fr-text-bordered fr-text-uppercase\"><strong>Collaborative Process</strong></li></ul><p><strong>Get Started Today</strong></p><p>Contact Mario Publishers to transform your idea into a captivating story.</p>', NULL, 'Bringing Stories to Life', 'Creative Writing Services: Bringing Stories to Life', 'Services Cover Website-03.jpg', '2025-01-03 20:43:12', '2025-01-22 20:03:14'),
(2, NULL, 'Book Publishing', '<h2 id=\"isPasted\"><strong>Publishing Services</strong></h2><p><strong>Consultation &amp; Goal Assessment</strong><br>We start by understanding your publishing goals, whether it&#39;s traditional publishing or self-publishing.</p><p><strong>Traditional Publishing</strong><br>We assist with query letters, agent representation, and contract negotiations to help you secure a publishing deal.</p><p><strong>Self-Publishing Solutions</strong><br>We guide you through platform selection, publishing setup, ISBN registration, and global distribution.</p><p><strong>Hybrid Publishing</strong><br>Combine traditional and self-publishing benefits with professional editing, design, and marketing.</p><p><strong>Formatting</strong><br>We ensure your book is properly formatted for print and eBook versions.</p><p><strong>Global Distribution &amp; Marketing</strong><br>We help your book reach global audiences with effective distribution and marketing strategies.</p><p><strong>Why Choose Us?</strong></p><ul><li>Expert guidance and personalized support.</li><li>Tailored solutions for traditional or self-publishing.</li><li>Professional editing, design, and global reach.</li></ul><p><strong>Get Started Today</strong><br>Contact Mario Publishers for a free consultation and take the next step in your publishing journey.</p>', NULL, 'Your Path to Success', 'At Mario Publishers, we believe that every author deserves the opportunity to see their work in print and reach their target audience. Navigating the complexities of the publishing world can be daunting, but with our Publishing Services, we make the process straightforward, stress-free, and rewarding. Whether you\'re aiming for a traditional publishing deal or looking to self-publish, we offer tailored solutions that suit your needs and goals.', 'Services Cover Website-02.jpg', '2025-01-03 20:39:00', '2025-01-15 19:17:34'),
(3, NULL, 'Book Cover Design', '<h2 id=\"isPasted\"><strong>Book Cover Design Services</strong></h2><p><strong>Grab Attention</strong><br>A visually striking cover stands out in a crowded market, sparking curiosity and inviting readers to explore more.</p><p><strong>Represent Genre and Mood</strong><br>The cover communicates the book&rsquo;s genre and emotional tone, providing instant insight into what readers can expect.</p><p><strong>Professional Quality</strong><br>A well-crafted cover signals that your book is polished, credible, and worth the reader&rsquo;s time.</p><p><strong>Boost Sales and Visibility</strong><br>An eye-catching cover enhances visibility, driving interest and ultimately increasing sales.</p><p><strong>Author Branding</strong><br>Consistent cover design across works helps establish a strong, recognizable author brand, building loyalty among readers.</p><p><strong>Evoking Emotion and Curiosity</strong><br>A great cover stirs emotions, creating intrigue and prompting readers to dive into your book.</p><p><strong>Reflecting Story Themes</strong><br>The cover offers a visual preview of the book&rsquo;s themes, creating a deeper connection with potential readers.</p>', NULL, 'Book cover Design', 'A book cover is much more than a protective shell for your manuscript — it’s a powerful marketing tool, the first impression of your book, and often the deciding factor for a potential reader. A thoughtfully designed cover not only attracts attention but also communicates the essence of the story, setting the tone and expectation for the content inside.', 'Services Cover Website-06.jpg', '2025-01-08 17:45:00', '2025-01-15 19:18:01'),
(4, NULL, 'Book Marketing', '<h2 id=\"isPasted\"><strong>Book Marketing Services</strong></h2><p><strong>Consultation &amp; Goal Setting</strong><br>We start by understanding your book&rsquo;s unique qualities, target audience, and marketing goals to create a tailored marketing plan.</p><p><strong>Book Launch Strategy</strong><br>We develop a comprehensive launch plan with pre-launch buzz, social media campaigns, reviews, and book launch events to generate excitement and visibility.</p><p><strong>Ongoing Promotional Campaigns</strong><br>After launch, we maintain interest with email marketing, paid ads, giveaways, and content marketing to drive continuous sales.</p><p><strong>Social Media Marketing</strong><br>We create engaging content, collaborate with influencers, and use effective hashtag strategies to build your online community and increase engagement.</p><p><strong>Book Distribution &amp; Retail Strategies</strong><br>We optimize your Amazon listings, help with bookstore and library distribution, and expand your book&rsquo;s global reach.</p><p><strong>Brand Building &amp; Author Platform</strong><br>We help you develop your author brand with website development, social proof, and PR services like media coverage and interviews.</p><p><strong>Why Choose Us?</strong></p><ul><li><strong>Tailored Marketing Plans</strong></li><li><strong>Comprehensive Approach</strong></li><li><strong>Expert Knowledge</strong></li><li><strong>Proven Results</strong></li><li><strong>Long-Term Success</strong></li></ul><p><strong>Get Started Today</strong><br>Contact Mario Publishers to create a customized marketing plan and elevate your book&rsquo;s success.</p>', NULL, 'Amplifying Your Reach', 'Book Marketing Services: Amplifying Your Reach', 'Services Cover Website-01.jpg', '2025-01-03 20:41:55', '2025-01-15 19:21:21'),
(5, NULL, 'Audio Books', '<h1><strong>Transform Your Book into an Engaging Audio Experience</strong></h1>\r\n\r\n<p>Audiobooks are rapidly gaining popularity, allowing readers to enjoy books hands-free while commuting, exercising, or relaxing. At <strong>Mario Publishers</strong>, we help you convert your written masterpiece into a captivating audiobook, expanding your reach and connecting with a broader audience.</p>\r\n\r\n<p><strong>Why Audiobooks Matter:</strong><br />\r\nAudiobooks offer a convenient and accessible format for people with busy lifestyles, visual impairments, or those who prefer auditory content. By converting your book, you tap into this growing market and make your work available to a diverse range of listeners.</p>\r\n\r\n<p><strong>Formats and Platforms for Publishing:</strong><br />\r\nWe ensure your audiobook is produced in industry-standard formats (MP3, WAV, M4B), optimized for platforms like <strong>Audible</strong>, <strong>iTunes</strong>, <strong>Google Play</strong>, and <strong>Spotify</strong>, giving your book global visibility.</p>\r\n\r\n<p><strong>What You Will Get:</strong></p>\r\n\r\n<ol>\r\n	<li><strong>Broader Audience Reach</strong> &ndash; Expand your readership to audiobook listeners.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Additional Revenue</strong> &ndash; Generate ongoing income through audiobook sales and royalties.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Increased Visibility</strong> &ndash; Enhance your online presence across major platforms.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Professional Production</strong> &ndash; High-quality narration and editing by our expert team.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Global Distribution</strong> &ndash; Your audiobook will be available on leading platforms, reaching millions of potential listeners.<br />\r\n	&nbsp;</li>\r\n	<li><strong>Sustained Engagement</strong> &ndash; Audiobooks offer long-term revenue and lasting audience connection.<br />\r\n	&nbsp;</li>\r\n</ol>\r\n\r\n<p>At <strong>Mario Publishers</strong>, we make the audiobook creation process seamless, professional, and impactful, helping you turn your book into a lasting audio experience. Let&rsquo;s start your audiobook journey today!</p>', NULL, 'Audio Books', 'Transform Your Written Masterpiece into a Captivating Audiobook\"', 'Services Cover Website-05.jpg', '2025-01-07 18:06:41', '2025-01-09 20:25:23'),
(6, NULL, 'Video Book Trailers', '<p id=\"isPasted\"><strong>Video Book Trailer Services</strong></p><p><strong>Concept Development &amp; Storyboarding</strong><br>We collaborate with you to understand your book&rsquo;s tone and themes, then create a storyboard that visualizes the trailer, focusing on key moments and the core message.</p><p><strong>Cinematic Visuals &amp; Production</strong><br>We capture stunning imagery and use live-action or animation to bring your story to life with high-quality visuals and custom graphics.</p><p><strong>Music &amp; Sound Design</strong><br>We select or create the perfect soundtrack, incorporating sound effects and voiceovers to enhance the emotional impact of your trailer.</p><p><strong>Editing &amp; Final Touches</strong><br>Our editing ensures smooth pacing, transitions, and effective text overlays to keep the trailer engaging and informative.</p><p><strong>Promotion &amp; Distribution</strong><br>We help promote your trailer through social media, YouTube, book platforms, and optimized ad campaigns to ensure it reaches the right audience.</p><p><strong>Why Choose Us?</strong></p><ul><li><strong>Professional Quality</strong>: Cinematic visuals and professional editing.</li><li><strong>Tailored to Your Story</strong>: A trailer that reflects your book&rsquo;s unique essence.</li><li><strong>Engaging &amp; Memorable</strong>: We craft trailers that leave a lasting impression.</li><li><strong>Complete Production Services</strong>: We handle everything from concept to promotion.</li><li><strong>Targeted Marketing</strong>: We ensure your trailer reaches the right audience.</li></ul><p><strong>Get Started Today</strong><br>Contact Mario Publishers to create a cinematic book trailer that captivates readers and drives interest in your book.</p>', NULL, 'Captivate, Engage, and Excite', 'Video Book Trailers: Captivate, Engage, and Excite', 'Services Cover Website-04.jpg', '2025-01-03 20:44:02', '2025-01-15 19:22:18'),
(421127, 1, 'Non Fiction', '<p id=\"isPasted\"><strong><span style=\"font-size: 48px; color: rgb(184, 49, 47);\">Shaping Stories from Real Knowledge</span></strong></p><p><strong><span style=\"font-size: 24px;\">Expert Non-Fiction Writing</span></strong><br><br>At Mario Publishers, we create engaging, accessible, and informative non-fiction books. Whether it&rsquo;s a business guide, memoir, or educational resource, our writers combine accuracy with compelling storytelling to deliver content that resonates with readers.</p><p><strong><span style=\"font-size: 24px;\">Personalized Ghostwriting</span></strong><br><br>We collaborate closely with clients to bring their vision to life, conducting research and interviews to ensure the book reflects their unique voice and expertise. Our goal is to help you become a trusted authority in your field.</p><p><strong><span style=\"font-size: 24px;\">Specialized Writing Areas</span></strong></p><ul><li><strong>Business &amp; Leadership</strong>: Insightful strategies and leadership advice.</li><li><strong>Memoirs &amp; Personal Stories</strong>: Authentic, moving personal narratives.</li><li><strong>Health &amp; Wellness</strong>: Guides on mental well-being and fitness.</li><li><strong>Educational Content</strong>: Clear, engaging textbooks and resources.</li></ul><p><strong><span style=\"font-size: 24px;\">End-to-End Support</span></strong><br><br>From concept to completion, we provide full support, ensuring your book is professionally written, polished, and ready for success.</p>', NULL, 'Non Fiction', 'At Mario Publishers, we specialize in transforming your ideas into compelling non-fiction books. Our team of experienced writers, editors, and researchers is dedicated to producing well-crafted, insightful works that captivate and educate your readers.', 'Blog Covers Website-11 (1).jpg', '2025-01-22 20:40:17', '2025-01-22 20:54:40'),
(421128, 1, 'Fiction', '<p id=\"isPasted\"><span style=\"font-size: 36px;\"><strong><span style=\"color: rgb(184, 49, 47);\">Expertly Crafted Stories Tailored to Your Vision</span></strong></span><em></em></p><p>Our fiction writing service is designed to bring your creative vision to life. Whether you have a complete idea or just the seed of a story, we&rsquo;ll work with you to develop a captivating manuscript that resonates with readers. From the first draft to the final manuscript, we provide full support to ensure your story is engaging, well-structured, and ready for publication.</p><p><strong><span style=\"font-size: 24px;\">Personalized Story Development</span></strong><span style=\"font-size: 24px;\"><br></span><br>We begin by collaborating closely with you to shape your story concept. Whether it&#39;s a novel, short story, or series, our team will help craft a unique and engaging narrative. We focus on building strong characters, intricate plots, and immersive worlds that draw readers in and keep them hooked.</p><p><strong><span style=\"font-size: 24px;\">Professional Writing &amp; Editing</span></strong><br><br>Our skilled writers and editors will ensure that your manuscript is polished to perfection. We pay close attention to pacing, dialogue, character development, and narrative flow. We also handle grammar, structure, and style, ensuring that every element of your story is professionally presented.</p><p><strong><span style=\"font-size: 24px;\">Collaborative Approach</span></strong><br><br>We believe in collaboration and work closely with you throughout the process. We listen to your ideas, incorporate your feedback, and ensure that your unique voice and creative vision shine through in the final manuscript.</p><p><strong><span style=\"font-size: 24px;\">Comprehensive Support from Start to Finish</span></strong><br><br>From brainstorming your story to delivering the final draft, we provide end-to-end support. Our team is here to guide you through every step of the writing process, offering advice, making revisions, and delivering a polished manuscript ready for publication or submission.</p>', NULL, 'Fiction', 'Our fiction writing service turns your ideas into a compelling, well-written manuscript. From concept development to the final draft, we ensure your story is engaging, polished, and ready for publication.', 'rsz_2rsz_2blog_covers_website-08 (1).jpg', '2025-01-22 21:03:30', '2025-01-22 21:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2HYX9ObvwsnnQiU6m1bf0JUlJXAj9wtqs77NVD4X', 2, '175.107.247.245', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQUdMSFhYUWFQY054djVld1RyMTdHV2xNazdrSVdaVGxnME5yaGI0cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzU3ODcwMjU2O319', 1757870292),
('5LboZHzouSGwZHZFcpqv09JTm4JEKjIDW0S6exIU', NULL, '47.82.11.110', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoianl4NzE0SkJpcjR2WUR4RzMwM3NRd3daWjZPYWFwUGhHVk1NUjdObyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnL2xlZnQtY2hlc3QtZGlnaXRpemluZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757903574),
('ahkdkbYABhD7C8Y2wuk6S4EL8B2OihUaGSRX9LP6', NULL, '66.249.66.166', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.7339.127 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkhNNUFWakVXZmlRcFBsRDBhbXVNaFllQVNiYWI5NXRoZUVSWGhsYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZy9wdmMtcGF0Y2hlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757953846),
('AW50oXd3SI1gDE1BdBb9EtdbAdyjOkVZqL6POewA', NULL, '175.27.164.113', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzhobGhQQ0FPMjJ1RFBhS1hjTVEyb21mTlRaZDNDVDFNMDNnWHlGNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757922265),
('B8JtZ2SdhBfZxqgKvenMbALArzj0AUL4q9dtB8hC', NULL, '2a03:2880:f802:1::', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSlZadHBJQTJUTE5KYXZnSGUzRndtVzdObUFQcEVMblpUR1dxTlR4dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757936030),
('cmcD5lAHdIemmvWYKAwTazpgZi28jX0EUcHqp6E4', NULL, '189.1.241.114', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjMyY2xZNUc0VlRLRTl3RXRwb2tBMHF5TWtQRWpHRFp4QjdtdnpJMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnL2xlYXRoZXItcGF0Y2hlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757873410),
('Cnj8bBxdb08zKM3D57mPhbEzbWYslKAceN5FxKLA', NULL, '42.236.101.228', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGhVcTA0VkdVZEo3N3d5QlNGbExKZElqbmJQOFZGVFloaWNwN3lobCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757882450),
('gOEAbl9hit11DrMFydxoT8GBg2RzYnOYLCLu144x', NULL, '182.44.67.97', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ042MHIwR3R2aUxzWGhHZzZaWXBCY3NTR1dJdEFmYWw0NUkwQ2RreSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757867722),
('H5O6DkwpTNqa4GLmKfzgnKSrpzmQAJPXOnuqDV5w', NULL, '66.249.66.74', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.7339.127 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOW5pRjVCUkdGUDdBOU5OV0dHQU5CSEFTQWM4eVZYd3M2TnRXSG8yYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757922728),
('hFtl0wymBc8mQNxQVzfjwLB4XXTEOOYHIm5GkWCM', NULL, '125.94.144.102', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlNJVDViWmYzb1NPVUFGWWNvNkRBa2R3Z2FHa1NQUFdsVFRHUlRaMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757881434),
('hrm6GMVqh0RkoS6cAp2SbBnckaq68K3N6LSv2BaP', NULL, '42.236.17.48', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36; 360Spider', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGNYcUlMQUdDWFJ0S1E2MG9lbm42SjJQb2FlaFc3aWNwbENnYVFybyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757880681),
('MDCS9PoBdaqpE2yt0S7Dapp8BdOU8p1LuLvky6Bf', NULL, '2a02:4780:a:c0de::2', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRUEzMUg0RmZWckxIeGZjWGRBYTl6bXhOM3p5OXdWTDVtc0tDRnN3TyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757906809),
('MlgJTM6c4d8yjnkyWl5lT8OkdrAUA2hCM4xpu8C9', NULL, '164.132.172.225', 'Mozilla/5.0 (Fedora; Linux x86_64; rv:131.0) Gecko/20100101 Firefox/131.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnhLeVFzRjBrb25RVDNLcVBlQWVnazI2V0V4eVFpdVMzN3BNV09HWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757937390),
('pGZzEK9Zras1hj6JzlgSMUJDDZrZjezhHuJoXjqs', NULL, '66.249.66.38', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.7339.127 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQVcyMXJWWXdVOFBtS21uV3IwTkNGUE9pUGVwbnFxOHVPSExydEhmNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZy9hcHBsaXF1ZS1kaWdpdGl6aW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757903825),
('PsiH8xd1IkOnCpcoF7Kyazpf08kzWNRIsFkdTvaQ', NULL, '2407:aa80:15:4f66:89e0:f72a:6e3d:856f', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNENJNVF3NlFNT01MdHhWV2lPV0dtcW1BbzN4RktLUWxHeUhuT1N5ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757958210),
('qLaaIOzTUv2uVPjmlPo5n4ZNfhvfuPzadLii7FQc', NULL, '93.158.91.237', 'Mozilla/5.0 (Linux; Android 12; SAMSUNG SM-A415F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/23.0 Chrome/115.0.0.0 Mobile Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVVPc0JVeVUwZ2tmMnBsdDZZaEZqd1lIbnFEWGZ6ejZZbXFkUUZTMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757890909),
('SUOg5YCgKRrl8ac394vCrG5oYwknb6fHWGZTgMsf', NULL, '132.232.165.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzI5ckdiOVdQMHA3cWJHRkl0V2cwNUV1OWcxbjVQYWNmd002Z2JnUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757936200),
('wWRsUsHqhwv0KYTww3NuzygFNvugns628vAkSVpW', NULL, '23.106.201.34', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFhLc3VONVA3QnNnQ1M4SWI5bm9jZ2VoQzJHeU9GTXd0WU1GOEJodCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vd3d3LnByZW1pdW1wYXRjaGVzLm9yZy9ibG9ncyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1757913584),
('yX8gijVVdyituRFbEsHyRCKoQMJDx84zUAeHmvs1', NULL, '93.158.90.52', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjFySGI5VEhTSTZGeUF2c1dJdGk4aFJwVHR2MWZISlltbDJEaHJCZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vcHJlbWl1bXBhdGNoZXMub3JnIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1757891472);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'emergingghostwriter@gmail.com', NULL, '$2y$12$oHGbZeCsTWXVuFSzRNB7t.sOgzOzDyHXbSLn7qV/iZXm7WFh8Ut52', 'B6SAOdA8RrVF8QfqlnpP0g5X834UdAfzMtExWKn9YOMkIW65nE40Ymrp3oZq', NULL, NULL),
(2, 'Admin', 'basimkhan8034@gmail.com', NULL, '$2y$12$I3syPrJ7Gy2dGgCjtDNAseAEHfpIfdtcMnwXpofcTTHlD/iEJ6cSG', NULL, '2025-03-21 04:28:24', '2025-03-21 04:28:24'),
(3, 'adminxp', 'adminxp@gmail.com', NULL, '$2y$12$4Zj6EUs1Mq.lt4Jv0W.Bk.Nl9G8pou8yjKLY1u7CUM2.DeYYzM3a2', NULL, '2025-09-07 16:31:34', '2025-09-07 16:31:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421129;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
