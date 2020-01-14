/*
MySQL Data Transfer
Source Host: localhost
Source Database: ns_service
Target Host: localhost
Target Database: ns_service
Date: 2017-02-11 10:33:56 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `pro_band_name` varchar(200) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `salesman` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `receive_date` varchar(500) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales
-- ----------------------------
DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `tk_access` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales_order
-- ----------------------------
DROP TABLE IF EXISTS `sales_order`;
CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `pro_band_name` varchar(150) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for salesman
-- ----------------------------
DROP TABLE IF EXISTS `salesman`;
CREATE TABLE `salesman` (
  `salesman_id` int(11) NOT NULL AUTO_INCREMENT,
  `salesman_name` varchar(100) NOT NULL,
  `salesman_address` varchar(100) NOT NULL,
  `salesman_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `note` varchar(500) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  PRIMARY KEY (`salesman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `customer` VALUES ('1', 'mina', 'mina', '01752098978', 'RS-972364', '02/09/17', '102000');
INSERT INTO `customer` VALUES ('2', 'rony', 'rony', '01918456787', 'RS-322072', '02/11/17', '68000');
INSERT INTO `customer` VALUES ('3', 'nn', 'nn1', '943498', 'RS-803066', '02/11/17', '10000');
INSERT INTO `products` VALUES ('1', 'Whirlpool', 'Refrigerator', '32000', '34000', '2000', 'rony', '7', '12', '2017-02-08');
INSERT INTO `products` VALUES ('2', 'Samsung', 'Television 29\'', '4600', '5000', '400', 'rony', '21', '23', '2017-02-01');
INSERT INTO `products` VALUES ('3', 'Sony', 'Television 29\'', '25000', '28000', '3000', 'rony', '34', '34', '2017-02-03');
INSERT INTO `sales` VALUES ('1', 'RS-972364', 'admin', '02/09/17', 'cash', '102000', '6000', '103000', 'mina');
INSERT INTO `sales` VALUES ('2', 'RS-322072', 'admin', '02/11/17', 'cash', '68000', '4000', '68000', 'rony');
INSERT INTO `sales` VALUES ('3', 'RS-803066', 'admin', '02/11/17', 'cash', '10000', '800', '10000', 'nn');
INSERT INTO `sales_order` VALUES ('1', 'RS-972364', '1', '3', '102000', '6000', 'Refrigerator', 'Whirlpool', '34000', '', '02/09/17');
INSERT INTO `sales_order` VALUES ('2', 'RS-322072', '1', '2', '68000', '4000', 'Refrigerator', 'Whirlpool', '34000', '', '02/11/17');
INSERT INTO `sales_order` VALUES ('3', 'RS-803066', '2', '2', '10000', '800', 'Television 29\'', 'Samsung', '5000', '', '02/11/17');
INSERT INTO `salesman` VALUES ('1', 'rony', 'dhaka', 'monir', '01752098978', '11,800', 'good', '', '');
INSERT INTO `user` VALUES ('1', 'admin', 'admin', 'admin', 'admin');
INSERT INTO `user` VALUES ('2', 'salesman', 'salesman', 'salesman', 'salesman');
