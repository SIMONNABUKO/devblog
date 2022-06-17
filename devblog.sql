-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 10:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->inactive,1->active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `cat_name`, `cat_slug`, `cat_desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Programming', 'programming', 'This is the programming category', 1, '2022-05-27 03:38:29', '2022-05-27 03:52:20'),
(2, 1, 'Linux', 'linux', 'This is Linux', 0, '2022-05-27 03:49:59', '2022-05-27 03:49:59'),
(3, 1, 'Mikrotik', 'mikrotik', 'Mikrotik category', 1, '2022-05-27 03:51:58', '2022-05-27 03:52:32'),
(4, 1, 'Ubuntu EDITED', 'ubuntu', 'This is Ubuntu Linux distro', 0, '2022-06-10 05:31:20', '2022-06-10 05:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->inactive,1->active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2022_05_23_052701_create_categories_table', 1),
(17, '2022_05_23_052847_create_posts_table', 1),
(18, '2022_05_23_052912_create_comments_table', 1),
(19, '2022_05_23_052924_create_replies_table', 1),
(20, '2022_05_23_053043_create_settings_table', 1),
(21, '2022_05_23_053058_create_messages_table', 1),
(22, '2022_05_23_053110_create_newsletters_table', 1),
(23, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->inactive,1->active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testadmin@gmail.com', 0, '2022-06-07 05:24:13', '2022-06-07 05:24:13'),
(2, 'emily@gmail.com', 0, '2022-06-07 05:25:00', '2022-06-07 05:25:00'),
(3, 'testnewsletter@gmail.com', 0, '2022-06-10 05:28:28', '2022-06-10 05:28:28'),
(4, 'sdgfsdf@gmail.com', 0, '2022-06-17 03:58:09', '2022-06-17 03:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_views` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->inactive,1->active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `author`, `author_email`, `post_title`, `post_slug`, `post_image`, `post_banner`, `post_summary`, `post_content`, `post_views`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test Admin', 'testadmin@gmail.com', 'This is the new title for the first post', 'this-is-the-new-title-for-the-first-post', '20220606094702blog-post-thumb-8.jpg', '20220606094702blog-post-banner.jpg', 'Material Design Iconic Font is a full suite of official material design icons', '<p>Material Design Iconic Font is a full suite of official material design icons EDITED EDITED EDITED</p>\r\n\r\n<pre>\r\n<code class=\"language-php\">  public function index()\r\n    {\r\n        $settings = Setting::latest()-&gt;first();\r\n        return view(\'dashboard.admin.settings.index\', compact(\'settings\'));\r\n    }\r\n\r\n    public function edit()\r\n    {\r\n        $settings = Setting::latest()-&gt;first();\r\n        return view(\'dashboard.admin.settings.edit\', compact(\'settings\'));\r\n    }</code></pre>\r\n\r\n<p>&nbsp;</p>', 0, 1, '2022-05-27 04:00:45', '2022-06-07 04:54:15'),
(2, 1, 1, 'Test Admin', 'testadmin@gmail.com', 'What is programming', 'what-is-programming', '20220606082219blog-post-thumb-4.jpg', '20220606082219blog-post-banner.jpg', 'When you create a program for a computer, you give it a set of instructions, which it will run one at a time in order, precisely as given. If you told a computer to jump off a cliff, it would!', '<p>When you create a program for a computer, you give it a set of instructions, which it will run one at a time in order, precisely as given. If you told a computer to jump off a cliff, it would!</p>\r\n\r\n<p>1. turn and face the cliff 2. walk towards the cliff 3. stop at the edge of the cliff 4. jump off the cliff</p>\r\n\r\n<pre>\r\n<code class=\"language-javascript\">$(document).ready(function() {\r\n            //-initialize the javascript\r\n            App.init();\r\n            App.dashboard();\r\n\r\n        });</code></pre>\r\n\r\n<p>To stop computers from constantly falling off cliffs, they can also make choices about what to do next:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If I won&#39;t survive the fall, don&#39;t jump off the cliff</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Computers never get bored and are really good at doing the same thing over and over again. Instruction 2 above might look in more detail like this:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;2a. left foot forward 2b. right foot forward 2c. go back to 2a</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>These three concepts are the basic logical structures in computer programming:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>&nbsp;\r\n	<ol>\r\n		<li><strong>Sequence</strong>: running instructions in order</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>&nbsp;\r\n	<ol>\r\n		<li><strong>Selection</strong>: making choices</li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>&nbsp;\r\n	<ol>\r\n		<li><strong>Repetition</strong>: doing the same thing more than once, also called <em>iteration</em></li>\r\n	</ol>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Add to these concepts the ability to deal with inputs and outputs and to store data, and you have the tools to solve the majority of all computing problems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>Programming languages</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Unfortunately, computers don&rsquo;t understand languages like English or Spanish, so we have to use a <strong>programming language</strong> they understand to give them instructions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>There are many different programming languages, all of which have their own merits, and certain languages are better suited to particular types of tasks, but there is no one language that is the &lsquo;best&rsquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this course, you will be programming using a language called Python. Python is one of a group of languages called &ldquo;general-purpose programming languages&rdquo;, which can be used to solve a wide variety of problems. Other popular languages in this category are C, Ruby, Java and BASIC.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>This is a small Python program that asks the user to enter their name and says &ldquo;Hi&rdquo; to them:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>print</strong>(&quot;Hello and welcome.&quot;) name <strong>=</strong> input(&quot;Whats your name?&quot;) <strong>if</strong> name <strong>==</strong> &quot;Martin&quot;: <strong>print</strong>(&quot;Thats my name too!&quot;) <strong>print</strong>(&quot;Hi &quot; <strong>+</strong> name)</p>\r\n\r\n<p>You don&rsquo;t need to be a computer programmer to be able to read this code. It contains English words and it is readable (if not perhaps understandable). However, by the end of this course you will understand this code, what it does, and the concepts it uses.</p>\r\n\r\n<p>Programs are often referred to as <strong>code</strong> and hence programming is also known as <strong>coding</strong>.</p>', 0, 1, '2022-05-27 13:46:45', '2022-06-10 05:33:21'),
(4, 1, 1, 'Test Admin', 'testadmin@gmail.com', 'This is our fourth Post - Original', 'this-is-our-fourth-post-original', '20220528124202blog-post-thumb-1.jpg', '20220528124202blog-post-banner.jpg', 'This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original', '<p>This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original This is our fourth Post - Original</p>', 0, 1, '2022-05-28 09:42:02', '2022-06-10 05:38:20'),
(5, 1, 1, 'Test Admin', 'testadmin@gmail.com', 'Laravel 8 CRUD Application Tutorial for Beginners', 'laravel-8-crud-application-tutorial-for-beginners', '20220610083732laravek-8-crud.png', '20220610083733laravek-8-crud.png', 'In this tutorial, i would like to show you laravel 8 crud operation example. we will implement a laravel 8 crud application for beginners. i will give you simple example of how to create crud in laravel 8. you will learn crud operation in laravel 8.', '<p>In this tutorial, i would like to show you laravel 8 crud operation example. we will implement a laravel 8 crud application for beginners. i will give you simple example of how to create crud in laravel 8. you will learn crud operation in laravel 8.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>So, let&#39;s follow few step to create example of laravel 8 crud application tutorial.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Laravel 8 is just released by yesterday, Laravel 8 gives several new features and LTS support. So if you are new to laravel then this tutorial will help you create insert update delete application in laravel 8.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>You just need to follow few step and you will get basic crud stuff using controller, model, route, bootstrap 4 and blade..</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this tutorial, you will learn very basic crud operation with laravel new version 6. I am going to show you step by step from scratch so, i will better to understand if you are new in laravel.</p>\r\n\r\n<pre>\r\n<code class=\"language-php\">&lt;?php\r\n  \r\nuse Illuminate\\Database\\Migrations\\Migration;\r\nuse Illuminate\\Database\\Schema\\Blueprint;\r\nuse Illuminate\\Support\\Facades\\Schema;\r\n  \r\nclass CreateProductsTable extends Migration\r\n{\r\n    /**\r\n     * Run the migrations.\r\n     *\r\n     * @return void\r\n     */\r\n    public function up()\r\n    {\r\n        Schema::create(\'products\', function (Blueprint $table) {\r\n            $table-&gt;id();\r\n            $table-&gt;string(\'name\');\r\n            $table-&gt;text(\'detail\');\r\n            $table-&gt;timestamps();\r\n        });\r\n    }\r\n  \r\n    /**\r\n     * Reverse the migrations.\r\n     *\r\n     * @return void\r\n     */\r\n    public function down()\r\n    {\r\n        Schema::dropIfExists(\'products\');\r\n    }\r\n}</code></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 0, 1, '2022-06-10 05:37:34', '2022-06-10 05:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->inactive,1->active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stackoverflow_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `blog_author`, `profile_image`, `author_bio`, `twitter_link`, `github_link`, `stackoverflow_link`, `linkedin_link`, `created_at`, `updated_at`) VALUES
(1, 'Software Developer', '20220606080542freecodecamp.png', 'This is my profile', 'twitter.com', 'github.com', NULL, NULL, '2022-06-04 06:01:57', '2022-06-10 05:27:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Simon', 'simonnabuko@gmail.com', NULL, 1, NULL, '$2y$10$k.6OqCw4Ks/J42gHTmXrReGQXnkVUQLram.1Resq5s4hh/aLUOuPa', NULL, '2022-06-17 04:13:25', '2022-06-17 05:03:16'),
(2, 'New User', 'newuser@gmail.com', NULL, 0, NULL, '$2y$10$d/E3YSjmfXqRCVc6gXtrJ.KMUREtT7ONgAIMwij0/ZcibmTKnQtUq', NULL, '2022-06-17 05:05:03', '2022-06-17 05:09:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
