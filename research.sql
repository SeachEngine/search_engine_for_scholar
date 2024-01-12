-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 05:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `author_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `tag`, `description`, `link`, `author_name`) VALUES
(1, 'what is database?', 'database,data,dbms,rdbms', 'A database is an organized collection of structured information, or data, typically stored electronically in a computer system. A database is usually controlled by a database management system (DBMS). Together, the data and the DBMS, along with the applications that are associated with them, are referred to as a database system, often shortened to just database.', 'https://www.oracle.com/in/database/what-is-database/#:~:text=Is%20a%20Database%3F-,Database%20defined,database%20management%20system%20(DBMS', 'Oracle'),
(2, 'tell something about google scholar', 'scholar,google scholar,scholar database,WHAT IS GO', 'Google searches public Web content. Your teacher says \"Don\'t use Google,\" meaning that you should not use the public Web content.\r\n\r\nGoogle Scholar is different. It searches the same kinds of scholarly books, articles, and documents that you search in the Library\'s catalog and databases. The scholarly, authoritative focus of Google Scholar distinguishes it from ordinary Google.', 'https://library.shsu.edu/research/guides/tutorials/googlescholar/index.html#:~:text=Google%20Scholar%20is%20a%20Web,scholarly%20literature%20and%20academic%20resources.', 'unknown'),
(3, 'Requirement Engineering', 'S/w engineering,RE,Requirement engineering,SRS', 'Requirements engineering is the process of identifying, eliciting, analyzing, specifying, validating, and managing the needs and expectations of stakeholders for a software system.', 'https://www.geeksforgeeks.org/software-engineering-requirements-engineering-process/', 'GFG'),
(4, 'Binary Search and Binary Search Working', 'Binary Search, dsa, BS, Algorithm, algo', 'Binary Search is a searching algorithm for finding an element\'s position in a sorted array.\r\nIn this approach, the element is always searched in the middle of a portion of an array.\r\nBinary search can be implemented only on a sorted list of items. If the elements are not sorted already, we need to sort them first.\r\nBinary Search Working:- \r\nBinary Search Algorithm can be implemented in two ways which are discussed below.\r\n\r\n1. Iterative Method\r\n2. Recursive Method', 'https://www.programiz.com/dsa/binary-search', 'Programiz'),
(5, 'What Is An Algorithm? Definition, Types, Characteristics', 'Algorithm, algo,', 'What is an Algorithm?\r\nAn algorithm is a set of commands that must be followed for a computer to perform calculations or other problem-solving operations.According to its formal definition, an algorithm is a finite set of instructions carried out in a specific order to perform a particular task. It is not the entire program or code; it is simple logic to a problem represented as an informal description in the form of a flowchart or pseudocode.', 'https://www.simplilearn.com/tutorials/data-structure-tutorial/what-is-an-algorithm', 'simplilearn'),
(6, 'Financial Crisis: Definition, Causes, and Examples', 'Financial Crisis, Financial , cricis', 'What Is a Financial Crisis?\r\nIn a financial crisis, asset prices see a steep decline in value, businesses and consumers are unable to pay their debts, and financial institutions experience liquidity shortages. A financial crisis is often associated with a panic or a bank run during which investors sell off assets or withdraw money from savings accounts because they fear that the value of those assets will drop if they remain in a financial institution.', 'https://www.investopedia.com/terms/f/financial-crisis.asp', 'Will Kenton, Investopedia'),
(7, 'What Is a Computer Network? Definition, Objectives, Components, Types, and Best Practices', 'Computer Network, cn, network,', '\r\nA computer network is defined as a system that connects two or more computing devices for transmitting and sharing information. This article explains computer network in detail, along with its types, components, and best practices for 2022.\r\n\r\nA computer network is a system that connects two or more computing devices for transmitting and sharing information. Computing devices include everything from a mobile phone to a server. These devices are connected using physical wires such as fiber optics, but they can also be wireless.', 'https://www.spiceworks.com/tech/networking/articles/what-is-a-computer-network/', 'Ramya Mohanakrishnan, IT Specialist'),
(8, 'What is Sustainable Development?  Sustainable Development Goals, Achieving Sustainable Development', 'Sustainable Development , Sustainable Development ', 'Sustainable development can be defined as an approach to the economic development of a country without compromising with the quality of the environment for future generations. In the name of economic development, the price of environmental damage is paid in the form of land degradation, soil erosion, air and water pollution, deforestation, etc. This damage may surpass the advantages of having more quality output of goods and services.', 'https://byjus.com/commerce/meaning-and-features-of-sustainable-development/', 'BYJU\'S'),
(9, 'What Is The Impact Of Artificial Intelligence (AI) On Society? And Challenges to be faced.', 'AI, Impact Of Artificial Intelligence, Artificial ', 'As with most changes in life, there will be positive and negative impacts on society as artificial intelligence continues to transform the world we live in. How that will balance out is anyone’s guess and up for much debate and for many people to contemplate. As an optimist at heart, I believe the changes will mostly be good but could be challenging for some. Here are some of the challenges that might be faced (and we should be thinking about how to address them now) as well as several of the positive impacts artificial intelligence will have on society.', 'https://bernardmarr.com/what-is-the-impact-of-artificial-intelligence-ai-on-society/', 'Bernard Marr'),
(10, 'WHAT IS CLIMATE CHANGE? WHAT CAUSES CLIMATE CHANGE?', 'CLIMATE CHANGE, CLIMATE ', 'Widespread improvements in the quality of life of many of the world’s populations have gone hand-in-hand with increased demands on natural resources. The planet is struggling to keep up. Increases in the average global temperature, and the frequency of extreme weather events are transforming ecosystems around the world and threatening entire species of plants and animals. Forests are drying up because there is less rainfall and thus more fires, and the glaciers of both the North and South Poles are shrinking. The consequences of climate change affect all of us, but to react and adapt to these challenges, we must first understand them.', 'https://climate.peopleinneed.net/climate-change?gad_source=1&gclid=EAIaIQobChMIud3p7czVgwMVKKVmAh3A0wZPEAAYASAAEgJ0mfD_BwE', 'People in Need'),
(11, 'Renewable Energy: Everything You Need to Know', 'Renewable Energy, energy , Renewable', 'Renewable energy refers to energy that comes from naturally regenerating sources. These energy sources are sustainable because they can be used without running out of resources or causing major harm to the environment.\r\n\r\nExamples of renewable energy include wind power, solar power, bioenergy (generated from organic matter known as biomass) and hydroelectric, including wave and tidal energy.', 'https://www.globalcitizen.org/en/content/what-is-renewable-energy-climate-explainer/?gclid=EAIaIQobChMIrpPkjc_VgwMV-RWDAx094AKgEAAYAiAAEgLGavD_BwE', 'Angi Varrial, GLOBAL CITIZEN'),
(12, 'Blockchain technology: What it is, benefits, and its cross-industry applications', 'Blockchain technology, Blockchain , technology, te', 'Blockchain is a tamper-proof, sequential ledger based on cryptographic principles. It’s designed to create trust in the timeliness, accuracy, security, and speed of transactions.\r\n\r\nA blockchain arranges its entries sequentially; each entry includes encryption of new data, which is merged with the encryption of the prior entry. The joint encryption of those two entries then becomes the first part of the subsequent entry. This sequential coding provides a high level of security and time-stamping. Data is typically encrypted using hash codes, and value is stored as digital tokens.', 'https://www.insiderintelligence.com/insights/blockchain-technology-applications-use-cases/', 'Insider Intelligence'),
(13, 'Quantum Computing: Current Progress and Future Directions', 'Quantum Computing , Quantum , Computing ', 'Quantum computers operate by using superposition, interference, and entanglement to perform complex calculations. Instead of using classical bits, quantum computing uses quantum bits, or qubits, which take on quantum properties of probability, where the bit is both zero and one, with coefficients of likelihood, until measured, in which their discrete value is determined. More importantly, qubits are made up of quantum particles and are subject to quantum entanglement, which allows for computing using coupled probabilities. With these phenomena, quantum computing opens the field of special quantum algorithms development to solve new problems, ranging from cryptography, to search engines, to turbulent fluid dynamics, and all the way to directly simulating quantum mechanics, allowing for the development of new pharmaceutical drugs.', 'https://er.educause.edu/articles/2022/7/quantum-computing-current-progress-and-future-directions', 'EDUCAUSE REVIEW'),
(14, 'Cognitive Neuroscience , Science And FAQ’s.', 'Cognitive Neuroscience , Cognitive, Neuroscience ,', 'The term itself refers to a subfield of neuroscience that studies the biological processes that underlie human cognition. This field studies the neural connections within the human brain. It helps in determining how the brain achieves the functions it performs. Cognitive neuroscience is considered a cross-disciplinary field because it combines the biological sciences with the behavioral sciences. Neuroscience research technology, like neuroimaging, can provide insight into specific areas of behavior when behavioral data is insufficient.', 'https://www.emotiv.com/glossary/cognitive-neuroscience/', 'EMOTIVE'),
(15, 'WHAT IS INDUSTRIAL AUTOMATION AND ROBOTICS?\r\n', 'INDUSTRIAL AUTOMATION , ROBOTICS, Software Automat', 'Industrial automation and robotics are the use of computers, control systems and information technology to handle industrial processes and machinery, replacing manual labour and improving efficiency, speed, quality and performance.\r\n\r\nAutomated industrial applications range from manufacturing process assembly lines to surgery and space research. Early automated systems focused on increasing productivity (as these systems do not need to rest like human employees), but this focus is now shifting to improved quality and flexibility in manufacturing and more. Modern automated systems are developing beyond mechanisation with the addition of artificial and machine learning.\r\n\r\nHowever, automation and robotics are not the same thing:', 'https://www.twi-global.com/technical-knowledge/faqs/what-is-industrial-automation-and-robotics', 'TWI'),
(16, 'What is the internet of things (IoT)? How does IoT work?', 'internet of things, IoT', 'The internet of things, or IoT, is a network of interrelated devices that connect and exchange data with other IoT devices and the cloud. IoT devices are typically embedded with technology such as sensors and software and can include mechanical and digital machines and consumer objects.\r\n\r\nIncreasingly, organizations in a variety of industries are using IoT to operate more efficiently, deliver enhanced customer service, improve decision-making and increase the value of the business.\r\n\r\nWith IoT, data is transferable over a network without requiring human-to-human or human-to-computer interactions.', 'https://www.techtarget.com/iotagenda/definition/Internet-of-Things-IoT', 'TechTarget'),
(17, 'What is water scarcity? Causes of Water Scarcity and Water Conservation.\r\n\r\n\r\n', 'water scarcity , Water Conservation, Water', 'Water Scarcity signifies the shortage of water, an imbalance between the demand and supply of water, also a good quality of water i.e. potable water.\r\n\r\nWater is a very important resource, we use water for almost every activity like drinking, washing, cooking, cleaning, etc. This precious resource is largely getting wasted due to human carelessness and lack of planning and hence we are facing the scarcity of water. According to the United Nations, a person needs a minimum of 50 litres of water per day for his basic needs of hygiene, cooking and drinking. But there is a large population which fails to receive this small quantity of water and hence most of the population is getting affected by water scarcity.', 'https://byjus.com/chemistry/scarcity-of-water/', 'BYJU\'S'),
(18, 'The power of human rights in the modern world.', 'human rights, power of human rights, Rights', '“Human rights are a celebration of human dignity,” says Professor Todd Landman, a political scientist at the University of Nottingham. These rights are our rights. A set of protective principles that provide a framework for laws around the world, allowing us all to live our lives free from fear, exploitation and oppression.\r\n\r\nThe concept of human rights is hundreds of years old, but the official ‘human rights’ were established in 1948 under the Universal Declaration of Human Rights. These rights were developed through discussion and agreement between individual countries and the United Nations, and they shape both national and international laws.', 'https://futurumcareers.com/the-power-of-human-rights-in-the-modern-world', 'futurum'),
(19, 'The role of empowering women and achieving gender equality to the sustainable development of Ethiopia', 'empowering women , gender equality ', 'The issue of women\'s empowerment and gender equality is at the top of agendas across the world, as gender inequality is widespread in all cultures. In developing countries, gender disparity is highly rampant compared to the developed countries (Ahmed et al., 2001). Most importantly, in Ethiopia, gender-based discrimination and inequalities are very much apparent, although the government is working aggressively towards alleviating such problems. As a result, low empowerment of women and high gender gap still impede the development process of the country (Environmental Protection Authority, 2012). Even though the country is on the path of development in various respects, the likelihood of its sustainability is in question, given such a large gender disparity. Hence, this study reveals the need to empower women and achieve gender equality for the sustainable development of the country.', 'https://www.sciencedirect.com/science/article/pii/S2405883116300508', 'ScienceDirect'),
(20, 'Philosophy of Science and Philosophy of Technology: One or Two Philosophies of One or Two Objects?', 'Philosophy of Science , Philosophy of Technology, ', 'During most of the twentieth century, philosophy of technology has been largely interested in the effects of technology on human society and culture whereas philosophy of science has focused on the content and justification of the ideas of scientists. During the past decades, a branch of philosophy of technology has developed that, similarly to the traditional orientation of philosophy of science, looks at technology itself and addresses the content and justification of the ideas and actions of engineers. In seeming opposition to the abundant evidence for a very intimate relation between science and technology, this ‘internalist’ philosophy of technology tends to emphasize how technology differs from science. In this essay I argue, against this contrastive characterization, that as practices science and technology can hardly be distinguished and that instances of the one rarely or ever occur without instances of the latter, and can hardly occur otherwise.', 'https://link.springer.com/chapter/10.1007/978-94-017-9762-7_13', 'Springer link'),
(21, 'Why space colonization will be fully automated.', 'space colonization, Space Exploration , space', 'In this article we explore a possible scenario of space colonization and its consequences for planet Earth. We argue that in the short term space colonization will take place, but not in the form often presented in scientific and science fiction literature. Space colonies will be fully automated. There are three main reasons to believe that this is the most plausible scenario: 1) space mining is very profitable; 2) humans cannot survive for long periods of time in outer space limiting the prospects for human space colonization (HSC), and 3) automation is already a leading trend on Earth. Crewed missions will have an ancillary function, while machines or human/machine avatars will ‘inhabit’ other celestial bodies, in order to pursue economic enterprises and progress scientific discovery. ', 'https://www.sciencedirect.com/science/article/abs/pii/S0040162518317281', 'ScienceDirect'),
(22, 'Biotechnology in Agriculture and Genetically Modified Crops.', 'Biotechnology in Agriculture , Genetically Modifie', 'The large increase in the size of a population has led to an increasing demand for resources and basic requirements such as food, shelter, clothing, etc. Another impact of the increase in population is the exploitation of the land for crops production. Thus cultivation has been limited to a small area.  In order to meet the demands with limited resources, we need to apply a great effort. Biotechnology in agriculture has changed the face of this condition. \r\n\r\nBiotechnology is the use of technology to modify or manipulate any biological system or living system for the development or improvement of products for various purposes. It is widely employed in different fields and agriculture is one among them. Researchers have suggested different options for increasing food production. Genetically engineered crop-based agriculture is an option, others being agrochemical based agriculture and organic agriculture.', 'https://byjus.com/biology/biotechnology-agriculture/', 'Byju\'s'),
(23, 'What is relativity? Einstein\'s mind-bending theory explained', 'relativity, Einstein, mind-bending theory , theory', 'When the theory of relativity appeared in the early 1900s, it upended centuries of science and gave physicists a new understanding of space and time. Isaac Newton saw space and time as fixed, but in the new picture provided by special relativity and general relativity they were fluid and malleable.\r\n\r\nWho came up with the theory of relativity?\r\nAlbert Einstein. He published the first part of his theory — special relativity — in the German physics journal Annalen der Physik in 1905 and completed his theory of general relativity only after another decade of difficult work. He presented the latter theory in a series of lectures in Berlin in late 1915 and published in the Annalen in 1916.', 'https://www.nbcnews.com/mach/science/what-relativity-einstein-s-mind-bending-theory-explained-ncna865496', ' Dan Falk, NBS NEWS'),
(24, 'Neural Network Matrix Factorization', 'Neural Network,  Matrix Factorization', 'Data often comes in the form of an array or matrix. Matrix factorization techniques attempt to recover missing or corrupted entries by assuming that the matrix can be written as the product of two low-rank matrices. In other words, matrix factorization approximates the entries of the matrix by a simple, fixed function---namely, the inner product---acting on the latent feature vectors for the corresponding row and column. Here we consider replacing the inner product by an arbitrary function that we learn from the data at the same time as we learn the latent feature vectors. In particular, we replace the inner product by a multi-layer feed-forward neural network, and learn by alternating between optimizing the network for fixed latent features, and optimizing the latent features for a fixed network. The resulting approach---which we call neural network matrix factorization or NNMF, for short---dominates standard low-rank techniques on a suite of benchmark but is dominated by some recent proposals that take advantage of the graph features. Given the vast range of architectures, activation functions, regularizers, and optimization techniques that could be used within the NNMF framework, it seems likely the true potential of the approach has yet to be reached.', 'https://arxiv.org/abs/1511.06443', 'Gintare Karolina Dziugaite, Daniel M. Roy'),
(25, 'What Is Sport Science?', ' Sport Science', 'Sport science applies the study of science to sporting activities. The focus of sport science is to help maximise performance and endurance in preparation for events and competitions while lessening the risk of injury. \r\nIt’s used to help identify strengths and weaknesses so that a training program can be individualised for everyone from athletes to the elderly, and everyone in-between.\r\n\r\nSports Scientists ensure that athletes are up to date with current training protocols, testing, and preparation.\r\n\r\nOur highly experienced Sport Science staff are able to provide evidence based interventions to athletes to improve performance.', 'https://ssep.com.au/what-is-sport-science/#:~:text=The%20focus%20of%20sport%20science,%2C%20and%20everyone%20in%2Dbetween.', 'SSEP');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `tag` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hid` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`tag`, `email`, `hid`, `time`) VALUES
('sport science', 'ajeetkumarr468@gmail.com', 38, '2024-01-12 04:30:41'),
('sport science', 'ajeetkumarr468@gmail.com', 39, '2024-01-12 04:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qual` varchar(11) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`id`, `name`, `dob`, `email`, `address`, `qual`, `pass`) VALUES
(1, 'Ajeet Kumar', '2001-12-02', 'ajeetkumarr468@gmail.com', 'Kolkata', 'Btech', '67890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`email`) REFERENCES `scholar` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
