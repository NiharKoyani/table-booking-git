-- SQL for menu table
CREATE TABLE `menu` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` TEXT,
  `price` DECIMAL(8,2) NOT NULL,
  `category` VARCHAR(50) NOT NULL,
  `image_url` VARCHAR(255),
  `is_active` TINYINT(1) NOT NULL DEFAULT 1,
  `tags` VARCHAR(100),
  PRIMARY KEY (`id`)
);

-- Example insert
INSERT INTO `menu` (`name`, `description`, `price`, `category`, `image_url`, `is_active`, `tags`) VALUES
('Paneer Tikka', 'Grilled cottage cheese cubes marinated in Indian spices.', 180, 'appetizers', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_p11iUJCPbK-S_FfiHSSpOHHHvXzfw65FHg&s', 1, 'vegetarian'),
('Samosa', 'Crispy pastry filled with spicy potatoes and peas.', 40, 'appetizers', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSTHwdRrONYs7dG4LiUtGZL_IvgBU1vVtwzg&s', 1, 'vegetarian'),
('Masala Dosa', 'Crispy rice crepe filled with spicy potato mix, served with chutney and sambar.', 120, 'mains', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZaHS9Q4odVsxJlxW6ry7ubewoHvLWJh8SRDi-TFEJw0TMEgr6c3B96HYsAO7y00dDu_0&usqp=CAU', 1, 'vegetarian'),
('Chole Kulche', 'Soft bread served with spicy chickpea curry, onions, and lemon.', 100, 'mains', 'https://sitaramdiwanchand.com/blog/wp-content/uploads/2024/05/Comprehensive-Guide-to-Chole-Bhature-Side-Dishes.jpg', 1, 'vegetarian'),
('Paneer Butter Masala', 'Paneer cubes in a creamy tomato and butter gravy.', 160, 'mains', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYwLSek8iYF8HRARFlDE8dOTAd2vvcvvX9ug&s', 1, 'vegetarian'),
('Dal Makhani', 'Black lentils slow-cooked with butter and cream.', 110, 'mains', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQue-aIE_MoUy4ZGNDYMcpcgfDed0cbCo_O5w&s', 1, 'vegetarian'),
('Gulab Jamun', 'Soft sweet balls soaked in sugar syrup.', 70, 'desserts', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEfhmhk_a2F93uDrmp-aEskk9BLVX9dgX1SQ&s', 1, ''),
('Rasgulla', 'Soft spongy balls made from chenna, soaked in sugar syrup.', 60, 'desserts', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSCPkJXsWwQ2ndpGsrC_JdLs7GUzLyyV9oPg&s', 1, ''),
('Lassi', 'Refreshing yogurt drink, sweet or salty.', 60, 'drinks', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9x28VQnjEiDhN_LdU9WtVLiRqZEiMNZ2iXQ&s', 1, ''),
('Chaas', 'Cool buttermilk drink with spices and herbs.', 40, 'drinks', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTknjl9tTN4Jr0T53Tq71W0gUnk6GQjQmE8xQ&s', 1, ''),
('Veg Pizza', 'Pizza topped with fresh vegetables and cheese.', 180, 'specials', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBhqV7gsGTQ6K62gRiPUl_hHWJv71zgFEXzQ&s', 1, 'vegetarian,special'),
('Veg Burger', 'Burger with a crispy vegetable patty, lettuce, and sauce.', 90, 'specials', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTAhYm6Ht3VkrSkz6SyuqqOxTO_d-wstHdw&s', 1, 'vegetarian,special'),
('Pav Bhaji', 'Spicy mixed vegetable curry served with soft bread rolls.', 100, 'specials', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9gAPXlXH73q93C7Pbfz0nqaFj_QuyMwQKlg&s', 1, 'vegetarian,special'),
('Veg Hakka Noodles', 'Stir-fried noodles with vegetables and sauces.', 120, 'specials', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpjFGWN5et2F4-yvry10ykzf_gasFofsCWUg&s', 1, 'vegetarian,special');
