-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 08:11 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` text NOT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `dt_created`) VALUES
(1, 'Python', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small and large-scale projects.[28]\r\n\r\nPython is dynamically typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly, procedural), object-oriented, and functional programming. Python is often described as a \"batteries included\" language due to its comprehensive standard library.', '2020-06-20 13:54:07'),
(2, 'JavaScript', 'JavaScript often abbreviated as JS, is a programming language that conforms to the ECMAScript specification. JavaScript is high-level, often just-in-time compiled, and multi-paradigm. It has curly-bracket syntax, dynamic typing, prototype-based object-orientation, and first-class functions.\r\n\r\nAlongside HTML and CSS, JavaScript is one of the core technologies of the World Wide Web. JavaScript enables interactive web pages and is an essential part of web applications. The vast majority of websites use it for client-side page behavior, and all major web browsers have a dedicated JavaScript engine to execute it', '2020-06-20 13:55:15'),
(3, 'Java', 'Java is a general-purpose programming language that is class-based, object-oriented, and designed to have as few implementation dependencies as possible. It is intended to let application developers write once, run anywhere (WORA),meaning that compiled Java code can run on all platforms that support Java without the need for recompilation.Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. The syntax of Java is similar to C and C++, but it has fewer low-level facilities than either of them. As of 2019, Java was one of the most popular programming languages in use according to GitHub, particularly for client-server web applications, with a reported 9 million developers.', '2020-06-20 13:57:21'),
(4, 'C Language', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instructions. It has found lasting use in applications previously coded in assembly language. Such applications include operating systems and various application software for computers architectures that range from supercomputers to PLCs and embedded systems.\r\n\r\nA successor to the programming language B, C was originally developed at Bell Labs by Dennis Ritchie between 1972 and 1973 to construct utilities running on Unix. It was applied to re-implementing the kernel of the Unix operating system. During the 1980s, C gradually gained popularity.', '2020-06-20 13:58:49'),
(5, 'C++', 'C++ is a middle-level programming language developed by Bjarne Stroustrup starting in 1979 at Bell Labs. C++ runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This C++ tutorial adopts a simple and practical approach to describe the concepts of C++ for beginners to advanded software engineers.', '2020-06-20 14:00:12'),
(6, 'Ethical Hacking', 'One of the first instances of an ethical hack being used was a \"security evaluation\" conducted by the United States Air Force, in which the Multics operating systems was tested for \"potential use as a two-level system.\" The evaluation determined that while Multics was \"significantly better than other conventional systems,\" it also had \"... vulnerabilities in hardware security, software security and procedural security\" that could be uncovered with \"a relatively low level of effort.\"[7] The authors performed their tests under a guideline of realism, so their results would accurately represent the kinds of access an intruder could potentially achieve. They performed tests involving simple information-gathering exercises, as well as outright attacks upon the system that might damage its integrity; both results were of interest to the target audience. There are several other now unclassified reports describing ethical hacking activities within the US military.', '2020-06-20 14:01:45'),
(7, 'Shell Script', 'A shell script is a computer program designed to be run by the Unix shell, a command-line interpreter.[1] The various dialects of shell scripts are considered to be scripting languages. Typical operations performed by shell scripts include file manipulation, program execution, and printing text. A script which sets up the environment, runs the program, and does any necessary cleanup, logging, etc. is called a wrapper.\r\n\r\nThe term is also used more generally to mean the automated mode of running an operating system shell; in specific operating systems they are called other things such as batch files (MSDos-Win95 stream, OS/2), command procedures (VMS), and shell scripts (Windows NT stream and third-party derivatives like 4NT—article is at cmd.exe), and mainframe operating systems are associated with a number of terms', '2020-06-20 14:02:40'),
(8, 'C#', 'C# (pronounced see sharp, like the musical note C♯, but written with the number sign)[b] is a general-purpose, multi-paradigm programming language encompassing strong typing, lexically scoped, imperative, declarative, functional, generic, object-oriented (class-based), and component-oriented programming disciplines.[17] It was developed around 2000 by Microsoft as part of its .NET initiative and later approved as an international standard by Ecma (ECMA-334) in 2002 and ISO (ISO/IEC 23270) in 2003. Mono is the name of the free and open-source project to develop a compiler and runtime for the language. C# is one of the programming languages designed for the Common Language Infrastructure (CLI).\r\n\r\nC# was designed by Anders Hejlsberg, and its development team is currently led by Mads Torgersen.', '2020-06-20 14:04:39'),
(9, 'Php', 'PHP is a popular general-purpose scripting language that is especially suited to web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994;the PHP reference implementation is now produced by The PHP Group.PHP originally stood for Personal Home Page, but it now stands for the recursive initialism PHP: Hypertext Preprocessor.\r\n\r\nPHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of a HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications and robotic drone control.Arbitrary PHP code can also be interpreted and executed via command-line interface (CLI)', '2020-06-20 14:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `reply_id` int(8) NOT NULL,
  `reply_desc` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `reply_by` int(8) NOT NULL,
  `reply_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `reply_desc`, `thread_id`, `reply_by`, `reply_time`) VALUES
(1, 'Follow My Steps', 1, 2, '2020-06-23 11:38:16'),
(2, 'hhhhh\r\n', 3, 1, '2020-06-24 10:10:04'),
(3, 'jjjjjj', 3, 1, '2020-06-24 10:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `thread_id` int(8) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(8) NOT NULL,
  `user_id` int(8) NOT NULL,
  `thread_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `user_id`, `thread_time`) VALUES
(1, 'Windows Error', 'My windows cannot start', 1, 1, '2020-06-23 11:36:18'),
(2, 'python problem', 'can not start python', 1, 2, '2020-06-23 11:39:01'),
(3, '&lt;script&gt;alert(\"\");&lt;/script&gt;', '&lt;script&gt;alert(\"\");&lt;/script&gt;', 1, 2, '2020-06-23 13:42:15'),
(4, 'i m facing a js error', 'js error', 1, 1, '2020-06-24 10:06:10'),
(5, 'i m facing a js error', 'js error', 1, 1, '2020-06-24 10:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `users066247`
--

CREATE TABLE `users066247` (
  `srno` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users066247`
--

INSERT INTO `users066247` (`srno`, `name`, `username`, `email`, `password`, `dt`) VALUES
(1, 'Jay Vadhaiya', 'mr.jv_2407', 'jayvadhaiya2002@gmail.com', '$2y$10$77QIZgW2kkR7bNEi/jHZROsAKzEkOUhMNwEVOzhrIPJ1S.1na1oc2', '2020-06-23 11:26:38'),
(2, 'Test', 'test', 'test@test.com', '$2y$10$QI.XCT5PUFEI21qCa3Leru3DPlJem2X44NK.tJIhNjpcJVB2T5bsG', '2020-06-23 11:37:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);
ALTER TABLE `threads` ADD FULLTEXT KEY `thread_title` (`thread_title`,`thread_desc`);

--
-- Indexes for table `users066247`
--
ALTER TABLE `users066247`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users066247`
--
ALTER TABLE `users066247`
  MODIFY `srno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
