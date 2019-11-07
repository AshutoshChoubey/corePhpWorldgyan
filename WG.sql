-- MySQL dump 10.13  Distrib 5.6.39, for Linux (x86_64)
--
-- Host: localhost    Database: WG
-- ------------------------------------------------------
-- Server version	5.6.39-cll-lve

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
-- Table structure for table `wgaddtutorial`
--

DROP TABLE IF EXISTS `wgaddtutorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wgaddtutorial` (
  `wguserid` int(100) NOT NULL,
  `wgusertype` varchar(100) NOT NULL,
  `wgcategory` varchar(100) NOT NULL,
  `wgsubcategory` varchar(100) NOT NULL,
  `wgsubject` varchar(300) NOT NULL,
  `wgtitle` varchar(300) NOT NULL,
  `wgdiscription` text NOT NULL,
  `wgfilename` varchar(100) NOT NULL,
  `wgfiletype` varchar(100) NOT NULL,
  `Subtitle` varchar(100) DEFAULT NULL,
  `wgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wgaddtutorial`
--

LOCK TABLES `wgaddtutorial` WRITE;
/*!40000 ALTER TABLE `wgaddtutorial` DISABLE KEYS */;
INSERT INTO `wgaddtutorial` (`wguserid`, `wgusertype`, `wgcategory`, `wgsubcategory`, `wgsubject`, `wgtitle`, `wgdiscription`, `wgfilename`, `wgfiletype`, `Subtitle`, `wgtime`) VALUES (0,'admin','Science and Technology','Computer Science','C Programming','C Programming Basic',' ','1CProgrammingBasic.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Character Representation',' ','2CharacterRepresentation.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Operaters in C',' ','3OperatersiNC.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Some Boolean Identities',' ','4SomeBooleaIdentities.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Branching',' ','5Branching.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Looping',' ','6Looping.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Functions',' ','7Functions.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Some Program',' ','8SomeProgram.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Abstract DataTypes (ADT)',' ','AbstractDataTypes(ADT).pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Program Example2',' ','9ProgramExample2.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Storage Class',' ','10StorageClass.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C Programming','Two Dimensional Array',' ','TwoDimensionalArray.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','The Hysteres is Loop and Magnetic Properties',' ','TheHysteresisLoopandMagneticProperties.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Computer Science','Data Structure','Expression Tree',' ','ExpressionTree.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Abstract DataTypes (ADT) Dox',' ','AbstractDataTypes(ADT)Dox.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Algorithm (REPRESENTATION  OF SPARSE MATRIX)',' ','Algorithm(REPRESENTATIONOFSPARSEMATRIX).doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Binary Trees',' ','BinaryTrees.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Data Structure Basics & Concepts of Abstract Data Types',' ','DataStructureBasics&ConceptsofAbstractDataTypes.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Data Structure Q&A',' ','DataStructureQ&A.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Graph',' ','Graph.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','GRAPH TERMINOLOGY',' ','GRAPHTERMINOLOGY.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','HASHING TECHNIQUES',' ','HASHINGTECHNIQUES.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Infix-Postfix',' ','Infix-Postfix.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Infix To Prefix Conversion',' ','InfixToPrefixConversion.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Introduction Of Data Structure',' ','IntroductionOfDataStructure.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Multiway Search Tree',' ','MultiwaySearchTree.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Operationson Binary search Tree',' ','OperationsonBinarysearchTree.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Prefix Evaluation',' ','PrefixEvaluation.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program (OPERATIONSON STACKS)',' ','Program(OPERATIONSONSTACKS).doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program(BINARY SEARCH OF ASORTED ARRAY)',' ','Program(BINARYSEARCHOFASORTEDARRAY).doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program (LINEAR QUEUE with the initial condition front =–1and rear =–1)',' ','Program(LINEARQUEUEwiththeinitialconditionfront=–1andrear=–1).doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program (SORTINGOF LINKED LIST AT THE TIME OF INSERTION)',' ','Program(SORTINGOFLINKEDLISTATTHETIMEOFINSERTION).doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program 1',' ','Program1.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Program 2',' ','Program2.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Queue Data Structure',' ','QueueDataStructure.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','QUICK SORT',' ','QUICKSORT.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Representation of Trees',' ','RepresentationofTrees.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Stack Application To Convert Decimal Number To Binary ,octal ,hexadecimal',' ','StackApplicationToConvertDecimalNumberToBinary,octal,hexadecimal.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','STACKS',' ','STACKS.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Storage Management',' ','StorageManagement.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','TREE',' ','TREE.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Treees',' ','Treees.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','Data Structure','Treees',' ','Treees.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Basic Concepts of OOP in C++',' ','BasicConceptsofOOPinC++.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Basic Input Output',' ','BasicInputOutput.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','C++ Inheritance',' ','C++Inheritance.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','C++ Q&A',' ','C++Q&A.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Templates 1',' ','Templates1.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','C++ Q&A 2',' ','C++Q&A2.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','TEMPLATES',' ','TEMPLATES.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','C++ Q&A 3',' ','C++Q&A3.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Q&A 5',' ','Q&A5.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Classes & Objects',' ','Classes&Objects.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Pointers and Dynamic Arrays',' ','PointersandDynamicArrays.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Constructors',' ','Constructors.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Exception Handling',' ','ExceptionHandling.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Pointers and Dynamic Arrays',' ','PointersandDynamicArrays.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','File',' ','file.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Friend Function',' ','FriendFunction.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Inheritance',' ','Inheritance.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Pointers and Dynamic Arrays',' ','PointersandDynamicArrays.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Polymorphism',' ','Polymorphism.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Inline Functions in C++',' ','InlineFunctionsinC++.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Object Oriented Programming through C++',' ','ObjectOrientedProgrammingthroughC++.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','programe 3',' ','programe3.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Stacks and Queues',' ','StacksandQueues.ppt','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','OOPS',' ','OOPS.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Standard C++ programming',' ','StandardC++programming.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Operator Overloading',' ','OperatorOverloading.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','TEMPLATES 4',' ','TEMPLATES4.pdf','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','pointer 2',' ','pointer2.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Type Conversion',' ','TypeConversion.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Computer Science','C++','Pointers,References and Dynamic Memory Allocation',' ','Pointers,ReferencesandDynamicMemoryAllocation.doc','File',NULL,'2018-01-02 05:03:10'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','The foundal element Of Instrumentation',' ','ThefoundalelementOfInstrumentation.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Static Dynamic Characteristics of Instruments',' ','StaticDynamicCharacteristicsofInstruments.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Telemetry',' ','Telemetry.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Computer Science','Java','Syntax Errors, Runtime Errors, and Logic Errors',' ','SyntaxErrors,RuntimeErrors,andLogicErrors.ppt','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','Root Locus Technique',' ','RootLocusTechnique.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','Root Locus Technique Example',' ','RootLocusTechniqueExample.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','NyQuist Diagram',' ','NyQuisiteDiagram.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','NyQuist Stability criteria',' ','NyQuistStabilitycriteria.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','Mansons rule example',' ','mansonsruleexample.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','routh harvitz ',' ','routhharvitz.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Automation','Automation & Controls',' ','Automation&Controls.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Automation','Introduction to Programmable Logic Controllers –Part II',' ','IntroductiontoProgrammableLogicControllers–PartII.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Automation','Mechatronics Q&A',' ','MechatronicsQ&A.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Angle Modulation',' ','AngleModulation.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Chromatography',' ','Chromatography.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Combustion System of a boiler',' ','CombustionSystemofaboiler.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Digital Modulation',' ','DigitalModulation.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Errors An Overview',' ','ErrorsAnOverview.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Fundamental of Power Plant',' ','FundamentalofPowerPlant.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','ingress protection',' ','ingressprotection.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','MAGNETIC WIND TYPE PARA MAGNETICGASA NALYZER',' ','MAGNETICWINDTYPEPARAMAGNETICGASANALYZER.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Modulation',' ','Modulation.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','NEMA',' ','NEMA.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','SAFETY AND HAZARDS',' ','SAFETYANDHAZARDS.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Control System','controll Systam Q&A',' ','controllSystamQ&A.pdf','File',' ','2017-12-10 18:30:00'),(0,'admin','Science and Technology','Electrical','Control System','Programmable Logic Controllers part 1',' ','ProgrammableLogicControllerspart1.doc','File',' ','2017-12-10 18:30:00'),(0,'admin','Science and Technology','Electrical','Control System','Programmable Logic Controllers part 2',' ','ProgrammableLogicControllerspart2.doc','File',' ','2017-12-10 18:30:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','THEPOWER PLANT SCHEME',' ','THEPOWERPLANTSCHEME.doc','File',' ','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Industrial Instrumentation','Wireless Telemetry',' ','WirelessTelemetry.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Sprituality','Purans','Srimad Bhagavatam','Srimad_Bhagavatam_Canto_01_Hindi',' ','Srimad_Bhagavatam_Canto_01_Hindi.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Sprituality','Purans','Srimad Bhagavatam','Srimad_Bhagavatam_Canto_02_part1_Hindi',' ','Srimad_Bhagavatam_Canto_02_part1_Hindi.pdf','File',' ','0000-00-00 00:00:00'),(0,'admin','Sprituality','Purans','Srimad Bhagavatam','fgjhuy','tuyh',' ','text','rftuyh','0000-00-00 00:00:00'),(0,'admin','Sprituality','Purans','Srimad Bhagavatam','fgjhuy','tuyh',' ','text','rftuyh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','0000-00-00 00:00:00'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd','Array',' ','text','dfhfh','2018-01-02 05:04:08'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd',' ','ArrayofObjects.doc','File',' ','2018-01-02 05:05:31'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd',' ','ArrayofObjects.doc','File',' ','2018-01-02 05:06:17'),(0,'admin','Science and Technology','Electrical','Power Quality','dfsvd',' ','ArrayofObjects.doc','File',' ','2018-01-02 05:17:08');
/*!40000 ALTER TABLE `wgaddtutorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wgcareer`
--

DROP TABLE IF EXISTS `wgcareer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wgcareer` (
  `name` varchar(200) DEFAULT NULL,
  `mobnum` int(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `wgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wgcareer`
--

LOCK TABLES `wgcareer` WRITE;
/*!40000 ALTER TABLE `wgcareer` DISABLE KEYS */;
INSERT INTO `wgcareer` (`name`, `mobnum`, `email`, `website`, `resume`, `wgtime`) VALUES ('rtg',45654,'tr','yrt','Array','2018-01-12 10:53:04'),('rtg',45654,'tr','yrt','Array','2018-01-12 10:53:04'),('rtg',45654,'tr','yrt','Array','2018-01-12 10:55:02');
/*!40000 ALTER TABLE `wgcareer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wgcontact`
--

DROP TABLE IF EXISTS `wgcontact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wgcontact` (
  `name` varchar(200) DEFAULT NULL,
  `mobnum` int(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `discription` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wgcontact`
--

LOCK TABLES `wgcontact` WRITE;
/*!40000 ALTER TABLE `wgcontact` DISABLE KEYS */;
INSERT INTO `wgcontact` (`name`, `mobnum`, `email`, `website`, `subject`, `discription`) VALUES ('sgv',56385,'fdgbfdgb','fbdf','bd fbh','dfg'),('SEOpraft',0,'esgruffunchee1997@seocdvig.ru','seorussian.ru','ÐŸÑ€Ð¾Ð´Ð²Ð¸Ð¶ÐµÐ½Ð¸Ðµ ÑÐ°Ð¹Ñ‚Ð¾Ð² - Ð¡Ð¾Ð·Ð´Ð°Ð½Ð¸Ðµ ÑÐ°Ð¹Ñ‚Ð¾Ð²','<a href=http://seorussian.ru>seorussian.ru</a> -  <a href=http://seorussian.ru>Ð Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ° ÑÐ°Ð¹Ñ‚Ð°</a> '),('Write My Essay Cheap ',0,'speedshopsound@evropost.top ','http://researchpaper.store ','czanpnmr','research paper <a href=\"http://researchpaper.store\">high school research paper</a> research paper <a href=http://researchpaper.store>college research paper</a> '),('Write Essays For Me ',0,'zenainnj@evropost.top ','http://researchpaper.store ','rkogaiwo','research papers <a href=\"http://researchpaper.store\">college research paper</a> writing a research paper apa <a href=http://researchpaper.store>research paper 2nd grade</a> '),('Essays Writing ',0,'grogers10@evropost.top ','http://researchpaper.store ','nwynmeof','good research paper <a href=\"http://researchpaper.store\">good research paper</a> research paper <a href=http://researchpaper.store>college research paper</a> '),('Essay Writer Review ',0,'grahammpayne@mailllc.top ','http://researchpaper.store ','xxdtrggl','science research proposal <a href=\"http://researchpaper.store\">pay to do my research paper</a> research papers http://researchpaper.store - research paper '),('Write An Essay ',0,'raquelhepp@regiopost.top ','http://researchpaper.store ','qyfaqvez','good research paper <a href=\"http://researchpaper.store\">research papers</a> easy research paper <a href=http://researchpaper.store>research paper</a> '),('FuckVaw',0,'natalia-semshova@mail.ru','https://soyuz-magov-rossii.com','soyuz-magov-rossii.com - ÐµÐ±Ð»Ð°Ð½Ñ‹',' \r\n<a href=https://soyuz-magov-rossii.com>Fuck you</a> '),('Homeworks Of America ',0,'nmaudsley@rainmail.top ','http://researchpaper.store ','dzfaknow','research paper <a href=\"http://researchpaper.store\">research paper</a> writing a research proposal <a href=http://researchpaper.store>good research paper</a> '),('Buy Custom Essays ',0,'jwysel@pochtar.top ','http://researchpaper.store ','jelaexyj','research paper <a href=\"http://researchpaper.store\">good research paper</a> college research paper http://researchpaper.store - writing a research proposal '),('Writers Online ',0,'debroah@pochtar.top ','http://researchpaper.store ','odajezyy','research paper <a href=\"http://researchpaper.store\">high school research paper</a> good research paper <a href=http://researchpaper.store>research paper hooks</a> '),('OtelVaw',0,'zutletihand1982@seocdvig.ru','http://vladimir-otel.ru','ÐžÑ‚ÐµÐ»ÑŒ ÐÐ¸Ð¶Ð½Ð¸Ð¹ ÐÐ¾Ð²Ð³Ð¾Ñ€Ð¾Ð´','ÐÐµÐ´Ð¾Ñ€Ð¾Ð³Ð¾Ð¹ Ð¾Ñ‚ÐµÐ»ÑŒ Ð’Ð»Ð°Ð´Ð¸Ð¼Ð¸Ñ€ÑÐºÐ¸Ð¹ Ð½Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑÑ Ñ€ÑÐ´Ð¾Ð¼ Ñ Ñ†ÐµÐ½Ñ‚Ñ€Ð¾Ð¼ ÐÐ¸Ð¶Ð½ÐµÐ³Ð¾ ÐÐ¾Ð²Ð³Ð¾Ñ€Ð¾Ð´Ð°. Ð‘Ð»Ð¸Ð¶Ð°Ð¹ÑˆÐ°Ñ ÑÑ‚Ð°Ð½Ñ†Ð¸Ñ Ð¼ÐµÑ‚Ñ€Ð¾ Ð›ÐµÐ½Ð¸Ð½ÑÐºÐ°Ñ Ð½Ð°Ñ…Ð¾Ð´Ð¸Ñ‚ÑÑ Ð² 640 Ð¼ Ð¾Ñ‚ Ð³Ð¾ÑÑ‚Ð¸Ð½Ð¸Ñ†Ñ‹, Ñ‡Ñ‚Ð¾ Ð¿Ð¾Ð·Ð²Ð¾Ð»ÑÐµÑ‚ Ð¿Ð¾Ð¿Ð°ÑÑ‚ÑŒ Ð² Ñ†ÐµÐ½Ñ‚Ñ€ Ð³Ð¾Ñ€Ð¾Ð´Ð° Ð·Ð° 10-15 Ð¼Ð¸Ð½ÑƒÑ‚. Ð“Ð¾ÑÑ‚Ð¸Ð½Ð¸Ñ†Ð° Ñ€Ð°ÑÐ¿Ð¾Ð»Ð°Ð³Ð°ÐµÑ‚ÑÑ Ð² ÐÐ¸Ð¶Ð½ÐµÐ¼ ÐÐ¾Ð²Ð³Ð¾Ñ€Ð¾Ð´Ðµ Ñ€ÑÐ´Ð¾Ð¼ Ñ Ð–Ð” Ð²Ð¾ÐºÐ·Ð°Ð»Ð¾Ð¼. \r\n \r\nhttp://vladimir-otel.ru - Ð“Ð¾ÑÑ‚Ð¸Ð½Ð¸Ñ†Ð° ÐÐ¸Ð¶Ð½Ð¸Ð¹ ÐÐ¾Ð²Ð³Ð¾Ñ€Ð¾Ð´ '),('Homework For Pre K ',0,'janherron@mailllc.top ','http://researchpaper.store ','juwnfhgf','research paper <a href=\"http://researchpaper.store\">research papers</a> a research paper <a href=http://researchpaper.store>good research paper</a> '),('My Paper Writer ',0,'rosalie@rainmail.top ','http://researchpaper.store ','wannooca','research paper <a href=\"http://researchpaper.store\">high school research paper</a> research paper college <a href=http://researchpaper.store>high school research paper</a> ');
/*!40000 ALTER TABLE `wgcontact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wgsubject`
--

DROP TABLE IF EXISTS `wgsubject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wgsubject` (
  `wgsubjectid` int(100) NOT NULL,
  `wgsubjectname` varchar(200) NOT NULL,
  `wgcategory` varchar(100) NOT NULL,
  `wgsubcategory` varchar(100) NOT NULL,
  `wgbranch` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wgsubject`
--

LOCK TABLES `wgsubject` WRITE;
/*!40000 ALTER TABLE `wgsubject` DISABLE KEYS */;
INSERT INTO `wgsubject` (`wgsubjectid`, `wgsubjectname`, `wgcategory`, `wgsubcategory`, `wgbranch`) VALUES (1,'C Programming','Science and Technology','Computer Science','Science and Technology'),(2,'Java','Science and Technology','Computer Science',NULL),(3,'Control System','Science and Technology','Electrical',NULL),(4,'Data Structure','Science And Technology','Computer Science',NULL),(5,'C++','Science And Technology','Computer Science',NULL),(6,'DBMS','Science and Technology','Computer Science',NULL),(7,'Advance Power Electronics','Science and Technology','Electrical',NULL),(8,'Automation','Science and Technology','Electrical',NULL),(9,'Industrial Instrumentation','Science and Technology','Electrical',NULL),(10,'Power Quality','Science and Technology','Electrical',NULL),(11,'Satellite Communication','Science and Technology','Electrical',NULL),(12,'Srimad Bhagavatam','Sprituality','Purans',NULL),(13,'Bhagawat Gita','Sprituality','Bhagawat Gita',NULL);
/*!40000 ALTER TABLE `wgsubject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wgtutorial`
--

DROP TABLE IF EXISTS `wgtutorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wgtutorial` (
  `wguserid` int(100) DEFAULT NULL,
  `wgusertype` varchar(100) DEFAULT NULL,
  `wgcategory` varchar(100) DEFAULT NULL,
  `wgsubcategory` varchar(100) DEFAULT NULL,
  `wgsubject` varchar(300) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `titleid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subtitle` varchar(500) DEFAULT NULL,
  `subtitleid` int(100) DEFAULT NULL,
  `discription` text,
  `subtitleoneid` int(100) DEFAULT NULL,
  `subtitleone` varchar(500) DEFAULT NULL,
  `textone` text,
  `subtitletwoid` int(100) DEFAULT NULL,
  `subtitletwo` varchar(500) DEFAULT NULL,
  `texttwo` text,
  `subtitlethreeid` int(100) DEFAULT NULL,
  `subtitlethree` varchar(500) DEFAULT NULL,
  `textthree` text,
  `wgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `titleid` (`titleid`),
  UNIQUE KEY `titleid_2` (`titleid`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wgtutorial`
--

LOCK TABLES `wgtutorial` WRITE;
/*!40000 ALTER TABLE `wgtutorial` DISABLE KEYS */;
/*!40000 ALTER TABLE `wgtutorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'WG'
--

--
-- Dumping routines for database 'WG'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-23  8:16:34
