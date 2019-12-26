-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: xnk
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'admin','admin','brucelee.drupal@gmail.com','brucelee.drupal@gmail.com',1,'tLzjU19W1n1L.sVhMLGZFTrsnT0edKU7wmGfUEd7GEs','$argon2i$v=19$m=65536,t=4,p=1$NFlMandwVkoxbmpvcEZFTw$3fcN8AByMa9D4DlPAN/Hb/BfR6+CYj0lxY9oh+R4QYE','2019-11-04 08:31:22',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tree_root` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D035FA87A977936C` (`tree_root`),
  KEY `IDX_D035FA87727ACA70` (`parent_id`),
  KEY `lft_ix` (`lft`),
  KEY `rgt_ix` (`rgt`),
  KEY `lft_rgt_ix` (`lft`,`rgt`),
  KEY `lvl_ix` (`lvl`),
  CONSTRAINT `FK_D035FA87727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D035FA87A977936C` FOREIGN KEY (`tree_root`) REFERENCES `options` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (1,1,NULL,'性别',1,0,6),(2,1,1,'男',2,1,3),(3,1,1,'女',4,1,5),(4,4,NULL,'文化程度',1,0,12),(5,4,4,'大学',2,1,3),(6,4,4,'高中',4,1,5),(7,4,4,'初中',6,1,7),(8,4,4,'小学',8,1,9),(9,4,4,'文盲',10,1,11),(10,10,NULL,'婚姻状况',1,0,10),(11,10,10,'已婚',2,1,3),(12,10,10,'已婚丧偶',4,1,5),(13,10,10,'已婚离异',6,1,7),(14,10,10,'未婚',8,1,9),(15,15,NULL,'职业',1,0,12),(16,15,15,'公务员',2,1,3),(17,15,15,'农民',4,1,5),(18,15,15,'教师',6,1,7),(19,15,15,'经商',8,1,9),(20,15,15,'其他',10,1,11),(21,21,NULL,'医保类型',1,0,14),(22,21,21,'退休职工',2,1,3),(23,21,21,'在职职工',4,1,5),(24,21,21,'城镇居民',6,1,7),(25,25,NULL,'降压药物',1,0,18),(26,25,25,'ACEI',4,1,5),(27,25,25,'ARB',6,1,7),(28,25,25,'β阻滞剂',8,1,9),(29,25,25,'钙拮抗剂',10,1,11),(30,25,25,'利尿剂',12,1,13),(31,25,25,'其他',14,1,15),(33,33,NULL,'控制情况',1,0,8),(34,33,33,'控制理想',2,1,3),(35,33,33,'控制欠佳',4,1,5),(36,33,33,'控制情况不详',6,1,7),(37,37,NULL,'降糖药物',1,0,16),(38,37,37,'胰岛素',4,1,5),(39,37,37,'磺脲类',6,1,7),(40,37,37,'双胍类',8,1,9),(41,37,37,'噻唑烷二酮类',10,1,11),(42,37,37,'二肽基肽酶-4抑制剂',12,1,13),(44,21,21,'离休',8,1,9),(45,21,21,'自费',10,1,11),(46,46,NULL,'降脂药物',1,0,12),(47,46,46,'他汀',4,1,5),(48,46,46,'贝特类',6,1,7),(49,46,46,'依折麦布',8,1,9),(50,50,NULL,'吸烟情况',1,0,8),(51,50,50,'当前吸烟',2,1,3),(52,50,50,'既往吸烟',4,1,5),(53,50,50,'无吸烟史',6,1,7),(54,54,NULL,'饮酒',1,0,12),(55,54,54,'白酒',2,1,3),(56,54,54,'黄酒',4,1,5),(57,54,54,'啤酒',6,1,7),(58,54,54,'已戒酒',8,1,9),(59,54,54,'无饮酒史',10,1,11),(60,21,21,'其他',12,1,13),(61,61,NULL,'痛风',1,0,8),(62,61,61,'别嘌呤醇',4,1,5),(63,61,61,'非布司他',6,1,7),(64,64,NULL,'CABG病史',1,0,8),(65,64,64,'LIMA',4,1,5),(66,64,64,'SVG',6,1,7),(67,67,NULL,'脑卒中病史',1,0,10),(68,67,67,'缺血性',4,1,5),(69,67,67,'出血性',6,1,7),(70,67,67,'不详',8,1,9),(71,71,NULL,'既往服用抗血小板药物',1,0,12),(72,71,71,'阿司匹林',4,1,5),(73,71,71,'波立维',6,1,7),(74,71,71,'帅泰/泰嘉',8,1,9),(75,71,71,'替格瑞洛',10,1,11),(76,76,NULL,'既往抗凝药物',1,0,8),(77,76,76,'华法林',4,1,5),(78,76,76,'利伐沙班',6,1,7),(79,79,NULL,'他汀药物',1,0,12),(80,79,79,'阿托伐他汀',4,1,5),(81,79,79,'瑞舒伐他汀',6,1,7),(82,79,79,'辛伐他汀',8,1,9),(83,79,79,'依折麦布',10,1,11),(84,84,NULL,'参加过心血管疾病健康教育',1,0,10),(85,84,84,'现场讲座（县级以上医院专家）',2,1,3),(86,84,84,'现场讲座（社区医生）',4,1,5),(87,84,84,'电视广播',6,1,7),(88,84,84,'报纸',8,1,9),(89,89,NULL,'发病时间',1,0,14),(90,89,89,'上午6－10',2,1,3),(91,89,89,'中午',4,1,5),(92,89,89,'下午',6,1,7),(93,89,89,'晚上',8,1,9),(94,89,89,'午夜',10,1,11),(95,89,89,'凌晨',12,1,13),(96,96,NULL,'发病地点',1,0,8),(97,96,96,'家中',2,1,3),(98,96,96,'工作场所',4,1,5),(99,96,96,'户外',6,1,7),(100,100,NULL,'诱因',1,0,12),(101,100,100,'劳累',2,1,3),(102,100,100,'情绪激动',4,1,5),(103,100,100,'排便',6,1,7),(104,100,100,'停用抗血小板药物',8,1,9),(105,100,100,'其他',10,1,11),(106,106,NULL,'胸痛/胸闷部位',1,0,12),(107,106,106,'胸部',2,1,3),(108,106,106,'咽喉部/颈部',4,1,5),(109,106,106,'背部',6,1,7),(110,106,106,'上腹部',8,1,9),(111,106,106,'手臂',10,1,11),(112,112,NULL,'伴随症状',1,0,12),(113,112,112,'乏力/虚弱',2,1,3),(114,112,112,'恶心/呕吐',4,1,5),(115,112,112,'冷汗/大汗淋漓',6,1,7),(116,112,112,'恐惧感',8,1,9),(117,112,112,'晕厥',10,1,11),(118,118,NULL,'发病后第一个向谁求助',1,0,14),(119,118,118,'配偶',2,1,3),(120,118,118,'子女',4,1,5),(121,118,118,'朋友',6,1,7),(122,118,118,'110',8,1,9),(123,118,118,'认识的医务人员',10,1,11),(124,118,118,'其他',12,1,13),(125,125,NULL,'发病后服用药物',1,0,14),(126,125,125,'阿司匹林',2,1,3),(127,125,125,'麝香保心丸',4,1,5),(128,125,125,'速效救心丸',6,1,7),(129,125,125,'复发丹参滴丸',8,1,9),(130,125,125,'止痛药',10,1,11),(131,125,125,'扭痧',12,1,13),(132,132,NULL,'犹豫是否就医及原因',1,0,12),(133,132,132,'未犹豫',2,1,3),(134,132,132,'症状有所改善',4,1,5),(135,132,132,'期待症状改善',6,1,7),(136,132,132,'自觉不是心脏病，无大碍',8,1,9),(137,132,132,'怕麻烦家人',10,1,11),(138,138,NULL,'恶性心律失常',1,0,8),(139,138,138,'室颤/持续性室速',2,1,3),(140,138,138,'高度或三度AVB',4,1,5),(141,138,138,'窦性停搏3秒以上',6,1,7),(142,142,NULL,'Killip分级',1,0,10),(143,142,142,'I',2,1,3),(144,142,142,'II',4,1,5),(145,142,142,'III',6,1,7),(146,142,142,'IV',8,1,9),(147,147,NULL,'梗死部位',1,0,14),(148,147,147,'前壁',2,1,3),(149,147,147,'广泛前壁',4,1,5),(150,147,147,'下壁',6,1,7),(151,147,147,'侧壁',8,1,9),(152,147,147,'后壁',10,1,11),(153,147,147,'右室',12,1,13),(154,25,25,'无高血压',2,1,3),(155,37,37,'无糖尿病',2,1,3),(156,46,46,'无高血脂',2,1,3),(157,25,25,'有高血压未用药',16,1,17),(158,37,37,'有高血糖未用药',14,1,15),(159,46,46,'有高血脂未用药',10,1,11),(160,160,NULL,'再灌注方式',1,0,12),(161,160,160,'直接PCI',2,1,3),(162,160,160,'溶栓',4,1,5),(163,160,160,'溶栓后补救PCI',6,1,7),(164,160,160,'溶栓后择期PCI',8,1,9),(165,160,160,'保守治疗',10,1,11),(166,166,NULL,'就诊医院版本',1,0,8),(167,166,166,'胸痛中心标准版',2,1,3),(168,166,166,'胸痛中心基层版',4,1,5),(169,166,166,'胸痛中心创建中',6,1,7),(170,170,NULL,'就诊医院',1,0,12),(171,170,170,'金华市中心医院',2,1,3),(172,170,170,'永康人民医院',4,1,5),(173,170,170,'浦江人民医院',6,1,7),(174,170,170,'武义人民医院',8,1,9),(175,170,170,'磐安人民医院',10,1,11),(176,176,NULL,'就诊方式',1,0,12),(177,176,176,'自行急诊就诊',2,1,3),(178,176,176,'陪同急诊就诊',4,1,5),(179,176,176,'拨打120转运',6,1,7),(180,176,176,'门诊就诊',8,1,9),(181,176,176,'其他医院转送',10,1,11),(182,182,NULL,'转运距离',1,0,10),(183,182,182,'＜10',2,1,3),(184,182,182,'10-30',4,1,5),(185,182,182,'30-50',6,1,7),(186,182,182,'＞50',8,1,9),(187,187,NULL,'利尿剂',1,0,8),(188,187,187,'速尿',2,1,3),(189,187,187,'双克',4,1,5),(190,187,187,'托拉塞米',6,1,7),(191,191,NULL,'梗死相关动脉',1,0,14),(192,191,191,'前降支',2,1,3),(193,191,191,'回旋支',4,1,5),(194,191,191,'右冠',6,1,7),(195,191,191,'左主干',8,1,9),(196,191,191,'桥血管',10,1,11),(197,191,191,'≥2支犯罪血管',12,1,13),(198,198,NULL,'血管病变支数',1,0,8),(199,198,198,'单支病变',2,1,3),(200,198,198,'双支病变',4,1,5),(201,198,198,'三支病变',6,1,7),(202,202,NULL,'合并CTO',1,0,8),(203,202,202,'前降支',2,1,3),(204,202,202,'回旋支',4,1,5),(205,202,202,'右冠',6,1,7),(206,206,NULL,'造影剂种类',1,0,10),(207,206,206,'碘海醇',2,1,3),(208,206,206,'碘克沙醇',4,1,5),(209,206,206,'碘佛醇',6,1,7),(210,206,206,'其他',8,1,9),(211,211,NULL,'pci 路径',1,0,8),(212,211,211,'桡动脉',2,1,3),(213,211,211,'股动脉',4,1,5),(214,211,211,'肱动脉',6,1,7),(215,215,NULL,'植入支架',1,0,8),(216,215,215,'血栓负荷重',2,1,3),(217,215,215,'管腔直径小',4,1,5),(218,215,215,'植入失败',6,1,7),(219,219,NULL,'同时处理非犯罪血管',1,0,8),(220,219,219,'前降支',2,1,3),(221,219,219,'回旋支',4,1,5),(222,219,219,'右冠',6,1,7),(223,223,NULL,'术中用药',1,0,2),(224,61,61,'无痛风',2,1,3),(225,64,64,'无CABG病史',2,1,3),(226,67,67,'无脑卒中',2,1,3),(227,71,71,'无血小板病史',2,1,3),(228,76,76,'无抗凝病史',2,1,3),(229,79,79,'无他汀病史',2,1,3);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birthday` date DEFAULT NULL,
  `tall` int(11) DEFAULT NULL,
  `ryrq` date NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zyh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `marriage_id` int(11) DEFAULT NULL,
  `career_id` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `yibao_id` int(11) DEFAULT NULL,
  `fuwei` int(11) DEFAULT NULL,
  `gxykzqk_id` int(11) DEFAULT NULL,
  `tnbkzqk_id` int(11) DEFAULT NULL,
  `gxzkzqk_id` int(11) DEFAULT NULL,
  `xyqk_id` int(11) DEFAULT NULL,
  `xyqkzhi` int(11) DEFAULT NULL,
  `xyqkyear` int(11) DEFAULT NULL,
  `yjqk_id` int(11) DEFAULT NULL,
  `yjqkliang` int(11) DEFAULT NULL,
  `yjqkyear` int(11) DEFAULT NULL,
  `xjgs` tinyint(1) NOT NULL,
  `jwxjt` tinyint(1) NOT NULL,
  `pcibs` tinyint(1) NOT NULL,
  `nzzbs_id` int(11) DEFAULT NULL,
  `wzdmjb` tinyint(1) NOT NULL,
  `gxbjzs` tinyint(1) NOT NULL,
  `hbexzl` tinyint(1) NOT NULL,
  `xhdkybs` tinyint(1) NOT NULL,
  `xgnbqbs` tinyint(1) NOT NULL,
  `tx` tinyint(1) NOT NULL,
  `copd` tinyint(1) NOT NULL,
  `zgzzl` tinyint(1) NOT NULL,
  `pyywry` tinyint(1) NOT NULL,
  `pypci` tinyint(1) NOT NULL,
  `pyxjgsbs` tinyint(1) NOT NULL,
  `kippip_id` int(11) DEFAULT NULL,
  `zzdx` tinyint(1) NOT NULL,
  `ysxg` tinyint(1) NOT NULL,
  `yqxtzt` tinyint(1) NOT NULL,
  `zszcdzz` tinyint(1) NOT NULL,
  `yszcdzz` tinyint(1) NOT NULL,
  `xfcd` tinyint(1) NOT NULL,
  `ssy` int(11) DEFAULT NULL,
  `szy` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL,
  `hx` int(11) DEFAULT NULL,
  `tw` double DEFAULT NULL,
  `sfxyzt` tinyint(1) DEFAULT NULL,
  `jpybhd` double DEFAULT NULL,
  `cm` double NOT NULL,
  `xj` double DEFAULT NULL,
  `xn` double DEFAULT NULL,
  `xlv` double DEFAULT NULL,
  `jx` double DEFAULT NULL,
  `egfr` double DEFAULT NULL,
  `kfxt` double DEFAULT NULL,
  `hba1c` double DEFAULT NULL,
  `jgdbi` double DEFAULT NULL,
  `jgdbt` double DEFAULT NULL,
  `ckmb` double DEFAULT NULL,
  `bnp` double DEFAULT NULL,
  `xhdb` int(11) DEFAULT NULL,
  `hxbyj` double DEFAULT NULL,
  `gysz` int(11) DEFAULT NULL,
  `zdgc` int(11) DEFAULT NULL,
  `hdlc` int(11) DEFAULT NULL,
  `ldlc` int(11) DEFAULT NULL,
  `ns` int(11) DEFAULT NULL,
  `nt` int(11) DEFAULT NULL,
  `lvef` double DEFAULT NULL,
  `jzyybb_id` int(11) DEFAULT NULL,
  `jzyy_id` int(11) DEFAULT NULL,
  `zjfs_id` int(11) DEFAULT NULL,
  `zyjl_id` int(11) DEFAULT NULL,
  `yqxdtcs` tinyint(1) DEFAULT NULL,
  `zgzfs_id` int(11) DEFAULT NULL,
  `aspl` tinyint(1) DEFAULT NULL,
  `lbgl` tinyint(1) DEFAULT NULL,
  `tgrl` tinyint(1) DEFAULT NULL,
  `dfzgs` int(11) DEFAULT NULL,
  `yzmb` tinyint(1) NOT NULL,
  `acei` tinyint(1) DEFAULT NULL,
  `arb` tinyint(1) DEFAULT NULL,
  `bzzj` tinyint(1) DEFAULT NULL,
  `atst` tinyint(1) DEFAULT NULL,
  `dba` int(11) DEFAULT NULL,
  `dbada` int(11) DEFAULT NULL,
  `mln` int(11) DEFAULT NULL,
  `zxmd` tinyint(1) DEFAULT NULL,
  `xhs` int(11) DEFAULT NULL,
  `kdlz` int(11) DEFAULT NULL,
  `adlp` int(11) DEFAULT NULL,
  `ldky` int(11) DEFAULT NULL,
  `wcfztq` int(11) DEFAULT NULL,
  `yctqzc` int(11) DEFAULT NULL,
  `iabp` int(11) DEFAULT NULL,
  `ecmo` int(11) DEFAULT NULL,
  `zcysy` tinyint(1) DEFAULT NULL,
  `xgbbzs_id` int(11) DEFAULT NULL,
  `xgjd` tinyint(1) DEFAULT NULL,
  `dmyzgh` tinyint(1) DEFAULT NULL,
  `dmxxfhz` tinyint(1) DEFAULT NULL,
  `xsszxg` tinyint(1) DEFAULT NULL,
  `timixl` tinyint(1) DEFAULT NULL,
  `pcilj_id` int(11) DEFAULT NULL,
  `zyjjl` int(11) DEFAULT NULL,
  `sscx` tinyint(1) DEFAULT NULL,
  `pcijkj` tinyint(1) DEFAULT NULL,
  `ykz` tinyint(1) DEFAULT NULL,
  `ykqnzz` int(11) DEFAULT NULL,
  `ykqncd` int(11) DEFAULT NULL,
  `zjsl` int(11) DEFAULT NULL,
  `zjzj` int(11) DEFAULT NULL,
  `zjcd` int(11) DEFAULT NULL,
  `hkz` tinyint(1) DEFAULT NULL,
  `hkzqnzj` int(11) DEFAULT NULL,
  `hkzqncd` int(11) DEFAULT NULL,
  `hkzdyl` int(11) DEFAULT NULL,
  `szsc` int(11) DEFAULT NULL,
  `wfl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shtimi` tinyint(1) DEFAULT NULL,
  `sfrqjz` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1ADAD7EB708A0E0` (`gender_id`),
  KEY `IDX_1ADAD7EB28722836` (`scholarship_id`),
  KEY `IDX_1ADAD7EB9DAE1DA4` (`marriage_id`),
  KEY `IDX_1ADAD7EBB58CDA09` (`career_id`),
  KEY `IDX_1ADAD7EBD338573F` (`yibao_id`),
  KEY `IDX_1ADAD7EBBA480FEE` (`gxykzqk_id`),
  KEY `IDX_1ADAD7EB88DA2383` (`tnbkzqk_id`),
  KEY `IDX_1ADAD7EB34C7080D` (`gxzkzqk_id`),
  KEY `IDX_1ADAD7EBDF53B864` (`xyqk_id`),
  KEY `IDX_1ADAD7EBFC66C3E5` (`yjqk_id`),
  KEY `IDX_1ADAD7EB419AFB5F` (`nzzbs_id`),
  KEY `IDX_1ADAD7EB76CCC42F` (`kippip_id`),
  KEY `IDX_1ADAD7EBACD45CBA` (`jzyybb_id`),
  KEY `IDX_1ADAD7EB63E693F8` (`jzyy_id`),
  KEY `IDX_1ADAD7EB8AE3ED9A` (`zjfs_id`),
  KEY `IDX_1ADAD7EBC22B3767` (`zyjl_id`),
  KEY `IDX_1ADAD7EB4AE29F40` (`zgzfs_id`),
  KEY `IDX_1ADAD7EB7DA1C462` (`xgbbzs_id`),
  KEY `IDX_1ADAD7EBCD8ED71A` (`pcilj_id`),
  CONSTRAINT `FK_1ADAD7EB28722836` FOREIGN KEY (`scholarship_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB34C7080D` FOREIGN KEY (`gxzkzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB419AFB5F` FOREIGN KEY (`nzzbs_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB4AE29F40` FOREIGN KEY (`zgzfs_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB63E693F8` FOREIGN KEY (`jzyy_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB708A0E0` FOREIGN KEY (`gender_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB76CCC42F` FOREIGN KEY (`kippip_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB7DA1C462` FOREIGN KEY (`xgbbzs_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB88DA2383` FOREIGN KEY (`tnbkzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB8AE3ED9A` FOREIGN KEY (`zjfs_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EB9DAE1DA4` FOREIGN KEY (`marriage_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBACD45CBA` FOREIGN KEY (`jzyybb_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBB58CDA09` FOREIGN KEY (`career_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBBA480FEE` FOREIGN KEY (`gxykzqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBC22B3767` FOREIGN KEY (`zyjl_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBCD8ED71A` FOREIGN KEY (`pcilj_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBD338573F` FOREIGN KEY (`yibao_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBDF53B864` FOREIGN KEY (`xyqk_id`) REFERENCES `options` (`id`),
  CONSTRAINT `FK_1ADAD7EBFC66C3E5` FOREIGN KEY (`yjqk_id`) REFERENCES `options` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (5,'1985-12-13',169,'2017-11-30','18116381898','李跃健','800003649',2,6,11,17,79,23,69,34,36,35,51,3,2,56,2,3,1,1,1,68,1,0,1,0,1,0,1,1,0,0,1,144,0,1,0,0,1,1,80,120,80,60,36.5,1,0.8,2.3,0.4,0.4,0.1,NULL,3.5,20.4,0.5,32,26,33.2,25.1,33,0.27,26,58,22,25,33,65,0.36,169,171,177,185,1,163,1,1,1,0,1,0,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,0,0,0,0,0,NULL,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,0,0),(6,'2017-11-11',123,'2014-02-02','18116381898','lee','62',2,6,11,17,56,24,69,34,35,35,51,2,8,55,2,8,0,1,0,NULL,0,0,0,0,0,0,0,0,0,0,0,NULL,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'1992-11-11',NULL,'2019-07-08','2354','坏目','525',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,1,1,NULL,1,0,0,0,0,0,1,1,1,0,0,NULL,0,0,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options`
--

DROP TABLE IF EXISTS `patient_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_8D56AF6C6B899279` (`patient_id`),
  KEY `IDX_8D56AF6C3ADB05F1` (`options_id`),
  CONSTRAINT `FK_8D56AF6C3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8D56AF6C6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options`
--

LOCK TABLES `patient_options` WRITE;
/*!40000 ALTER TABLE `patient_options` DISABLE KEYS */;
INSERT INTO `patient_options` VALUES (5,62),(5,63),(6,62);
/*!40000 ALTER TABLE `patient_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_bszz`
--

DROP TABLE IF EXISTS `patient_options_bszz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_bszz` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_712F68C36B899279` (`patient_id`),
  KEY `IDX_712F68C33ADB05F1` (`options_id`),
  CONSTRAINT `FK_712F68C33ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_712F68C36B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_bszz`
--

LOCK TABLES `patient_options_bszz` WRITE;
/*!40000 ALTER TABLE `patient_options_bszz` DISABLE KEYS */;
INSERT INTO `patient_options_bszz` VALUES (5,113);
/*!40000 ALTER TABLE `patient_options_bszz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_cabgbs`
--

DROP TABLE IF EXISTS `patient_options_cabgbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_cabgbs` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_2C8F7F806B899279` (`patient_id`),
  KEY `IDX_2C8F7F803ADB05F1` (`options_id`),
  CONSTRAINT `FK_2C8F7F803ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2C8F7F806B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_cabgbs`
--

LOCK TABLES `patient_options_cabgbs` WRITE;
/*!40000 ALTER TABLE `patient_options_cabgbs` DISABLE KEYS */;
INSERT INTO `patient_options_cabgbs` VALUES (5,65);
/*!40000 ALTER TABLE `patient_options_cabgbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_clffzxg`
--

DROP TABLE IF EXISTS `patient_options_clffzxg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_clffzxg` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EC23EE516B899279` (`patient_id`),
  KEY `IDX_EC23EE513ADB05F1` (`options_id`),
  CONSTRAINT `FK_EC23EE513ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EC23EE516B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_clffzxg`
--

LOCK TABLES `patient_options_clffzxg` WRITE;
/*!40000 ALTER TABLE `patient_options_clffzxg` DISABLE KEYS */;
INSERT INTO `patient_options_clffzxg` VALUES (5,221),(5,222);
/*!40000 ALTER TABLE `patient_options_clffzxg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_exxlsc`
--

DROP TABLE IF EXISTS `patient_options_exxlsc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_exxlsc` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EAB902006B899279` (`patient_id`),
  KEY `IDX_EAB902003ADB05F1` (`options_id`),
  CONSTRAINT `FK_EAB902003ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EAB902006B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_exxlsc`
--

LOCK TABLES `patient_options_exxlsc` WRITE;
/*!40000 ALTER TABLE `patient_options_exxlsc` DISABLE KEYS */;
INSERT INTO `patient_options_exxlsc` VALUES (5,139),(5,140);
/*!40000 ALTER TABLE `patient_options_exxlsc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_fbdd`
--

DROP TABLE IF EXISTS `patient_options_fbdd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_fbdd` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_CDE7346F6B899279` (`patient_id`),
  KEY `IDX_CDE7346F3ADB05F1` (`options_id`),
  CONSTRAINT `FK_CDE7346F3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CDE7346F6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_fbdd`
--

LOCK TABLES `patient_options_fbdd` WRITE;
/*!40000 ALTER TABLE `patient_options_fbdd` DISABLE KEYS */;
INSERT INTO `patient_options_fbdd` VALUES (5,97);
/*!40000 ALTER TABLE `patient_options_fbdd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_fbfyyw`
--

DROP TABLE IF EXISTS `patient_options_fbfyyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_fbfyyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_C63824D6B899279` (`patient_id`),
  KEY `IDX_C63824D3ADB05F1` (`options_id`),
  CONSTRAINT `FK_C63824D3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_C63824D6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_fbfyyw`
--

LOCK TABLES `patient_options_fbfyyw` WRITE;
/*!40000 ALTER TABLE `patient_options_fbfyyw` DISABLE KEYS */;
INSERT INTO `patient_options_fbfyyw` VALUES (5,127);
/*!40000 ALTER TABLE `patient_options_fbfyyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_fbsj`
--

DROP TABLE IF EXISTS `patient_options_fbsj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_fbsj` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_2FDC9DFE6B899279` (`patient_id`),
  KEY `IDX_2FDC9DFE3ADB05F1` (`options_id`),
  CONSTRAINT `FK_2FDC9DFE3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FDC9DFE6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_fbsj`
--

LOCK TABLES `patient_options_fbsj` WRITE;
/*!40000 ALTER TABLE `patient_options_fbsj` DISABLE KEYS */;
INSERT INTO `patient_options_fbsj` VALUES (5,90),(5,91);
/*!40000 ALTER TABLE `patient_options_fbsj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_gsbw`
--

DROP TABLE IF EXISTS `patient_options_gsbw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_gsbw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_BA5B7C156B899279` (`patient_id`),
  KEY `IDX_BA5B7C153ADB05F1` (`options_id`),
  CONSTRAINT `FK_BA5B7C153ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_BA5B7C156B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_gsbw`
--

LOCK TABLES `patient_options_gsbw` WRITE;
/*!40000 ALTER TABLE `patient_options_gsbw` DISABLE KEYS */;
INSERT INTO `patient_options_gsbw` VALUES (5,149);
/*!40000 ALTER TABLE `patient_options_gsbw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_gsxgdm`
--

DROP TABLE IF EXISTS `patient_options_gsxgdm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_gsxgdm` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_3ECFD46A6B899279` (`patient_id`),
  KEY `IDX_3ECFD46A3ADB05F1` (`options_id`),
  CONSTRAINT `FK_3ECFD46A3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3ECFD46A6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_gsxgdm`
--

LOCK TABLES `patient_options_gsxgdm` WRITE;
/*!40000 ALTER TABLE `patient_options_gsxgdm` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_options_gsxgdm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_hbcto`
--

DROP TABLE IF EXISTS `patient_options_hbcto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_hbcto` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_2272B20C6B899279` (`patient_id`),
  KEY `IDX_2272B20C3ADB05F1` (`options_id`),
  CONSTRAINT `FK_2272B20C3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2272B20C6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_hbcto`
--

LOCK TABLES `patient_options_hbcto` WRITE;
/*!40000 ALTER TABLE `patient_options_hbcto` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_options_hbcto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jtyw`
--

DROP TABLE IF EXISTS `patient_options_jtyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jtyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_E44879D76B899279` (`patient_id`),
  KEY `IDX_E44879D73ADB05F1` (`options_id`),
  CONSTRAINT `FK_E44879D73ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E44879D76B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jtyw`
--

LOCK TABLES `patient_options_jtyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jtyw` DISABLE KEYS */;
INSERT INTO `patient_options_jtyw` VALUES (5,39),(5,40),(5,41),(6,39),(6,40);
/*!40000 ALTER TABLE `patient_options_jtyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jyyw`
--

DROP TABLE IF EXISTS `patient_options_jyyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jyyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EC90EA846B899279` (`patient_id`),
  KEY `IDX_EC90EA843ADB05F1` (`options_id`),
  CONSTRAINT `FK_EC90EA843ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EC90EA846B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jyyw`
--

LOCK TABLES `patient_options_jyyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jyyw` DISABLE KEYS */;
INSERT INTO `patient_options_jyyw` VALUES (5,26),(5,27),(6,28),(6,29);
/*!40000 ALTER TABLE `patient_options_jyyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_jzyw`
--

DROP TABLE IF EXISTS `patient_options_jzyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_jzyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_EED654DD6B899279` (`patient_id`),
  KEY `IDX_EED654DD3ADB05F1` (`options_id`),
  CONSTRAINT `FK_EED654DD3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_EED654DD6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_jzyw`
--

LOCK TABLES `patient_options_jzyw` WRITE;
/*!40000 ALTER TABLE `patient_options_jzyw` DISABLE KEYS */;
INSERT INTO `patient_options_jzyw` VALUES (5,47),(5,48),(5,49),(6,48);
/*!40000 ALTER TABLE `patient_options_jzyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_knyw`
--

DROP TABLE IF EXISTS `patient_options_knyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_knyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_4D4538146B899279` (`patient_id`),
  KEY `IDX_4D4538143ADB05F1` (`options_id`),
  CONSTRAINT `FK_4D4538143ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4D4538146B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_knyw`
--

LOCK TABLES `patient_options_knyw` WRITE;
/*!40000 ALTER TABLE `patient_options_knyw` DISABLE KEYS */;
INSERT INTO `patient_options_knyw` VALUES (5,77),(5,78);
/*!40000 ALTER TABLE `patient_options_knyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_kxxbyw`
--

DROP TABLE IF EXISTS `patient_options_kxxbyw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_kxxbyw` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_3A18728D6B899279` (`patient_id`),
  KEY `IDX_3A18728D3ADB05F1` (`options_id`),
  CONSTRAINT `FK_3A18728D3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_3A18728D6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_kxxbyw`
--

LOCK TABLES `patient_options_kxxbyw` WRITE;
/*!40000 ALTER TABLE `patient_options_kxxbyw` DISABLE KEYS */;
INSERT INTO `patient_options_kxxbyw` VALUES (5,73),(5,74);
/*!40000 ALTER TABLE `patient_options_kxxbyw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_lnj`
--

DROP TABLE IF EXISTS `patient_options_lnj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_lnj` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_79C26B6A6B899279` (`patient_id`),
  KEY `IDX_79C26B6A3ADB05F1` (`options_id`),
  CONSTRAINT `FK_79C26B6A3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_79C26B6A6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_lnj`
--

LOCK TABLES `patient_options_lnj` WRITE;
/*!40000 ALTER TABLE `patient_options_lnj` DISABLE KEYS */;
INSERT INTO `patient_options_lnj` VALUES (5,188),(5,189);
/*!40000 ALTER TABLE `patient_options_lnj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_ttyy`
--

DROP TABLE IF EXISTS `patient_options_ttyy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_ttyy` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_B336747C6B899279` (`patient_id`),
  KEY `IDX_B336747C3ADB05F1` (`options_id`),
  CONSTRAINT `FK_B336747C3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B336747C6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_ttyy`
--

LOCK TABLES `patient_options_ttyy` WRITE;
/*!40000 ALTER TABLE `patient_options_ttyy` DISABLE KEYS */;
INSERT INTO `patient_options_ttyy` VALUES (5,81),(5,82);
/*!40000 ALTER TABLE `patient_options_ttyy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_xsqj`
--

DROP TABLE IF EXISTS `patient_options_xsqj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_xsqj` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_B0C816976B899279` (`patient_id`),
  KEY `IDX_B0C816973ADB05F1` (`options_id`),
  CONSTRAINT `FK_B0C816973ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B0C816976B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_xsqj`
--

LOCK TABLES `patient_options_xsqj` WRITE;
/*!40000 ALTER TABLE `patient_options_xsqj` DISABLE KEYS */;
INSERT INTO `patient_options_xsqj` VALUES (5,122);
/*!40000 ALTER TABLE `patient_options_xsqj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_xtxm`
--

DROP TABLE IF EXISTS `patient_options_xtxm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_xtxm` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_FA212EF86B899279` (`patient_id`),
  KEY `IDX_FA212EF83ADB05F1` (`options_id`),
  CONSTRAINT `FK_FA212EF83ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_FA212EF86B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_xtxm`
--

LOCK TABLES `patient_options_xtxm` WRITE;
/*!40000 ALTER TABLE `patient_options_xtxm` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_options_xtxm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_xxgjbjy`
--

DROP TABLE IF EXISTS `patient_options_xxgjbjy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_xxgjbjy` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_F6C54F986B899279` (`patient_id`),
  KEY `IDX_F6C54F983ADB05F1` (`options_id`),
  CONSTRAINT `FK_F6C54F983ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F6C54F986B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_xxgjbjy`
--

LOCK TABLES `patient_options_xxgjbjy` WRITE;
/*!40000 ALTER TABLE `patient_options_xxgjbjy` DISABLE KEYS */;
INSERT INTO `patient_options_xxgjbjy` VALUES (5,86);
/*!40000 ALTER TABLE `patient_options_xxgjbjy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_yy`
--

DROP TABLE IF EXISTS `patient_options_yy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_yy` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_A5DFDD966B899279` (`patient_id`),
  KEY `IDX_A5DFDD963ADB05F1` (`options_id`),
  CONSTRAINT `FK_A5DFDD963ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A5DFDD966B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_yy`
--

LOCK TABLES `patient_options_yy` WRITE;
/*!40000 ALTER TABLE `patient_options_yy` DISABLE KEYS */;
/*!40000 ALTER TABLE `patient_options_yy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_yyjy`
--

DROP TABLE IF EXISTS `patient_options_yyjy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_yyjy` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_286B7E606B899279` (`patient_id`),
  KEY `IDX_286B7E603ADB05F1` (`options_id`),
  CONSTRAINT `FK_286B7E603ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_286B7E606B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_yyjy`
--

LOCK TABLES `patient_options_yyjy` WRITE;
/*!40000 ALTER TABLE `patient_options_yyjy` DISABLE KEYS */;
INSERT INTO `patient_options_yyjy` VALUES (5,135);
/*!40000 ALTER TABLE `patient_options_yyjy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_zrzj`
--

DROP TABLE IF EXISTS `patient_options_zrzj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_zrzj` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_F8F76DE06B899279` (`patient_id`),
  KEY `IDX_F8F76DE03ADB05F1` (`options_id`),
  CONSTRAINT `FK_F8F76DE03ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F8F76DE06B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_zrzj`
--

LOCK TABLES `patient_options_zrzj` WRITE;
/*!40000 ALTER TABLE `patient_options_zrzj` DISABLE KEYS */;
INSERT INTO `patient_options_zrzj` VALUES (5,217),(5,218);
/*!40000 ALTER TABLE `patient_options_zrzj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_zyj`
--

DROP TABLE IF EXISTS `patient_options_zyj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_zyj` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_64EA303E6B899279` (`patient_id`),
  KEY `IDX_64EA303E3ADB05F1` (`options_id`),
  CONSTRAINT `FK_64EA303E3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_64EA303E6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_zyj`
--

LOCK TABLES `patient_options_zyj` WRITE;
/*!40000 ALTER TABLE `patient_options_zyj` DISABLE KEYS */;
INSERT INTO `patient_options_zyj` VALUES (5,208),(5,209);
/*!40000 ALTER TABLE `patient_options_zyj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_options_zytt`
--

DROP TABLE IF EXISTS `patient_options_zytt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_options_zytt` (
  `patient_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  PRIMARY KEY (`patient_id`,`options_id`),
  KEY `IDX_902E92EC6B899279` (`patient_id`),
  KEY `IDX_902E92EC3ADB05F1` (`options_id`),
  CONSTRAINT `FK_902E92EC3ADB05F1` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_902E92EC6B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_options_zytt`
--

LOCK TABLES `patient_options_zytt` WRITE;
/*!40000 ALTER TABLE `patient_options_zytt` DISABLE KEYS */;
INSERT INTO `patient_options_zytt` VALUES (5,82);
/*!40000 ALTER TABLE `patient_options_zytt` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-26 11:55:06
