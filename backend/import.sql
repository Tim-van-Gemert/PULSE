create table `user` (
	`id` int(11) AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `age` int(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (id)
    );