-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2022 at 10:59 AM
-- Server version: 5.6.38
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avinash1_holi12`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `A` text NOT NULL,
  `B` text NOT NULL,
  `C` text NOT NULL,
  `D` text NOT NULL,
  `ans` varchar(1) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `A`, `B`, `C`, `D`, `ans`, `subject`) VALUES
(20, 'Which of the following is part of the four main types for eâ€commerce?', 'B2B', ' B2C', 'C2B', 'All of the above', 'D', 'E-Commerce (2019 Even)'),
(21, 'The dimension of e-commerce that enables commerce across national boundaries', 'interactivity', 'global reach', 'richness', 'ubiquity', 'B', 'E-Commerce (2019 Even)'),
(22, 'Which of the following is not considered to be one of the three phases of e-commerce?', 'Innovation', 'Consolidation', 'Preservation', 'Reinvention', 'C', 'E-Commerce (2019 Even)'),
(23, 'Which segment do eBay, Amazon.com belong?', 'B2Bs', 'B2Cs', 'C2Bs', 'C2Cs', 'B', 'E-Commerce (2019 Even)'),
(24, 'Which segment is eBay an example?', 'B2B', ' C2B', 'C2C', 'None of Above', 'D', 'E-Commerce (2019 Even)'),
(25, 'in which website global easy buy is facilitated ?', 'eBay.com', 'Amazon.com', 'Yepme.com', 'None of Above', 'A', 'E-Commerce (2019 Even)'),
(26, 'Which products are people most likely to be comfortable buying on the Internet?', 'Books', 'PCs', 'CDs', 'All of the above', 'D', 'E-Commerce (2019 Even)'),
(27, 'Digital products are best suited for B2C e-commerce because they ______', 'Are Commodity like product', 'can be mass coustomized', 'can be delivered at the time of purchase', 'All of the above', 'D', 'E-Commerce (2019 Even)'),
(28, 'Which of the following is an example of a portal?', 'Amazon', ' eBay', 'Yahoo', 'Facebook', 'C', 'E-Commerce (2019 Even)'),
(29, ' The best product to sell in B2C e-commerce are-', 'Small Products', 'Digital Products', ' Specially Products', 'Fresh Products', 'B', 'E-Commerce (2019 Even)'),
(30, 'Compared to Internet users, the number of cell phone subscribers is _________.', 'about the same', 'slightly fewer', 'much fewer', 'much larger', 'D', 'E-Commerce (2019 Even)'),
(31, 'What is the percentage of customers who visit a Web site and actually buy something called?', 'Affiliate programs', 'Clickâ€through', 'Spam', 'Conversion rate', 'D', 'E-Commerce (2019 Even)'),
(32, 'Which of the following is not a horizontal portal?', 'AOL', 'Yahoo', 'Sailnet', 'MSN/Windows Live', 'C', 'E-Commerce (2019 Even)'),
(33, 'What are materials used in production in a manufacturing company or are placed on the shelffor sale in a retail environment?', 'direct materials', 'indirect materials', 'edi', 'None of Above', 'A', 'E-Commerce (2019 Even)'),
(34, 'A strategy designed to compete in all markets around the globe is called a _________ strategy.', 'scope', 'differentiation', 'cost', 'focus', 'A', 'E-Commerce (2019 Even)'),
(35, 'The underlying computing equipment that the system uses to achieve its e-commerce functionality is called a ________.', 'hardware platform', 'content platform', 'transaction platform', 'scalability platform', 'A', 'E-Commerce (2019 Even)'),
(36, 'Amazon.com is wellâ€known for which eâ€commerce marketing technique?', 'Banner ads', 'Popâ€up ads', 'Affiliate programs', 'Viral marketing', 'C', 'E-Commerce (2019 Even)'),
(37, 'Redundant navigation refers to _________.', 'load quickly', 'product offerings', 'fool-proof navigation', 'alternative navigation to the same content', 'D', 'E-Commerce (2019 Even)'),
(38, 'Which form of eâ€marketplace brings together buyers and sellers from multiple industries, often for MRO materials?', 'horizontal', 'Vertical', 'Integrated', 'Inclined', 'A', 'E-Commerce (2019 Even)'),
(39, '____ is not a major type of electronic commerce.', 'Consumer to Business', 'Business to Consumer', 'Business to Business', 'Consumer to Consumer', 'A', 'E-Commerce (2019 Even)'),
(40, 'How many types of video compression ?', '2', '3', '4', '5', 'A', 'Computer Graphics (2019 ODD)'),
(41, 'Which image files are lossy format ?', 'GIF', 'MPEG', 'JPEG', 'PNG', 'C', 'Computer Graphics (2019 ODD)'),
(42, 'How many step process for creating a 3D animation', '1', '2', '3', '4', 'C', 'Computer Graphics (2019 ODD)'),
(43, 'JPEG stands for ', 'Joint Photo Expert Gross', 'Joint Photographic Experts Gross', 'Joint Photographic Experts Group', 'Joint Photographic Expression Group', 'C', 'Computer Graphics (2019 ODD)'),
(44, 'Which Compression Provide Some loss of quality ?', 'Lossy Less', 'Lossy', 'Cel Based', 'Object Based', 'B', 'Computer Graphics (2019 ODD)'),
(45, 'In Brasenhams Circle Generation algorithm, if(x, y) is the current Picel position then y value of the next pixel position is', 'Y or Y + 1', 'Y alone', 'Y+1 or Y-1', 'Y or Y-1', 'C', 'Computer Graphics (2019 ODD)'),
(46, 'Bresenhams Algorithm seeks to select the optimum raster location that represent a ', 'Straight Line', 'Curve Line', 'Poligon', 'None of these', 'A', 'Computer Graphics (2019 ODD)'),
(47, 'the DDA algorithm is a faster method for calculating pixel positions than direct use of line equation using y = mx + c because', 'It eliminates floating point addition', 'it eliminates floating point multiplication', 'it eliminates rounding operation', 'None of these', 'B', 'Computer Graphics (2019 ODD)'),
(48, '_______ acts as anode in CRT', 'The Phosphorous coating', 'the glass panel', 'the deflectors', 'None of these', 'A', 'Computer Graphics (2019 ODD)'),
(49, 'Which device is used to grasp a virtual object ?', 'Space Ball', 'Data glove', 'Digitizer', 'Touch Panels', 'B', 'Computer Graphics (2019 ODD)'),
(50, 'The Maximum Numbers of dots that can be displayed without overlap on CRT is refered to as ', 'Refresh rate ', 'interlacing', 'Screen resolution', 'None of these', 'C', 'Computer Graphics (2019 ODD)'),
(51, 'In circle drawing algorithm we use - ', '4 - Symmetry', '2 -  Symmetry', '8 -  Symmetry', 'No -  Symmetry', 'C', 'Computer Graphics (2019 ODD)'),
(52, 'Clipping algorithms are', 'Two or three dimensional', 'Two dimensional', 'Three dimensional', 'None of these', 'A', 'Computer Graphics (2019 ODD)'),
(53, 'When projection lines are prependicular to the view plane then such type of projection is called', 'Parallel', 'Prespective', 'Orthgraphic', 'Oblique', 'C', 'Computer Graphics (2019 ODD)'),
(54, 'The viewing transformation is formed by -', 'Translations', 'Translations and scaling', 'Translations, scaling and reflection', 'Translations, scaling and rotation', 'D', 'Computer Graphics (2019 ODD)'),
(55, 'Minimum memory required for frame buffer when resolution is 800 x 600 and bit/ pixel is 8 ?', '512 kb', '1 Mb', '2 Mb', '256 kb', 'A', 'Computer Graphics (2019 ODD)'),
(56, 'which is not image file format ?', 'bmp', 'jpg', 'tiff', 'Both (a) & (b)', 'D', 'Computer Graphics (2019 ODD)'),
(57, 'Slope of the line Joining the points (1, 2) and (3, 4) is -', '0', '1', '2', '3', 'B', 'Computer Graphics (2019 ODD)'),
(58, 'How many matrices are required to rotate an object about points (x, y) ?', '2', '3', '4', '5', 'B', 'Computer Graphics (2019 ODD)'),
(59, 'if direction of rotation is Z-axis, then direction of position of positive rotation is - ', 'y to x', 'z to x', 'x to y', 'y to z', 'B', 'Computer Graphics (2019 ODD)'),
(60, 'Which among these is a service business?', 'Textile Business', 'Counselling Business', 'Leather Business', 'Wood Business', 'B', 'Management 2019(EVEN)'),
(61, 'Which among these is not a manufacturing business?', 'Plastic container making', 'Small phone making', 'Hair dressing business', 'Candy making business', 'C', 'Management 2019(EVEN)'),
(62, 'Economic sector is part of ', 'Industry', 'Trade', 'Transfer of goods', 'Exchange of goods', 'B', 'Management 2019(EVEN)'),
(63, 'Which is an example of Globalization?', 'Transportation', 'Media & Entertainment', 'law', 'All of  the Above', 'D', 'Management 2019(EVEN)'),
(64, 'Process industry has primary production process as', 'Continuous', 'lndividual unit', 'Parts of materials', 'Bills of materials', 'A', 'Management 2019(EVEN)'),
(65, 'Concept of scientific management is given by', 'Henry Fayol', 'F.W Taylor', 'Mc. Gregar', 'Herzberg', 'B', 'Management 2019(EVEN)'),
(66, '14(fourteen) principles of management are given by', 'Maslow', 'F.W Taylor', 'David Recardo', 'Henry Fayol', 'D', 'Management 2019(EVEN)'),
(67, 'What is the maximum number required in sole-proprietorship?', '2', '1', '7', '50', 'B', 'Management 2019(EVEN)'),
(68, 'Partnership firm must be registered under ', 'Partnership-Act', 'Companies Act', 'Both', 'None of Above', 'A', 'Management 2019(EVEN)'),
(69, 'Sole proprietorship is best when', 'No capital is invested', 'Few capital is invested', 'Too much capital is invested', 'Work area is expanded', 'B', 'Management 2019(EVEN)'),
(70, 'Everyone in the organisation should have', 'One boss', 'Two boss', 'Three boss', 'Four boss', 'A', 'Management 2019(EVEN)'),
(71, 'What is ensured by functional organisation?', 'Greater efficiency', 'Standardisation of operations', 'Division of labour ', 'All of the above', 'D', 'Management 2019(EVEN)'),
(72, 'Which technique of Project management is developed in japan?', 'C.P.M', 'P.E.R.T', 'Kaizen', 'None of Above', 'C', 'Management 2019(EVEN)'),
(73, 'Which among these is not a source of recruitment?', 'Advertisement', 'Employment exchange', 'Consultancy', 'Social media', 'C', 'Management 2019(EVEN)'),
(74, 'High Morale leads to ', 'off` job satisfaction', 'On job satisfaction', 'Personal Satisfaction ', 'All the above', 'D', 'Management 2019(EVEN)'),
(75, 'Who gave the Motivation theory of Hygine?', 'Maslow', 'Herzberg', 'Mc. Gregar', 'Victor Vroom', 'B', 'Management 2019(EVEN)'),
(76, 'Which among these is a Financial statement? ', 'Journal', 'Balance sheet', 'Trial balance', 'Voucher', 'B', 'Management 2019(EVEN)'),
(77, 'Which author developed theory X Y of Motivation?', 'Mc. Gregar', 'Victor Vroom', 'Maslow', 'Herzberg', 'A', 'Management 2019(EVEN)'),
(78, 'Apprenticeship is ', 'Off job training ', 'On job training', 'Both', 'None of Above', 'B', 'Management 2019(EVEN)'),
(79, 'Workmens Compensation Act was exacted', '1936', '1947', '1923', '1948', 'C', 'Management 2019(EVEN)'),
(80, 'Vistial Basic is a tool that allows you to develop applicai ion in', 'Real Time', 'Graphical User Interface', 'Character User interface', 'None of Above', 'B', 'Visual Basic (2019 ODD)'),
(81, '____ is used for finding out about objects, properties and methods.', 'Form Lay-out window', 'Code Editor window', 'Object Browser', 'None of Above', 'C', 'Visual Basic (2019 ODD)'),
(82, 'ln visual basic a variable name cannot be more than characters', '255', '300', '355', '400', 'A', 'Visual Basic (2019 ODD)'),
(83, 'In visual basic is the extension to represent project tile.', '.frm', '.vbp', '.cls', '.vb', 'B', 'Visual Basic (2019 ODD)'),
(84, 'The default property of a text for control is ___', 'Text', 'Enable', 'Multiline', 'Password char', 'A', 'Visual Basic (2019 ODD)'),
(85, '_______ is a collection of files.', 'Class', 'Group', 'Project', 'All of Above', 'C', 'Visual Basic (2019 ODD)'),
(86, 'The method. which loads the form into memory and displays it on screcn is ', 'Load', 'Show', 'Display', 'All of Above', 'B', 'Visual Basic (2019 ODD)'),
(87, '_____ is the process of finding and removing errors.', 'Checking', 'Compiling ', 'Debugging', 'Quick watch', 'C', 'Visual Basic (2019 ODD)'),
(88, 'A _____ variable is one that is declared inside a procedure.', 'Global', 'Local', 'External', 'None of Above', 'B', 'Visual Basic (2019 ODD)'),
(89, 'MDI Stands for', 'Multiple Document Interface', 'Multiple Design Interface', 'Manipulated Document Interface', 'Menu Design interface', 'A', 'Visual Basic (2019 ODD)'),
(90, 'The default data type for VB is', 'integer', 'Decimal ', 'Variant ', 'String', 'C', 'Visual Basic (2019 ODD)'),
(91, 'Frame control acts as a ______', 'Event', 'Method', 'Class', 'Container', 'D', 'Visual Basic (2019 ODD)'),
(92, 'The .................. is used for both the input and output.', 'Label', 'Text Box', 'Combo Box', 'Command Button', 'B', 'Visual Basic (2019 ODD)'),
(93, 'ln visual basic the declaration of variables is done by keyword,', 'Int', 'Dim', 'Static', 'Declare', 'B', 'Visual Basic (2019 ODD)'),
(94, '_________ is field in a table which contains unique data.', 'Foregin', 'Primary', 'Both', 'None of Above', 'B', 'Visual Basic (2019 ODD)'),
(95, 'Which is not a main component of the visual studio IDE ?', 'Solution Explorer', 'Tool Box', 'Start Menu ', 'Designer Window', 'C', 'Visual Basic (2019 ODD)'),
(96, 'Which property determines whether a control is displayed to the user ?', 'Hide', 'Show', 'Visible', 'Enabled', 'D', 'Visual Basic (2019 ODD)'),
(97, 'In _______ window we write code.', 'Immediate Window', 'Locals Window', 'Code Editor Window', 'None of Above', 'C', 'Visual Basic (2019 ODD)'),
(98, 'Control i.s used to provide an identifiable grouping of other controls ?', 'Frame', 'Label', 'List Box', 'Command Button', 'A', 'Visual Basic (2019 ODD)'),
(99, '........... vcontrol is used to display text but user cannot change it directly.', 'Text Box', 'Lable Box', 'List Box', 'Command Button', 'B', 'Visual Basic (2019 ODD)'),
(100, '........................ is used for finding out about objects, properties and methods', 'Form Layout Window', 'Code Editor Window', 'Object Browser', 'None of Above', 'C', 'Visual Basic (2019 Even)'),
(101, '_____ is the process of finding and removing errors.', 'Checking', 'Compiling ', 'Debugging', 'Quick Watch', 'C', 'Visual Basic (2019 Even)'),
(102, 'A ................... variable is one that is declared inside a procedure.', 'Global', 'Local', 'External', 'None of Above', 'B', 'Visual Basic (2019 Even)'),
(103, 'The ............... a tool used for both the input and output purpose.', 'Label', 'Text Box', 'Combo Box', 'Command Button', 'B', 'Visual Basic (2019 Even)'),
(104, 'Which property determines whether a control is displayed to the user?', 'Hide', 'Show', 'Visible', 'Enabled', 'C', 'Visual Basic (2019 Even)'),
(105, 'We can preserve the value of a local variable by making the', 'Private', 'Public', 'Static', 'Implicit', 'C', 'Visual Basic (2019 Even)'),
(106, '................... arrays can be rcsized at anytime.', 'Dynamic', 'Fixed', 'multidimensional', 'Control Array', 'A', 'Visual Basic (2019 Even)'),
(107, 'HTML is a', 'High Level Programming Language ', 'Markup Language', 'Scripting Language', 'Server Software', 'B', 'Visual Basic (2019 Even)'),
(108, 'CSS stands', 'Cascade Style Sheets', 'Common Style Sheets', 'Catalouge Style Sheds', 'None of Above', 'A', 'Visual Basic (2019 Even)'),
(109, 'IIS is a', 'Markup Language ', 'Web Server', 'Scripting Language', 'Operating System', 'B', 'Visual Basic (2019 Even)'),
(110, 'By default, the textbox control can hold text as ', 'Multiple Lines', 'Single Line', 'Password Character', 'None of Above', 'B', 'Visual Basic (2019 Even)'),
(111, 'contains shortcuts to frequently performed actions.', 'Context menu', 'Menu Bar', 'Tool bar', 'Tool box', 'A', 'Visual Basic (2019 Even)'),
(112, 'RTF stands for', 'Rich Text Format', 'Rich Title Format', 'Row Text Format', 'Row Text Function', 'A', 'Visual Basic (2019 Even)'),
(113, '.............is an action reeoginized by a form or the control.', 'Property', 'Event', 'Method', 'Procedure', 'B', 'Visual Basic (2019 Even)'),
(114, '............... is one of the main bui[ding blocks in a VB application.', 'Event', 'Form', 'Procedure', 'Method', 'B', 'Visual Basic (2019 Even)'),
(115, 'ASP stands for ................ ', 'Active Single Page', 'Activated Service Procedure', 'Active Server Page ', 'None of Above', 'C', 'Visual Basic (2019 Even)'),
(116, 'DAO is a shorthand notation for', 'Date access object ', 'Data access object', 'Direct access object', 'None of Above', 'B', 'Visual Basic (2019 Even)'),
(117, 'Which of the following is not a feature or Object Oriented Programming ?', 'Inheritance', 'Polymorphism', 'Abstraction', 'Platform Independent', 'D', 'Visual Basic (2019 Even)'),
(118, 'Mouse down event takes place when you', 'Click the left mouse', 'Press the mouse button', 'Mouse is moved over the control', 'All of the above', 'B', 'Visual Basic (2019 Even)'),
(119, '............... is the extension of a class module.', '.cls', '.cla', '.clss', 'None of Above', 'A', 'Visual Basic (2019 Even)'),
(120, 'Which dimension of e-commerce enables commerce beyond the boundaries of the country?', 'Richness', 'Interactivity', 'Ubiquity', 'Global Reach', 'D', 'E-Commerce (Group-1)'),
(121, '____ is not a major type of electronic commerce.', 'Consumer to Business', 'Business to Consumer', 'Business to Business', 'Consumer to Consumer', 'A', 'E-Commerce (Group-1)'),
(122, 'Which is not one of the three phases of electronic commerce?', 'Reinvention', 'Preservation', 'Consolidation', 'Innovation', 'B', 'E-Commerce (Group-1)'),
(123, 'Which of the following describes the definition of electronic commerce?', 'Doing business', 'Sale and purchase of goods', 'Doing business electronically', 'All of the above mentioned', 'C', 'E-Commerce (Group-1)'),
(124, 'Which e-commerce model involves the sale of goods or services from businesses to the general public?', 'Business to Government', 'Business to Consumer', 'Business to Business', 'Consumer to Business', 'B', 'E-Commerce (Group-1)'),
(125, 'Which e-commerce transaction provides the benefits of eliminating the requirement of a middleman?', 'Business to Business', 'Business to Government', 'Consumer to Business', 'Business to Consumer', 'D', 'E-Commerce (Group-1)'),
(126, 'The idealistic market envisioned at the outset of electronic commerceâ€™s development is referred to as ____.', 'Bertrand market', 'Baxter market', 'Bailey market', 'Bergman market', 'A', 'E-Commerce (Group-1)'),
(127, '____ is an e-commerce model which focuses on consumers dealing with one another.', 'Business to Business', 'Consumer to Consumer', 'Consumer to Business', 'Business to Consumer', 'B', 'E-Commerce (Group-1)'),
(128, 'Which of the following was the primary source of financing during the early years of electronic commerce?', 'Venture capital funds', 'Bank loans', 'Initial public offerings', 'large retail firms', 'A', 'E-Commerce (Group-1)'),
(129, 'Which of the following is/are considered examples of the Consumer to consumer (C2C) model?', 'Amazon.com', 'e-bay', 'Rentalic.com', 'All of the above', 'D', 'E-Commerce (Group-1)'),
(130, 'Which of the following technology is not used to collect the information about you?', 'Anonymizers', 'Spyware', 'Gmail', 'Cookies', 'A', 'E-Commerce (Group-1)'),
(131, 'Which of the following is the set of planned activities that are designed to result in a profit in the marketplace?', 'Profit model', 'Business model', 'Business plan', 'Revenue model', 'B', 'E-Commerce (Group-1)'),
(132, 'Which of the following is not a key element of the business model.', 'Competitive advantage', 'Market strategy', 'Universal standards', 'Value Proposition', 'C', 'E-Commerce (Group-1)'),
(133, 'In which year WWW (World Wide Web) was introduced?', '1996', '1994', '1990', '1991', 'B', 'E-Commerce (Group-1)'),
(134, 'Which of the following is an early form of e-commerce?', 'EDI', 'SCM', 'Both of these', 'None of the above', 'A', 'E-Commerce (Group-1)'),
(135, 'The reason why digital products are best suited for Business Consumer e-commerce is that they:', 'Can be mass-customized and personalized', 'Are commodities like products', 'Can be delivered at the time of purchase', 'All of the above', 'D', 'E-Commerce (Group-1)'),
(136, '____ is an example of an Internet portal.', 'Yahoo', 'e-bay', 'Amazon', 'Facebook', 'A', 'E-Commerce (Group-1)'),
(137, 'Which of the following is categorised as a major Business-to-Consumer business model?', 'Service provider', 'Transaction broker', 'Industry consortium', 'Content provider', 'C', 'E-Commerce (Group-1)'),
(138, 'Which of the following business model consists of an independently owned vertical digital marketplace for direct inputs?', 'Private industrial network', 'E-distributor', 'E-procurement', 'E-exchange', 'D', 'E-Commerce (Group-1)'),
(140, '____ is referred to as the percentage of customers, by whom a Web site is visited and something is purchased by them.', 'Conversion rate', 'Spam', 'affiliate programs', 'Click-through', 'A', 'E-Commerce (Group-1)'),
(141, '____ is not a horizontal portal.', 'Yahoo', 'Sailnet', 'MSN/Windows Live', 'AOL', 'B', 'E-Commerce (Group-1)'),
(142, 'A strategy that is designed by businesses to compete in all markets around the world is referred to as ____ strategy.', 'cost', 'differentiated', 'focus', 'scope', 'D', 'E-Commerce (Group-1)'),
(143, 'How can we initialize an array in C language?', 'int arr[2]=(10, 20)', 'int arr(2)={10, 20}', 'int arr[2] = {10, 20}', 'int arr(2) = (10, 20)', 'C', 'Data Structure'),
(144, 'Which one of the following is the size of int arr[9] assuming that int is of 4 bytes?', '9', '36', '35', 'none', 'B', 'Data Structure'),
(145, 'Which one of the following is the process of inserting an element in the stack?', 'Create', 'Push', 'Pop', 'none', 'B', 'Data Structure'),
(146, ' When the user tries to delete the element from the empty stack then the condition is said to be a ____', 'Underflow', 'Garbage collection', 'Overflow', 'None of the above', 'A', 'Data Structure'),
(147, 'If the size of the stack is 10 and we try to add the 11th element in the stack then the condition is known as___', 'Underflow', 'Garbage collection', 'Overflow', 'None of the above', 'C', 'Data Structure'),
(148, 'Which data structure is mainly used for implementing the recursive algorithm?', 'Queue', 'Stack', 'Binary tree', 'Linked list', 'B', 'Data Structure'),
(149, 'Which data structure is required to convert the infix to prefix notation?', 'Queue', 'Stack', 'Binary tree', 'Linked list', 'B', 'Data Structure'),
(150, 'Which one of the following is not the application of the stack data structure', 'String reversal', 'Recursion', 'Backtracking', 'Asynchronous data transfer', 'D', 'Data Structure'),
(151, 'Which of the following is not the correct statement for a stack data structure?', 'Arrays can be used to implement the stack', 'Stack follows FIFO', 'Elements are stored in a sequential manner', 'Top of the stack contains the last inserted element', 'B', 'Data Structure'),
(152, 'What is another name for the circular queue among the following options?', 'Square buffer', 'Rectangle buffer', 'Ring buffer', 'None of the above', 'C', 'Data Structure'),
(153, 'A list of elements in which enqueue operation takes place from one end, and dequeue operation takes place from one end is__', 'Binary tree', 'Stack', 'Queue', 'Linked list', 'C', 'Data Structure'),
(154, 'Which of the following principle does Queue use?', 'LIFO principle', 'FIFO principle', 'Linear tree', 'Ordered array', 'B', 'Data Structure'),
(155, 'The time complexity of enqueue operation in Queue is __', 'O(n)', 'O(1)', 'O(logn)', 'O(nlogn)', 'B', 'Data Structure'),
(156, 'The necessary condition to be checked before deletion from the Queue is__', 'Underflow', 'Rear value', 'Overflow', 'Front value', 'A', 'Data Structure'),
(157, 'Which data structure is the best for implementing a priority queue?', 'Stack', 'Linked list', 'Array', 'Heap', 'D', 'Data Structure'),
(158, 'Which of the following statement is not true regarding the priority queue?', 'Processes with different priority can be easily handled', 'Easy to implement', 'Deletion is easier', 'None of the above', 'C', 'Data Structure'),
(159, 'A linear data structure in which insertion and deletion operations can be performed from both the ends is___', 'Queue', 'Deque', 'Priority queue', 'Circular queue', 'B', 'Data Structure'),
(160, 'Which one of the following is the correct option to create a new node?', 'ptr= (node*)malloc(sizeof(node*))', 'ptr=(node)malloc(sizeof(node))', 'ptr=(node*)malloc(sizeof(node))', 'None of the above', 'C', 'Data Structure'),
(161, 'Which of the following statement is not true about the doubly linked list?', 'We can traverse in both the directions.', 'It requires extra space', 'Implementation of doubly linked list is easier than the singly linked list', 'It stores the addresses of the next and the previous node', 'C', 'Data Structure'),
(162, 'What is the maximum number of children that a node can have in a binary tree?', '2', '3', '1', '4', 'A', 'Data Structure'),
(163, 'Which of the following options is not true about the Binary Search tree?', 'The value of the left child should be less than the root node', 'The value of the right child should be greater than the root node.', 'The left and right sub trees should also be a binary search tree', 'None of the above', 'D', 'Data Structure'),
(164, 'Who invented C++?', 'Dennis Ritchie', 'Ken Thompson', 'Ken Thompson', 'Bjarne Stroustrup', 'D', 'C++ MCQ'),
(165, 'Which of the following is the correct syntax of including a user defined header files in C++?', '#include [userdefined]', '#include â€œuserdefinedâ€', '#include <userdefined.h>', '#include <userdefined>', 'B', 'C++ MCQ'),
(166, 'Which of the following user-defined header file extension used in c++?', 'hg', 'cpp', 'h', 'hf', 'C', 'C++ MCQ'),
(167, 'Which of the following is not a type of Constructor in C++?', 'Default constructor', 'Parameterized constructor', 'Copy constructor', 'Friend constructor', 'D', 'C++ MCQ'),
(168, 'Which of the following approach is used by C++?', 'Left-right', 'Right-left', 'Bottom-up', 'Top-down', 'C', 'C++ MCQ'),
(169, 'Which of the following is used to terminate the function declaration in C++?', ':', '}', ';', ')', 'C', 'C++ MCQ'),
(170, ' Which keyword is used to define the macros in c++?', '#macro', '#define', 'macro', 'define', 'B', 'C++ MCQ'),
(171, 'What is meant by a polymorphism in C++?', 'class having only single form', 'class having four forms', 'class having many forms', 'class having two forms', 'C', 'C++ MCQ'),
(172, 'Pick the incorrect statement about inline functions in C++?', 'Saves overhead of a return call from a function', 'They are generally very large and complicated function', 'These functions are inserted/substituted at the point of call', ' They reduce function call overheads', 'B', 'C++ MCQ'),
(173, 'What is abstract class in C++?', 'Any Class in C++ is an abstract class', 'Class from which any class is derived', 'Class specifically used as a base class with atleast one virtual functions', 'Class specifically used as a base class with atleast one pure virtual functions', 'D', 'C++ MCQ'),
(174, ' Which of the following constructors are provided by the C++ compiler if not defined in a class?', 'Copy constructor', 'Default constructor', 'Assignment constructor', 'All of the mentioned', 'D', 'C++ MCQ'),
(175, 'Which concept allows you to reuse the written code in C++?', ' Inheritance', 'Polymorphism', 'Abstraction', 'Encapsulation', 'A', 'C++ MCQ'),
(176, 'Wrapping data and its related functionality into a single entity is known as _____________', 'Abstraction', 'Encapsulation', 'Polymorphism', 'Modularity', 'B', 'C++ MCQ'),
(177, 'How access specifiers in Class helps in Abstraction?', 'They does not helps in any way', ' They allows us to show only required things to outer world', 'They help in keeping things together', 'Abstraction concept is not used in classes', 'B', 'C++ MCQ'),
(178, 'What does modularity mean?', 'Hiding part of program', 'Subdividing program into small independent parts', 'Overriding parts of program', 'Wrapping things into single unit', 'B', 'C++ MCQ'),
(179, 'Which data type is used to represent the absence of parameters?', ' int', 'short', 'void', 'float', 'C', 'C++ MCQ'),
(180, 'Which type is best suited to represent the logical values?', 'integer', 'boolean', 'character', 'float', 'B', 'C++ MCQ'),
(181, 'Which operator is having the highest precedence?', 'postfix', 'unary', 'shift', 'equality', 'A', 'C++ MCQ'),
(182, 'What is this operator called ?:?', 'conditional', 'relational', 'casting operator', 'unrelational', 'A', 'C++ MCQ'),
(183, 'The if..else statement can be replaced by which operator?', ' Bitwise operator', 'Conditional operator', 'Multiplicative operator', 'Addition operator', 'B', 'C++ MCQ'),
(184, 'The switch statement is also called as?', 'choosing structure', 'selective structure', 'certain structure', 'bitwise structure', 'B', 'C++ MCQ'),
(185, 'How many types of loops are there in C++?', '4', '2', '3', '1', 'A', 'C++ MCQ'),
(186, 'Which looping process is best used when the number of iterations is known?', 'for', 'while', 'do-while', 'None of the above', 'A', 'C++ MCQ'),
(187, 'Where does the execution of the program starts?', 'user-defined function', ' main function', 'void function', 'else function', 'B', 'C++ MCQ'),
(188, 'Which of the following is the default return value of functions in C++?', 'int', 'void', 'char', 'double', 'A', 'C++ MCQ'),
(189, 'What is an inline function?', 'A function that is expanded at each call during execution', 'A function that is called during compile time', 'A function that is not checked for syntax errors', 'A function that is not checked for semantic analysis', 'A', 'C++ MCQ'),
(190, 'An inline function is expanded during ______________', ' compile-time', ' run-time', 'never expanded', 'end of the program', 'A', 'C++ MCQ'),
(191, 'Which of the following feature is used in function overloading and function with default argument?', 'Encapsulation', ' Polymorphism', 'Abstraction', 'Modularity', 'B', 'C++ MCQ'),
(192, ' Which of the following is important in a function?', 'Return type', 'Function name', 'Both return type and function name', 'The return type, function name and parameter list', 'C', 'C++ MCQ'),
(193, 'Which of the following correctly declares an array?', 'int array[10];', 'int array;', 'array{10};', 'array array[10];', 'A', 'C++ MCQ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `questionId` text NOT NULL,
  `ans` text NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `stid` varchar(255) NOT NULL,
  `starttime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `pass`, `email`) VALUES
(1, 'Vishal Kumar', 'Admin@123', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
