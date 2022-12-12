CREATE TABLE IF NOT EXISTS `buyers`(
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `orders` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `description` varchar(250) NOT NULL,
    `cost` int(10),
    `paid` tinyint(1),

    `buyer_id` int unsigned,
    FOREIGN KEY (buyer_id) REFERENCES buyers(id) ON DELETE CASCADE,

    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `buyers` (`id`, `name`) VALUES
    (1, 'Alex'),
    (2, 'Oleg');

INSERT INTO `orders` (`id`, `description`, `cost`, `paid`, `buyer_id`) VALUES
    (1, 'Some random description', 100, 1, 1),
    (2, 'Some random description', 200, 0, 1),
    (3, 'Some random description', 300, 1, 1),
    (4, 'Some random description', 400, 1, 2),
    (5, 'Some random description', 500, 0, 2),
    (6, 'Some random description', 600, 0, 2);

