CREATE TABLE `forum_topics` (
  `topic_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `forum_topics`
  ADD PRIMARY KEY (`topic_id`);
  
ALTER TABLE `forum_topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

INSERT INTO forum_topics (subject, category_id, u_id) VALUES ('What does it mean?!', 1, 1);
