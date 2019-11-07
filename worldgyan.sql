-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2018 at 12:20 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `worldgyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `wgaddtutorial`
--

CREATE TABLE IF NOT EXISTS `wgaddtutorial` (
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

--
-- Dumping data for table `wgaddtutorial`
--

INSERT INTO `wgaddtutorial` (`wguserid`, `wgusertype`, `wgcategory`, `wgsubcategory`, `wgsubject`, `wgtitle`, `wgdiscription`, `wgfilename`, `wgfiletype`, `Subtitle`, `wgtime`) VALUES
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'C Programming Basic', ' ', '1CProgrammingBasic.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Character Representation', ' ', '2CharacterRepresentation.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Operaters in C', ' ', '3OperatersiNC.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Some Boolean Identities', ' ', '4SomeBooleaIdentities.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Branching', ' ', '5Branching.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Looping', ' ', '6Looping.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Functions', ' ', '7Functions.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Some Program', ' ', '8SomeProgram.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Abstract DataTypes (ADT)', ' ', 'AbstractDataTypes(ADT).pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Program Example2', ' ', '9ProgramExample2.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Storage Class', ' ', '10StorageClass.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C Programming', 'Two Dimensional Array', ' ', 'TwoDimensionalArray.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'The Hysteres is Loop and Magnetic Properties', ' ', 'TheHysteresisLoopandMagneticProperties.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Expression Tree', ' ', 'ExpressionTree.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Abstract DataTypes (ADT) Dox', ' ', 'AbstractDataTypes(ADT)Dox.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Algorithm (REPRESENTATION  OF SPARSE MATRIX)', ' ', 'Algorithm(REPRESENTATIONOFSPARSEMATRIX).doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Binary Trees', ' ', 'BinaryTrees.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Data Structure Basics & Concepts of Abstract Data Types', ' ', 'DataStructureBasics&ConceptsofAbstractDataTypes.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Data Structure Q&A', ' ', 'DataStructureQ&A.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Graph', ' ', 'Graph.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'GRAPH TERMINOLOGY', ' ', 'GRAPHTERMINOLOGY.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'HASHING TECHNIQUES', ' ', 'HASHINGTECHNIQUES.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Infix-Postfix', ' ', 'Infix-Postfix.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Infix To Prefix Conversion', ' ', 'InfixToPrefixConversion.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Introduction Of Data Structure', ' ', 'IntroductionOfDataStructure.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Multiway Search Tree', ' ', 'MultiwaySearchTree.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Operationson Binary search Tree', ' ', 'OperationsonBinarysearchTree.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Prefix Evaluation', ' ', 'PrefixEvaluation.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program (OPERATIONSON STACKS)', ' ', 'Program(OPERATIONSONSTACKS).doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program(BINARY SEARCH OF ASORTED ARRAY)', ' ', 'Program(BINARYSEARCHOFASORTEDARRAY).doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program (LINEAR QUEUE with the initial condition front =–1and rear =–1)', ' ', 'Program(LINEARQUEUEwiththeinitialconditionfront=–1andrear=–1).doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program (SORTINGOF LINKED LIST AT THE TIME OF INSERTION)', ' ', 'Program(SORTINGOFLINKEDLISTATTHETIMEOFINSERTION).doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program 1', ' ', 'Program1.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Program 2', ' ', 'Program2.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Queue Data Structure', ' ', 'QueueDataStructure.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'QUICK SORT', ' ', 'QUICKSORT.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Representation of Trees', ' ', 'RepresentationofTrees.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Stack Application To Convert Decimal Number To Binary ,octal ,hexadecimal', ' ', 'StackApplicationToConvertDecimalNumberToBinary,octal,hexadecimal.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'STACKS', ' ', 'STACKS.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Storage Management', ' ', 'StorageManagement.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'TREE', ' ', 'TREE.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Treees', ' ', 'Treees.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Data Structure', 'Treees', ' ', 'Treees.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Basic Concepts of OOP in C++', ' ', 'BasicConceptsofOOPinC++.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Basic Input Output', ' ', 'BasicInputOutput.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'C++ Inheritance', ' ', 'C++Inheritance.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'C++ Q&A', ' ', 'C++Q&A.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Templates 1', ' ', 'Templates1.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'C++ Q&A 2', ' ', 'C++Q&A2.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'TEMPLATES', ' ', 'TEMPLATES.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'C++ Q&A 3', ' ', 'C++Q&A3.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Q&A 5', ' ', 'Q&A5.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Classes & Objects', ' ', 'Classes&Objects.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Pointers and Dynamic Arrays', ' ', 'PointersandDynamicArrays.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Constructors', ' ', 'Constructors.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Exception Handling', ' ', 'ExceptionHandling.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Pointers and Dynamic Arrays', ' ', 'PointersandDynamicArrays.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'File', ' ', 'file.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Friend Function', ' ', 'FriendFunction.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Inheritance', ' ', 'Inheritance.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Pointers and Dynamic Arrays', ' ', 'PointersandDynamicArrays.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Polymorphism', ' ', 'Polymorphism.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Inline Functions in C++', ' ', 'InlineFunctionsinC++.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Object Oriented Programming through C++', ' ', 'ObjectOrientedProgrammingthroughC++.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'programe 3', ' ', 'programe3.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Stacks and Queues', ' ', 'StacksandQueues.ppt', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'OOPS', ' ', 'OOPS.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Standard C++ programming', ' ', 'StandardC++programming.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Operator Overloading', ' ', 'OperatorOverloading.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'TEMPLATES 4', ' ', 'TEMPLATES4.pdf', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'pointer 2', ' ', 'pointer2.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Type Conversion', ' ', 'TypeConversion.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'C++', 'Pointers,References and Dynamic Memory Allocation', ' ', 'Pointers,ReferencesandDynamicMemoryAllocation.doc', 'File', NULL, '2018-01-02 05:03:10'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'The foundal element Of Instrumentation', ' ', 'ThefoundalelementOfInstrumentation.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Static Dynamic Characteristics of Instruments', ' ', 'StaticDynamicCharacteristicsofInstruments.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Telemetry', ' ', 'Telemetry.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Computer Science', 'Java', 'Syntax Errors, Runtime Errors, and Logic Errors', ' ', 'SyntaxErrors,RuntimeErrors,andLogicErrors.ppt', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'Root Locus Technique', ' ', 'RootLocusTechnique.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'Root Locus Technique Example', ' ', 'RootLocusTechniqueExample.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'NyQuist Diagram', ' ', 'NyQuisiteDiagram.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'NyQuist Stability criteria', ' ', 'NyQuistStabilitycriteria.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'Mansons rule example', ' ', 'mansonsruleexample.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'routh harvitz ', ' ', 'routhharvitz.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Automation', 'Automation & Controls', ' ', 'Automation&Controls.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Automation', 'Introduction to Programmable Logic Controllers –Part II', ' ', 'IntroductiontoProgrammableLogicControllers–PartII.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Automation', 'Mechatronics Q&A', ' ', 'MechatronicsQ&A.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Angle Modulation', ' ', 'AngleModulation.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Chromatography', ' ', 'Chromatography.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Combustion System of a boiler', ' ', 'CombustionSystemofaboiler.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Digital Modulation', ' ', 'DigitalModulation.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Errors An Overview', ' ', 'ErrorsAnOverview.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Fundamental of Power Plant', ' ', 'FundamentalofPowerPlant.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'ingress protection', ' ', 'ingressprotection.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'MAGNETIC WIND TYPE PARA MAGNETICGASA NALYZER', ' ', 'MAGNETICWINDTYPEPARAMAGNETICGASANALYZER.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Modulation', ' ', 'Modulation.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'NEMA', ' ', 'NEMA.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'SAFETY AND HAZARDS', ' ', 'SAFETYANDHAZARDS.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'controll Systam Q&A', ' ', 'controllSystamQ&A.pdf', 'File', ' ', '2017-12-10 18:30:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'Programmable Logic Controllers part 1', ' ', 'ProgrammableLogicControllerspart1.doc', 'File', ' ', '2017-12-10 18:30:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Control System', 'Programmable Logic Controllers part 2', ' ', 'ProgrammableLogicControllerspart2.doc', 'File', ' ', '2017-12-10 18:30:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'THEPOWER PLANT SCHEME', ' ', 'THEPOWERPLANTSCHEME.doc', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Industrial Instrumentation', 'Wireless Telemetry', ' ', 'WirelessTelemetry.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Sprituality', 'Purans', 'Srimad Bhagavatam', 'Srimad_Bhagavatam_Canto_01_Hindi', ' ', 'Srimad_Bhagavatam_Canto_01_Hindi.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Sprituality', 'Purans', 'Srimad Bhagavatam', 'Srimad_Bhagavatam_Canto_02_part1_Hindi', ' ', 'Srimad_Bhagavatam_Canto_02_part1_Hindi.pdf', 'File', ' ', '0000-00-00 00:00:00'),
(0, 'admin', 'Sprituality', 'Purans', 'Srimad Bhagavatam', 'fgjhuy', 'tuyh', ' ', 'text', 'rftuyh', '0000-00-00 00:00:00'),
(0, 'admin', 'Sprituality', 'Purans', 'Srimad Bhagavatam', 'fgjhuy', 'tuyh', ' ', 'text', 'rftuyh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '0000-00-00 00:00:00'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', 'Array', ' ', 'text', 'dfhfh', '2018-01-02 05:04:08'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', ' ', 'ArrayofObjects.doc', 'File', ' ', '2018-01-02 05:05:31'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', ' ', 'ArrayofObjects.doc', 'File', ' ', '2018-01-02 05:06:17'),
(0, 'admin', 'Science and Technology', 'Electrical', 'Power Quality', 'dfsvd', ' ', 'ArrayofObjects.doc', 'File', ' ', '2018-01-02 05:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `wgcareer`
--

CREATE TABLE IF NOT EXISTS `wgcareer` (
  `name` varchar(200) DEFAULT NULL,
  `mobnum` int(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `wgtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wgcareer`
--

INSERT INTO `wgcareer` (`name`, `mobnum`, `email`, `website`, `resume`, `wgtime`) VALUES
('rtg', 45654, 'tr', 'yrt', 'Array', '2018-01-12 10:53:04'),
('rtg', 45654, 'tr', 'yrt', 'Array', '2018-01-12 10:53:04'),
('rtg', 45654, 'tr', 'yrt', 'Array', '2018-01-12 10:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `wgcontact`
--

CREATE TABLE IF NOT EXISTS `wgcontact` (
  `name` varchar(200) DEFAULT NULL,
  `mobnum` int(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `discription` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wgcontact`
--

INSERT INTO `wgcontact` (`name`, `mobnum`, `email`, `website`, `subject`, `discription`) VALUES
('sgv', 56385, 'fdgbfdgb', 'fbdf', 'bd fbh', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `wgsubject`
--

CREATE TABLE IF NOT EXISTS `wgsubject` (
  `wgsubjectid` int(100) NOT NULL,
  `wgsubjectname` varchar(200) NOT NULL,
  `wgcategory` varchar(100) NOT NULL,
  `wgsubcategory` varchar(100) NOT NULL,
  `wgbranch` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wgsubject`
--

INSERT INTO `wgsubject` (`wgsubjectid`, `wgsubjectname`, `wgcategory`, `wgsubcategory`, `wgbranch`) VALUES
(1, 'C Programming', 'Science and Technology', 'Computer Science', 'Science and Technology'),
(2, 'Java', 'Science and Technology', 'Computer Science', NULL),
(3, 'Control System', 'Science and Technology', 'Electrical', NULL),
(4, 'Data Structure', 'Science And Technology', 'Computer Science', NULL),
(5, 'C++', 'Science And Technology', 'Computer Science', NULL),
(6, 'DBMS', 'Science and Technology', 'Computer Science', NULL),
(7, 'Advance Power Electronics', 'Science and Technology', 'Electrical', NULL),
(8, 'Automation', 'Science and Technology', 'Electrical', NULL),
(9, 'Industrial Instrumentation', 'Science and Technology', 'Electrical', NULL),
(10, 'Power Quality', 'Science and Technology', 'Electrical', NULL),
(11, 'Satellite Communication', 'Science and Technology', 'Electrical', NULL),
(12, 'Srimad Bhagavatam', 'Sprituality', 'Purans', NULL),
(13, 'Bhagawat Gita', 'Sprituality', 'Bhagawat Gita', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wgtutorial`
--

CREATE TABLE IF NOT EXISTS `wgtutorial` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
