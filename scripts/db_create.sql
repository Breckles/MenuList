SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE users;
DROP TABLE categories;
DROP TABLE uoms;
DROP TABLE ingredients;
DROP TABLE recipes;
DROP TABLE recipe_ingredients;
DROP TABLE weekly_menus;
DROP TABLE scheduled_meals;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE users(
         id INT           AUTO_INCREMENT PRIMARY KEY  ,
      email VARCHAR(255)                 NOT NULL     ,
   password VARCHAR(255)                 NOT NULL     ,
    created DATETIME                                  ,
   modified DATETIME
);



CREATE TABLE categories(
             id INT          AUTO_INCREMENT PRIMARY KEY    ,
       category VARCHAR(25)                 NOT NULL       ,
        created DATETIME                                   ,
       modified DATETIME          
);



CREATE TABLE uoms(
             id INT           AUTO_INCREMENT PRIMARY KEY    ,
           name VARCHAR(75)                 NOT NULL        ,
    description VARCHAR(75)                 NOT NULL        , 
        created DATETIME                                    ,
       modified DATETIME  
);



CREATE TABLE ingredients(
                id INT           AUTO_INCREMENT PRIMARY KEY       ,
              name VARCHAR(75)                  NOT NULL          ,
       category_id INT                          NOT NULL          ,
       information TEXT                                           ,
             image VARCHAR(100)  DEFAULT 'no_image.jpg'           ,
           created DATETIME                                       ,
          modified DATETIME                                       ,

    FOREIGN KEY ingredients_category_id_fk (category_id) REFERENCES categories(id)
);


CREATE TABLE recipes(
              id INT                   AUTO_INCREMENT PRIMARY KEY         ,
         user_id INT                                  NOT NULL            ,
            name VARCHAR(75)                          NOT NULL            ,
     description TEXT                                                     ,
    instructions TEXT                                                     ,
      num_served INT                                  NOT NULL            ,
         private BOOLEAN                    DEFAULT 1 NOT NULL            ,
           image VARCHAR(100)  DEFAULT 'no_image.jpg'                     ,
         created DATETIME                                                 ,
        modified DATETIME                                                 ,

    FOREIGN KEY recipes_user_id_fk (user_id) REFERENCES users(id)
);




CREATE TABLE recipe_ingredients(
                 id INT            AUTO_INCREMENT PRIMARY KEY       ,             
          recipe_id INT                           NOT NULL          ,
      ingredient_id INT                           NOT NULL          ,
           quantity INT                           NOT NULL          ,
             uom_id INT                           NOT NULL          ,
       instructions TEXT                                            ,
            created DATETIME                                        ,
           modified DATETIME                                        ,

    FOREIGN KEY recipe_ingredients_recipe_id_fk (recipe_id)         REFERENCES recipes(id),
    FOREIGN KEY recipe_ingredients_ingredient_id_fk (ingredient_id) REFERENCES ingredients(id),
    FOREIGN KEY recipe_ingredients_uom_id_fk (ingredient_id)        REFERENCES uoms(id)
);


CREATE TABLE weekly_menus(
               id INT       AUTO_INCREMENT PRIMARY KEY  ,
          user_id INT                      NOT NULL     ,
    week_starting DATETIME                              ,
          created DATETIME                              ,
         modified DATETIME                              
);



CREATE TABLE scheduled_meals(
                id INT           AUTO_INCREMENT PRIMARY KEY       ,
         recipe_id INT                          NOT NULL          ,
              meal VARCHAR(25)                  NOT NULL          ,
    weekly_menu_id INT                          NOT NULL          ,
           weekday VARCHAR(25)                  NOT NULL          ,
           created DATETIME                                       ,
          modified DATETIME                                       ,

    FOREIGN KEY scheduled_meals_recipe_id_fk (recipe_id)      REFERENCES recipes(id), 
    FOREIGN KEY scheduled_meals_weekly_menu_id_fk (recipe_id) REFERENCES weekly_menus(id)
);

COMMIT;
