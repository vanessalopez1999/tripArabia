/*
 Navicat Premium Dump SQL

 Source Server         : vanessa
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : trips

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 07/03/2025 20:03:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for arabia
-- ----------------------------
DROP TABLE IF EXISTS `arabia`;
CREATE TABLE `arabia`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `gasto` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `monto` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of arabia
-- ----------------------------
INSERT INTO `arabia` VALUES (7, 'compras', 90.00);
INSERT INTO `arabia` VALUES (8, 'alcohol', 70.00);
INSERT INTO `arabia` VALUES (9, 'comida', 30.00);
INSERT INTO `arabia` VALUES (10, 'cine', 50.00);

SET FOREIGN_KEY_CHECKS = 1;
