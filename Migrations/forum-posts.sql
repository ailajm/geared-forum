CREATE TABLE `forum_posts` (
  `post_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `topic_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`post_id`);
  
ALTER TABLE `forum_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
