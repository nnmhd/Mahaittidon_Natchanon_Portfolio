-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 08, 2024 at 05:49 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: portfolio
--

-- --------------------------------------------------------

--
-- Table structure for table project
--

CREATE TABLE project (
  project_id int UNSIGNED NOT NULL,
  project_name varchar(255) NOT NULL,
  client_id int UNSIGNED NOT NULL,
  project_url varchar(255) NOT NULL,
  completion_year int NOT NULL,
  skill_id int UNSIGNED NOT NULL,
  role varchar(255) NOT NULL,
  stack varchar(300) NOT NULL,
  desc_subhead varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  desc_headline text NOT NULL,
  desc_tag varchar(255) NOT NULL,
  desc_brief text NOT NULL,
  desc_audiences text NOT NULL,
  desc_challenge text NOT NULL,
  desc_direction text NOT NULL,
  desc_process_1 text NOT NULL,
  desc_process_2 text NOT NULL,
  desc_process_3 text NOT NULL,
  desc_hl_thought text NOT NULL,
  img_main varchar(255) NOT NULL,
  img_thumbnail varchar(255) NOT NULL,
  img_card varchar(255) NOT NULL,
  img_brief varchar(255) NOT NULL,
  img_direction varchar(255) NOT NULL,
  img_process varchar(255) NOT NULL,
  img_result varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table project
--

INSERT INTO project (project_id, project_name, client_id, project_url, completion_year, skill_id, role, stack, desc_subhead, desc_headline, desc_tag, desc_brief, desc_audiences, desc_challenge, desc_direction, desc_process_1, desc_process_2, desc_process_3, desc_hl_thought, img_main, img_thumbnail, img_card, img_brief, img_direction, img_process, img_result) VALUES
(1, 'Industry Night', 1, 'Undergo', 2024, 2, 'Frontend', 'HTML / CSS / JS / SASS', 'Student Showcase Site', 'Industry Night', '', 'The project involves creating a student showcase website for Fanshawe College\'s Industry Night 2024. The goal is to highlight the works of emerging designers while providing an intuitive, user-friendly experience.', 'The primary audience includes potential employers, industry professionals, and peers. The site should cater to users looking for a quick and engaging way to explore student portfolios.', 'The main challenge is designing a site that balances both creative expression and functionality, ensuring smooth navigation while showcasing diverse design styles.', 'We followed a design-first approach, prioritizing aesthetics while ensuring responsiveness and accessibility across devices. We integrated everything we\'ve learned over the past three terms to reflect a comprehensive view of the program, showcasing both technical and creative skills.', 'We began with wireframing and prototyping in Figma, focusing on the site\'s core structure. Development started using HTML, SCSS, and JavaScript to build the foundation.', 'We refined the design with user testing and feedback, enhancing functionality and responsiveness. Development continued, adding features and improving accessibility.', 'In the final stage, we polished the design and optimized performance. Final adjustments were made in HTML, SCSS, and JavaScript to ensure a smooth user experience.', 'This project encapsulates the essence of the Interactive Media Design program, blending creativity with technical expertise. It represents our growth as designers, with each decision grounded in the lessons learned throughout our journey.', 'industrynight_main.jpg', 'industrynight_thumbnail.jpg', 'industrynight_card.jpg', 'industrynight_brief.jpg', 'industrynight_direction.jpg', 'industrynight_process.jpg', 'industrynight_result.jpg'),
(2, 'Breath Bros', 2, 'Undergo', 2024, 2, 'UI Design & Frontend', 'HTML / CSS', 'Breathing Practice Web App', 'Breath Bros', '', 'The website helps users practice breathing exercises to improve wellness and reduce stress. It offers a variety of techniques, from deep breathing to guided meditation, helping users regulate their emotions and reduce stress levels. It also aims to promote mindfulness and overall well-being by providing a simple interface that adapts to the needs of different users.\r\n', 'Target audience includes people looking for relaxation, mental health improvement, and stress reduction. The website serves as a tool for people of all ages who are interested in improving their wellness through simple and effective breathing exercises.\r\n', 'The main challenge was creating an intuitive layout that makes it easy for users to find and follow different breathing exercises. Another challenge was ensuring the site worked smoothly across various devices, especially mobile devices, where the majority of users would access the site.\r\n', 'Our design focuses on simplicity and user-friendliness, with clear navigation that guides users through different exercises. The layout is clean, and the color scheme is calming to encourage a relaxed atmosphere. We used soothing images and soft typography to reinforce the theme of wellness.\r\n', 'I started by researching user needs and preferences, followed by wireframing to lay out the key features of the website. After initial design concepts, I created high-fidelity mockups in Figma and conducted usability testing with real users to gather feedback.\r\n', 'After receiving user feedback, I made improvements, focusing on simplifying the navigation and optimizing the website for mobile use. I also ensured that the user interface was accessible and inclusive, making it easy for all users to interact with the site.\r\n', 'The final design optimized the website for both desktop and mobile views, ensuring a smooth experience for users on different devices. The project demonstrated how focusing on user-centered design can significantly improve a wellness app’s accessibility and ease of use.', 'This project highlighted the importance of creating wellness-focused applications that cater to both functionality and user experience. I learned how design can make a significant impact on a user’s mental and emotional well-being, and this motivated me to prioritize user-centered solutions in my future projects.\r\n', 'breathbros_main.jpg', 'breathbros_thumbnail.jpg', 'breathbros_card.jpg', 'breathbros_brief.jpg', 'breathbros_direction.jpg', 'breathbros_process.jpg', 'breathbros_result.gif'),
(3, 'SONY WB1979', 3, 'Undergo', 2024, 3, 'Graphic & Motion Design', 'HTML / CSS / JS / Cinema4D / AfterEffect / SASS / PremirePro', 'The Country for Old Man', 'WalkBack 1979', '', 'Designed headphones inspired by the original SONY Walkman to bring retro aesthetics with modern functionality. These headphones integrate the timeless style of the classic Walkman while featuring cutting-edge sound technology and comfort. With wireless capabilities, they cater to modern-day users who appreciate both nostalgia and high-tech functionality.\r\n', 'The audience includes music lovers, tech enthusiasts, and those who have a strong emotional connection to the SONY Walkman. It also appeals to a younger generation that appreciates retro designs and high-quality audio experiences.\r\n', 'The challenge was balancing the retro aesthetic with modern technological features without compromising either. Ensuring comfort while maintaining the vintage style was another challenge, as was integrating advanced audio technology while preserving the Walkman’s signature design.\r\n', 'The design process focused on merging the past and present by incorporating vintage elements such as the iconic headband and earcups while utilizing modern materials for enhanced comfort and durability. The headphones also include intuitive touch controls and Bluetooth connectivity.\r\n', 'I started by researching the original Walkman design, identifying key features that could be modernized. I created several concept sketches and prototypes, working closely with engineers to ensure the design could accommodate the latest sound technology.\r\n', 'Through iterative design, I refined the headphones\' form, focusing on comfort and durability. User testing played a key role in determining the optimal fit and functionality, with feedback shaping the final product.\r\n', 'The final product integrates the classic aesthetic with modern functionality, making it both a fashion statement and a high-performance audio device. It showcases how design can preserve nostalgia while adapting to modern needs.\r\n', 'This project reinforced my belief that design can evoke strong emotional connections by blending the old with the new. It was an opportunity to balance functionality with sentiment, which I found both challenging and rewarding.\r\n', 'sonywb1979_main.jpg', 'sonywb1979_thumbnail.jpg', 'sonywb1979_card.jpg', 'sonywb1979_brief.jpg', 'sonywb1979_direction.jpg', 'sonywb1979_process.jpg', 'sonywb1979_result.jpg'),
(4, 'Nike Stadium', 4, 'Undergo', 2024, 3, 'Graphic & Motion Design', 'Cinema4D / AfterEffect', 'The Place We Just Do It', 'Nike Stadium', '', 'Designed a futuristic stadium for Nike’s sports campaigns with a focus on immersive experiences. The stadium combines state-of-the-art architecture with interactive technology to create an engaging environment for spectators, enhancing the connection between the audience and the brand. Every detail is designed to promote Nike’s athletic spirit and innovative edge.\r\n', 'The target audience includes sports enthusiasts, Nike fans, and anyone passionate about innovative sports marketing. The stadium will host live events, athletic competitions, and product launches, making it an integral part of Nike’s global brand presence.\r\n', 'The main challenge was designing a space that not only served as a stadium but as a marketing tool that could enhance the brand experience for Nike’s target audience. Integrating advanced technology, interactive displays, and sustainability features into the architectural design posed a unique challenge.\r\n', 'The design integrates modern materials and futuristic aesthetics while ensuring the functionality required for major sports events. The design includes interactive zones, immersive brand activations, and features that encourage fan engagement throughout the venue.\r\n', 'The initial concept was inspired by Nike’s iconic visual language, which I translated into architectural forms. I worked with a multidisciplinary team of engineers, architects, and digital designers to ensure that the stadium’s design was both functional and visually striking.\r\n', 'After the conceptual phase, I created detailed designs using 3D modeling to refine the structure and the interactive elements of the stadium. We incorporated feedback from potential users and sports marketing experts to ensure the design would resonate with Nike’s target audience.\r\n', 'The final design combines bold, sleek architecture with innovative fan interaction. It’s a space that doesn’t just host sports events—it transforms the fan experience into a branded journey, bringing the Nike spirit to life in every corner of the stadium.\r\n', 'Working on this project taught me the importance of blending form and function, especially when working on large-scale architectural projects that aim to enhance the brand experience. I’m proud of how we were able to push the boundaries of design for this iconic brand.\r\n', 'nikestadium_main.jpg', 'nikestadium_thumbnail.jpg', 'nikestadium_card.jpg', 'nikestadium_brief.jpg', 'nikestadium_direction.jpg', 'nikestadium_process.jpg', 'nikestadium_result.gif'),
(5, 'MendelBalm', 5, 'Undergo', 2024, 3, 'Graphic & 3D Design', 'Cinema4D / AfterEffect / PremirePro', 'Raise the Brand That Empowers Her', 'MendelBalm', '', 'Created the branding for a beauty product line inspired by the Mantaray, symbolizing elegance and beauty in nature. This branding combines nature-inspired elements with a modern approach to create a sophisticated, luxury skincare product line. The project required a deep understanding of the brand’s core values and the target audience’s aesthetic preferences.\r\n', 'Audience includes individuals who are passionate about beauty and unique branding in skincare products. It targets those who appreciate high-end, nature-inspired products that reflect elegance and sophistication.\r\n', 'The challenge was to design a brand that communicates luxury and nature-inspired beauty without being overdone. The goal was to create a distinct identity that would stand out in a competitive beauty market while remaining timeless and elegant.\r\n', 'I combined natural motifs with modern design trends to create a refined and memorable brand identity. The brand’s logo was designed to evoke the beauty of the sea, and the color scheme uses soft tones to convey a sense of calm and sophistication.\r\n', 'Market testing helped refine the logo and packaging design to enhance brand appeal.\r\n', 'The final brand design evoked elegance, inspired by the beauty of sea creatures. The packaging was designed to reflect luxury while being eco-friendly and practical.\r\n', 'This project shows how nature can inspire modern branding while reflecting sophistication and natural beauty.\r\n', 'This project gave me the opportunity to create a branding experience that balances nature and luxury. The feedback from the target audience confirmed that the design successfully conveyed the brand’s ethos of sophistication and elegance.\r\n', 'mendelbalm_main.jpg', 'mendelbalm_thumbnail.jpg', 'mendelbalm_card.jpg', 'mendelbalm_brief.jpg', 'mendelbalm_direction.jpg\r\n', 'mendelbalm_process.jpg', 'mendelbalm_result.jpg'),
(6, 'SQUEEZIT', 6, 'Undergo', 2024, 2, 'Frontend', 'HTML / CSS / JS', '90s Bev Brand Refreshing', 'SQUEEZIT IS BACK!', '', 'Rebranded a popular 90s fruit juice brand to reintroduce it in a modern, eye-catching way for new generations. The rebranding aimed to refresh the product\'s image while maintaining its nostalgic value for those who grew up with it.\r\n', 'Target audience includes nostalgic consumers and young people looking for new juice options. It appeals to both the older generation who remembers the original product and the younger generation discovering it for the first time.\r\n', 'The challenge was modernizing a nostalgic brand while keeping the essence that made it memorable in the 90s. It was important to balance the playful, fun nature of the original brand with a more contemporary design to appeal to both old and new customers.\r\n', 'The design features bright, bold colors and playful typography to capture the fun, refreshing essence of the product. The packaging was updated to include modern elements while staying true to the original spirit of SQUEEZIT.\r\n', 'I researched the history of the brand and its cultural impact in the 90s. I analyzed the original logo and packaging design, identifying what elements could be refreshed and modernized while retaining the nostalgic feel.\r\n', 'The design focused on incorporating elements of the original branding while adding new visual cues that appeal to a younger audience. The product\'s colors and playful typography were emphasized to make it stand out on shelves and online.\r\n', 'After finalizing the design, I worked on the packaging to make sure it reflected the product\'s fun and vibrant personality. The result was a product that felt both familiar and fresh, appealing to a diverse range of consumers.\r\n', 'Thoughts: This project represented the creative process of bringing an old brand back to life with a fresh, modern twist. It was exciting to work on a product that had such a strong nostalgic connection while also ensuring it resonated with a new audience.\r\n', 'squeezit_main.gif', 'squeezit_thumbnail.gif', 'squeezit_card.jpg', 'squeezit_brief.jpg', 'squeezit_direction.jpg', 'squeezit_process.jpg', 'squeezit_result.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table project
--
ALTER TABLE project
  ADD PRIMARY KEY (project_id),
  ADD KEY fk_project_client_id (client_id),
  ADD KEY fk_project_skill_id (skill_id);
ALTER TABLE project ADD FULLTEXT KEY desc_type (desc_subhead,desc_headline,desc_tag,desc_brief,desc_audiences,desc_challenge,desc_direction,desc_process_1,desc_process_2,desc_process_3,desc_hl_thought);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table project
--
ALTER TABLE project
  MODIFY project_id int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table project
--
ALTER TABLE project
  ADD CONSTRAINT fk_project_client_id FOREIGN KEY (client_id) REFERENCES clients (client_id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT fk_project_skill_id FOREIGN KEY (skill_id) REFERENCES skills (skill_id) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
