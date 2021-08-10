CREATE TABLE `mfee19`.`address_book`
 ( 
     `sid` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
   `email` VARCHAR(255) NOT NULL ,
    `mobile` VARCHAR(255) NOT NULL ,
     `birthday` DATE NOT NULL ,
      `address` VARCHAR(255) NOT NULL ,
       `created_at` DATETIME NOT NULL ,
        PRIMARY KEY (`sid`)
        ) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;
        ALTER TABLE `address_book` CHANGE `birthday` `birthday` DATE NULL;



        INSERT INTO 
        `address_book` 
        (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) 
        VALUES 
        (NULL, '路人1', 'spring@gg.com', '0912345678', '1997-07-17', '台北市', '2021-07-28 22:20:50');