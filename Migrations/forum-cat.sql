CREATE TABLE `forum_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `forum_category`
  ADD PRIMARY KEY (`category_id`);
  
ALTER TABLE `forum_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

INSERT INTO forum_category (name, description, is_category) VALUES ('Latin Text', 'Lorem ipsum', 1);
