use `hotel_list`;

CREATE TABLE `checkout` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sem` int(40) NOT NULL,
  `mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`first_name`, `last_name`, `usn`, `email`, `sem`, `mode`) VALUES
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 6, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 3, '11111@yyy'),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('', '', '', '', 0, ''),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 1, '11111@yyy'),
('', '', '', '', 0, ''),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 1, '11111@yyy'),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('M', 'UDAY RAJ', '1BM20CS080', 'mudayaraj26@gmail.com', 4, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 3, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 1, '11111@yyy'),
('', '', '', '', 0, ''),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 1, '11111@yyy'),
('M', 'RAJ', '1BM20EC152', 'udayaraj.cs20@bmsce.ac.in', 2, '11111@yyy'),
('M', 'RAJ', '1BM20EC152', 'udayaraj.cs20@bmsce.ac.in', 2, '11111@yyy'),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 3, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '1111@sss'),
('M', 'RAJ', '11', 'mudayaraj26@gmail.com', 2, '1111@sss'),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 2, '11111@yyy'),
('M Udaya', 'Raj', '1BM20EC152', 'mudayaraj26@gmail.com', 3, '1111@sss'),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 3, '11111@yyy'),
('M', 'RAJ', '1BM20EC152', 'udayaraj.cs20@bmsce.ac.in', 3, '11111@yyy'),
('M', 'RAJ', '1BM20EC152', 'udayaraj.cs20@bmsce.ac.in', 3, '11111@yyy'),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('M', 'RAJ', '1BM20EC152', 'mudayaraj26@gmail.com', 3, '11111@yyy'),
('', '', '', '', 0, ''),
('qs', 'sss', '111', 'mudayaraj@gmail.com', 1, '11111@yyy'),
('qs', 'sss', '111', 'mudayaraj@gmail.com', 1, '11111@yyy'),
('qs', 'sss', '111', 'mudayaraj@gmail.com', 1, '11111@yyy'),
('qs', 'sss', '111', 'mudayaraj@gmail.com', 1, '11111@yyy'),
('fsdgsd', 'qqqq', '11', 'udayaraj.cs20@bmsce.ac.in', 1, '11111@yyy'),
('', '', '', '', 0, ''),
('qqq', 'qa', '11', 'mudaya6@gmail.com', 5, '11111@yy'),
('qqq', 'qa', '11', 'mudaya6@gmail.com', 5, '11111@yy'),
('qqq', 'qa', '11', 'mudaya6@gmail.com', 5, '11111@yy'),
('', '', '', '', 0, ''),
('suraj', 'kumar', '13', 'suraj@gmail.com', 6, '11111@yyy'),
('suraj', 'kumar', '13', 'suraj@gmail.com', 6, '11111@yyy'),
('', '', '', '', 0, ''),
('qq', 'cc', '11', 'mudayaraj26@gmail.com', 6, '11111@yyy'),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('', '', '', '', 0, ''),
('M', 'RAJ', 'gdsgsdg', 'mudayaraj26@gmail.com', 2, '11111@yyy');

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
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `hid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`uid`, `pid`, `qty`, `hid`) VALUES
(1, 0, 0, 0),
(1, 2, 2, 2),
(1, 3, 4, 3),
(6, 0, 0, 0),
(7, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `hid` int(10) NOT NULL,
  `hotel_name` varchar(20) NOT NULL,
  `hotel_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hid`, `hotel_name`, `hotel_image`) VALUES
(1, 'VIDHYARTHI KHAANA', 'vk'),
(2, 'SIP & SNACK', 'sip'),
(3, 'KAAPI KUTEERA', 'ck');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `hid` int(10) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL,
  `new_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `hid`, `product_name`, `product_image`, `old_price`, `new_price`) VALUES
(1, 1, 'BERRY MILKSHAKE', 'STRAWBERRY MILKSHAKE', 65, 55),
(1, 2, 'ROTI CURRY', 'ROTI CURRY', 50, 45),
(1, 3, 'SAMOSA', 'SAMOSA', 40, 36),
(2, 1, 'IDLI', 'IDLI', 40, 36),
(2, 2, 'PLAIN MILK', 'PLAIN MILK', 15, 10),
(2, 3, 'FRUIT PUNCH', 'FRUIT PUNCH', 30, 25),
(3, 1, 'POORI', 'POORI', 45, 40),
(3, 2, 'PAROTA', 'PAROTA', 60, 55),
(3, 3, 'IDLI', 'IDLI', 45, 36),
(4, 1, 'KARABATH', 'KARABATH', 25, 20),
(4, 2, 'TEA COFFEE', 'TEA COFFEE', 20, 15),
(4, 3, 'KARABATH', 'KARABATH', 25, 20),
(5, 1, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(5, 2, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(5, 3, 'KESARI BATH', 'KESARI BATH', 15, 12),
(6, 1, 'KESARI BATH', 'KESARI BATH', 15, 12),
(6, 2, 'VEG ROLL', 'VEG ROLL', 40, 36),
(6, 3, 'LEMON SODA', 'LEMON SODA', 15, 12),
(7, 1, 'VEG ROLL', 'VEG ROLL', 40, 36),
(7, 2, 'VEG NOODLES', 'VEG NOODLES', 30, 25),
(7, 3, 'MAGGI', 'MAAGIjpg', 25, 20),
(8, 1, 'LEMON SODA', 'LEMON SODA', 15, 12),
(8, 2, 'KESARI BATH', 'KESARI BATH', 15, 12),
(8, 3, 'MASALA DOSA', 'MASALA DOSA', 50, 45),
(9, 1, 'MAGGI', 'MAAGIjpg', 25, 20),
(9, 2, 'VEG ROLL', 'VEG ROLL', 40, 36),
(9, 3, 'OREO MILKSHAKE', 'OREO MILKSHAKEjpg', 50, 45),
(10, 1, 'MASALA DOSA', 'MASALA DOSA', 50, 45),
(10, 2, 'OREO MILKSHAKE', 'OREO MILKSHAKEjpg', 50, 45),
(11, 1, 'OREO MILKSHAKE', 'OREO MILKSHAKEjpg', 50, 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `mob` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `mob`, `password`, `uid`) VALUES
('mudayaraj26@gmail.co', '789299', '12345', 1),
('udayaraj.cs20@bmsce.', '7892', '12345', 2),
('mudayaraj26@gmail.co', '7892994422', '12345', 3),
('mudayaraj26@gmail.com', '7892994422', '000000', 4),
('hh@gmail.com', '7892994422', '767676', 5),
('CSE@GMAIL.COM', '7892994422', '123456', 6),
('lok@gmail.com', '34235', '12345', 7);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`pid`,`hid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);
--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust`
--
ALTER TABLE `cust`
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
