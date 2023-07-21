--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `uid` int NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone` int NOT NULL
) ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`uid`, `address`, `city`, `pincode`, `state`, `phone`) VALUES
(1, 'bull temple BMS', 'bangalore', 560050, 'karnataka', 944756839);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(33) NOT NULL,
  `hid` int NOT NULL,
  `password` varchar(30) NOT NULL,
  `aid` int NOT NULL
) ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `hid`, `password`, `aid`) VALUES
('asd@gmail.xom', 3, '123456', 1),
('suri@gmail.com', 1, '123456', 2),
('CSE@GMAIL.COM', 1, '123456', 3);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` int NOT NULL,
  `pid` int NOT NULL,
  `hid` int NOT NULL,
  `qty` int NOT NULL
) ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `pid`, `hid`, `qty`) VALUES
(1, 4, 2, 1),
(2, 2, 2, 1),
(1, 4, 2, 1),
(2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sem` int NOT NULL,
  `mode` varchar(100) NOT NULL
) ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`fname`, `lname`, `usn`, `email`, `sem`, `mode`) VALUES
('sx', 'raj', '1BM20CS080', 'CSE@GMAIL.COM', 5, 'S@123'),
('uday', 'raj', '1BM20CS080', 'asd@gmail.xom', 3, 'ws@123'),
('jau', 'shan', '12345', 'mudayaraj26@gmail.com', 1, 'ws@123'),
('uday', 'ddd', '1BM20CS079', 'asd@gmail.xom', 2, 'uday@okicici'),
('SURAJ', 'KUMAR', '1BM20CS079', 'mdsuraj2002@gmail.com', 2, 'uday@okicici'),
('SURAJ', 'KUMAR', '1BM20CS079', 'mdsuraj2002@gmail.com', 2, 'uday@okicici');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `uid` int NOT NULL,
  `pid` int NOT NULL,
  `qty` int NOT NULL,
  `hid` int NOT NULL
) ;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`uid`, `pid`, `qty`, `hid`) VALUES
(5, 3, 4, 1),
(5, 6, 3, 2),
(6, 1, 3, 1),
(6, 3, 2, 2),
(6, 8, 2, 3),
(6, 11, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `comments` varchar(30) NOT NULL
) ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `hotel_name`, `comments`) VALUES
('roshan', 'vidhyar', 'should include non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hid` int NOT NULL,
  `hotel_name` varchar(20) NOT NULL,
  `hotel_image` varchar(100) DEFAULT NULL
) ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hid`, `hotel_name`, `hotel_image`) VALUES
(1, 'VIDHYARTHI KHAANA', 'vk.jpg'),
(2, 'SIP & SNACK', 'sip.jpg'),
(3, 'KAAPI KUTEERA', 'ck.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `pid` int NOT NULL,
  `hid` int NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `old_price` int DEFAULT NULL,
  `new_price` int DEFAULT NULL
) ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pid`, `hid`, `product_name`, `product_image`, `old_price`, `new_price`) VALUES
(1, 1, 1, 'BERRY MILKSHAKE', 'STRAWBERRY MILKSHAKE', 65, 55),
(2, 1, 2, 'ROTI CURRY', 'ROTI CURRY', 50, 45),
(3, 1, 3, 'ALOO-SAMOSA', 'SAMOSA', 40, 36),
(5, 2, 2, 'PLAIN MILK', 'PLAIN MILK', 15, 10),
(6, 2, 3, 'FRUIT PUNCH', 'FRUIT PUNCH', 30, 25),
(7, 3, 1, 'POORI', 'POORI', 45, 40),
(8, 3, 2, 'PAROTA', 'PAROTA', 60, 55),
(9, 3, 3, 'IDLI', 'IDLI', 45, 36),
(10, 4, 1, 'KARABATH', 'KARABATH', 25, 20),
(11, 4, 2, 'TEA COFFEE', 'TEA COFFEE', 20, 15),
(12, 4, 3, 'KARABATH', 'KARABATH', 25, 20),
(13, 5, 1, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(14, 5, 2, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(15, 5, 3, 'KESARI BATH', 'KESARI BATH', 15, 12),
(16, 6, 1, 'KESARI BATH', 'KESARI BATH', 15, 12),
(17, 6, 2, 'VEG ROLL', 'VEG ROLL', 40, 36),
(19, 7, 1, 'VEG ROLL', 'VEG ROLL', 40, 36),
(20, 7, 2, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(21, 7, 3, 'MAGGI', 'MAAGIjpg', 25, 20),
(22, 8, 1, 'LEMON SODA', 'LEMON SODA', 15, 12),
(23, 8, 2, 'KESARI BATH', 'KESARI BATH', 15, 12),
(25, 9, 1, 'MAGGI-HOT', 'MAAGIjpg', 25, 20),
(26, 9, 2, 'VEG ROLL', 'VEG ROLL', 40, 36),
(28, 10, 1, 'MASALA DOSA', 'MASALA DOSA', 50, 45),
(29, 10, 2, 'OREO MILKSHAKE', 'OREO MILKSHAKEjpg', 50, 45),
(30, 11, 1, 'OREO MILKSHAKE', 'OREO MILKSHAKEjpg', 50, 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `mob` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `uid` int NOT NULL
) ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `mob`, `password`, `uid`) VALUES
('mudayaraj26@gmail.co', '78929933221', '12345', 1),
('udayaraj.cs20@bmsce.', '7892676755', '12345', 2),
('mudayaraj26@gmail.co', '7892994422', '12345', 3),
('mudayaraj26@gmail.com', '7892994422', '000000', 4),
('hh@gmail.com', '7892994422', '767676', 5),
('CSE@GMAIL.COM', '7892994422', '123456', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`uid`,`pid`,`hid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`,`hid`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust`
--
ALTER TABLE `cust`
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
