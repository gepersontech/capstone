CREATE TABLE `users` (
  `user_id` int(55) NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `age` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(55) NOT NULL,
  `added_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`user_id`, `profile_pic`, `firstname`, `lastname`, `age`, `gender`, `address`,`email_add`, `username`, `password`,  `added_at`) VALUES
(1, '', 'Admin',  'Admin', '25','Male', 'Digos City', 'admin@gmail.com',  'admin@gmail.com', '$2y$10$627KTYhahPQq9al9sbgQDuJaeRiROt.rDoWPV1nqwYjsxZNHNlr4W', '2022-11-22 09:18:43'),
(2, '', 'User',  'User',  '25','Male', 'Digos City', 'user@gmail.com',  'user@gmail.com', '$2y$10$aoF3GO5Wyf6qLSG8MhbDaO4hjb8VID9A9NEnfqr6gvxaqJHA3jrwO', '2022-11-22 09:20:09'),
(3, '', 'Superadmin', 'Superadmin',  '25','Male', 'Digos City', 'superadmin@gmail.com', 'superadmin@gmail.com', '$2y$10$9cKb.z/gAsSZwlK10oSX1OPQsNE1HtkJYouQouw0CaJ4pc6wL6WI.',  '2022-11-22 09:21:26');

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

  ALTER TABLE `users`
  MODIFY `user_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
