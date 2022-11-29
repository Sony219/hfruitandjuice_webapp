--
-- Database: `mydb`
--

CREATE DATABASE IF NOT EXISTS `Sosofruits` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Sosofruits`;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
`Id` int(11) NOT NULL,
`First Name` int(50) NOT NULL,
`Last Name` int(50) NOT NULL,
`Email` int(150) NOT NULL,
`Phone` varchar(15) NOT NULL,
`Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;