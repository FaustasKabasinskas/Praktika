CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `username`, `password`, `usertype`) VALUES
(1, 'Admin', 'Admins', 'admin', 'admin', 'ADMIN'),
(2, 'demo', 'demo', 'demo', 'demo', 'USER'),
(4, 'Destytojas', 'Desto', 'destau', 'destau', 'USER'),
(5, 'Vardas', 'Pavardenis', '12345', '12345', 'USER');


CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `teacher_number` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `first_grading` double NOT NULL,
  `second_grading` double NOT NULL,
  `third_grading` double NOT NULL,
  `fourth_grading` double NOT NULL,
  `final_grade` double NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `records` (`id`, `teacher_number`, `firstname`, `lastname`, `first_grading`, `second_grading`, `third_grading`, `fourth_grading`, `final_grade`, `remarks`) VALUES
(1, 2, 'jonas', 'denas', 5, 7, 8, 6, 0, ''),
(2, 2, 'Faustas', 'fas', 2, 8, 0, 10, 0, ''),
(4, 2, 'John', 'Doe', 4, 0, 0, 0, 0, ''),
(7, 4, 'Faustaswewfw', 'K', 3, 7, 6, 9, 0, ''),
(8, 4, 'Faustas', 'KabaÅ¡inskas', 0, 0, 0, 0, 0, '');


ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
