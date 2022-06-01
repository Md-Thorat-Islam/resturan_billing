CREATE TABLE `db_resturant`.`tbl_category` (
  `id` INTEGER UNSIGNED NOT NULL,
  `category_name` VARCHAR(45) NOT NULL DEFAULT '',
  `description` VARCHAR(450) NOT NULL DEFAULT '',
  `category_code` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `status_actve` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `is_delete` INTEGER UNSIGNED NOT NULL DEFAULT 0,
  `create_at` TIMESTAMP,
  PRIMARY KEY(`id`)
)
ENGINE = InnoDB;
