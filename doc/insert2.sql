INSERT INTO `product` (`id`, `name`, `descrizione`, `price`, `category_id`) VALUES
(5, 'prodotto 5', 'questo è il prodotto 5', '6.95', 1);

update product set descrizione = replace(descrizione, '├¿','è')