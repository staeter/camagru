INSERT INTO `user`
	(`pseudo`, `email`, `password`)
VALUES
	('admin', 'admin@insto.com', "864194db6e6a3eaf9c95d11359ed727e866d29cd7a3e634a8e8c45ddd128f4c223af34fccc3d99e2aa669448afc20341c49a1a4930fb9696803d4558c20bca01"/* = 'adminpw'*/),
	('John', 'john@mail.com', "4b0e76e863cfd20a0c5a11c15830d206772c4e93719ef429bfb073602b030da6ab5c533f270b20808f2059798d7ead9fdff3af441872ebb7b11cdac13f9ffa8c"/* = 'johnpw'*/),
	('Clara', 'clara@insto.com', "e7115e4b4075fb4028c6b08efe570ba01ef0bbb00554fa3a00b25d812e64b242fb9f1bd668d1448fbe3dfa0ca8c168b0ca074049b8ec1c5ec35fddcfc1a49325"/* = 'clarapw'*/),
	('JohnD', 'john.doe@mail.com', "4b0e76e863cfd20a0c5a11c15830d206772c4e93719ef429bfb073602b030da6ab5c533f270b20808f2059798d7ead9fdff3af441872ebb7b11cdac13f9ffa8c"/* = 'johnpw'*/);

INSERT INTO `cookie`
	(`id_user`)
VALUES
	(1),
	(3),
	(3),
	(2),
	(4),
	(1);

INSERT INTO `picture`
	(`id_user`, `path`)
VALUES
	(2, "dumb_path1.jpg"),
	(4, "dumb_path2.jpg"),
	(3, "dumb_path3.jpg"),
	(1, "dumb_path4.jpg"),
	(3, "dumb_path5.jpg"),
	(1, "dumb_path6.jpg");
