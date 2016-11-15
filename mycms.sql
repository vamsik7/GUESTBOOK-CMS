-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 04:00 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(5) NOT NULL,
  `cat_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Asia Newz'),
(3, 'Sports'),
(4, 'Showbiz'),
(9, 'Menz');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `comment_email` varchar(100) NOT NULL,
  `comment_text` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `comment_name`, `comment_email`, `comment_text`, `status`) VALUES
(18, 10, 'VAMSI krishna boyena', '', 'What''s going on ??', 'approve'),
(19, 9, 'VAMSI krishna boyena', '', '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"', 'approve'),
(20, 9, 'VAMSI krishna boyena', '', 'style="float:right;"', 'approve'),
(21, 27, 'adfa', '', '', 'approve'),
(22, 27, 'adfa', '', '', 'unapprove'),
(23, 27, 'VAMSI krishna boyena', '', '', 'unapprove'),
(24, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(25, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(26, 27, 'krishna', '', '', 'approve'),
(27, 27, 'krishna', '', '', 'approve'),
(28, 27, 'krishna', '', '', 'approve'),
(29, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(30, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(31, 27, 'krishna', '', '', 'approve'),
(32, 27, 'krishna', '', '', 'approve'),
(33, 27, 'krishna', '', '', 'approve'),
(34, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(35, 27, 'VAMSI krishna boyena', '', '', 'approve'),
(36, 26, 'VAMSI krishna boyena', '', '', 'approve'),
(37, 26, 'sadf', '', '', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(111) NOT NULL,
  `post_date` varchar(111) NOT NULL,
  `post_author` varchar(111) NOT NULL,
  `post_keywords` text NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `post_title`, `post_date`, `post_author`, `post_keywords`, `post_image`, `post_content`) VALUES
(10, 2, 'Second Post', '09-14-16', 'vamsi', 'second one', 'header1.jpg', '<p>No matter what you are trying to do, that can never happen. No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.</p>\r\n<p>&nbsp;</p>\r\n<p>No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.</p>\r\n<p>&nbsp;</p>\r\n<p>No matter what you are trying to do, that can never happen. No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.</p>\r\n<p>&nbsp;</p>\r\n<p>No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.No matter what you are trying to do, that can never happen.</p>'),
(19, 2, 'first post', '09-15-16', 'adfa', 'one', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>'),
(20, 2, 'first post', '09-15-16', 'adfa', 'one', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>'),
(21, 2, 'first post', '09-15-16', 'vamsi', 'first one', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>'),
(22, 2, 'afda', '09-15-16', 'adfa', 'first one', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>'),
(26, 3, 'asdafa', '09-15-16', 'adfaf', 'adfaf', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>'),
(27, 4, 'first post', '09-15-16', 'vamsi', 'asdfdsaf', 'header1.jpg', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: ''Open Sans'', Arial, sans-serif; font-size: 14px;">"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>\r\n<p>&nbsp;</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
