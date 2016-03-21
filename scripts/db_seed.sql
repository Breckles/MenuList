SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE users;
TRUNCATE TABLE categories;
TRUNCATE TABLE uoms;
TRUNCATE TABLE ingredients;
TRUNCATE TABLE recipes;
TRUNCATE TABLE recipe_ingredients;
TRUNCATE TABLE weekly_menus;
TRUNCATE TABLE scheduled_meals;
SET FOREIGN_KEY_CHECKS = 1;


########  users seeds  ##############

INSERT INTO users (email, password)
              VALUES('wayloncn@gmail.com', 'root');


########  categories seeds  ############

INSERT INTO categories(category)  #id = 1
              VALUES('meat/poultry');

INSERT INTO categories(category)  #id = 2
              VALUES('fruits/vegetables');
              
INSERT INTO categories(category)  #id = 3
              VALUES('dairy');
              
INSERT INTO categories(category)  #id = 4
              VALUES('bread/grains');
              
INSERT INTO categories(category)  #id = 5
              VALUES('junk');
              
INSERT INTO categories(category)  #id = 6
              VALUES('miscellaneous');
              
              
########  uoms seeds  ############

INSERT INTO uoms(uom, description)  #id = 1
         VALUES('g', 'grams');
         
INSERT INTO uoms(uom, description)  #id = 2
         VALUES('kg', 'kilograms');
         
INSERT INTO uoms(uom, description)  #id = 3
         VALUES('lbs', 'pounds');
         
INSERT INTO uoms(uom, description)  #id = 4
         VALUES('oz', 'ounces');
         
INSERT INTO uoms(uom, description)  #id = 5
         VALUES('ml', 'millilitres');
         
INSERT INTO uoms(uom, description)  #id = 6
         VALUES('L', 'litres');
         
INSERT INTO uoms(uom, description)  #id = 7
         VALUES('SU', 'small unit');
         
INSERT INTO uoms(uom, description)  #id = 8
         VALUES('MU', 'medium unit');
         
INSERT INTO uoms(uom, description)  #id = 9
         VALUES('LU', 'large unit'); 
         
INSERT INTO uoms(uom, description)  #id = 10
         VALUES('gal', 'gallon');  
         
INSERT INTO uoms(uom, description)  #id = 11
         VALUES('tsp', 'teaspoon'); 
         
INSERT INTO uoms(uom, description)  #id = 12
         VALUES('tbsp', 'tablespoon');
         
INSERT INTO uoms(uom, description)  #id = 13
         VALUES('cup', 'cup');         
              
              
########  ingredients seeds  ############              

INSERT INTO ingredients(name, category_id)  #id = 1
                VALUES('ground beef', 1);
                    
INSERT INTO ingredients(name, category_id)  #id = 2
                VALUES('potatoes', 2);
                    
INSERT INTO ingredients(name, category_id)  #id = 3
                VALUES('kernel corn', 2);                  
                                  
INSERT INTO ingredients(name, category_id)  #id = 4
                VALUES('onion', 2); 
                    
INSERT INTO ingredients(name, category_id)  #id = 5
                VALUES('butter', 3);
                    
INSERT INTO ingredients(name, category_id)  #id = 6
                VALUES('skim milk', 3);                    
                    
INSERT INTO ingredients(name, category_id)  #id = 7
                VALUES('soy sauce', 6);
                    
INSERT INTO ingredients(name, category_id)  #id = 8
                VALUES('salt', 6); 
                    
INSERT INTO ingredients(name, category_id)  #id = 9
                VALUES('pepper', 6);
                    
INSERT INTO ingredients(name, category_id)  #id = 10
                VALUES('sliced bread', 4); 
                    
INSERT INTO ingredients(name, category_id)  #id = 11
                VALUES('potato chips', 5);  
                    
                    
########  recipe seeds  ########                  
                    
INSERT INTO recipes(name, user_id, description, num_served)  #id = 1
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4); 

INSERT INTO recipes(name, user_id, description, num_served)  #id = 2
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4);

INSERT INTO recipes(name, user_id, description, num_served)  #id = 3
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4); 

INSERT INTO recipes(name, user_id, description, num_served)  #id = 4
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4); 

INSERT INTO recipes(name, user_id, description, num_served)  #id = 5
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4);

INSERT INTO recipes(name, user_id, description, num_served)  #id = 6
            VALUES('shepard''s pie', 1, 'A childhood classic!', 4);          
           
           
                
########  recipe_ingredients seeds  ########                 
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(1, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(1, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(1, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(1, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(1, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(1, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(1, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(1, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(1, 9, 2, 11);



                      ############################################


INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(2, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(2, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(2, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(2, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(2, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(2, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(2, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(2, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(2, 9, 2, 11);


                       ############################################


INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(3, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(3, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(3, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(3, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(3, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(3, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(3, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(3, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(3, 9, 2, 11);


                       ############################################


INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(4, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(4, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(4, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(4, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(4, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(4, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(4, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(4, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(4, 9, 2, 11);


                       ############################################


INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(5, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(5, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(5, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(5, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(5, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(5, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(5, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(5, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(5, 9, 2, 11);

                       ############################################


INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 1  ground beef
                      VALUES(6, 1, 1, 2); 
                      
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 2  potatoes
                      VALUES(6, 2, 8, 8, 'Peeled and cut into even-sized chunks');
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 3  kernel corn
                      VALUES(6, 3, 500, 1);  
   
#This recipe_ingredient has instructions
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id, instructions)  #id = 4  onion
                      VALUES(6, 4, 2, 8, 'Diced');  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 5  butter
                      VALUES(6, 5, 6, 12); 
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 6  skim milk
                      VALUES(6, 6, 1.5, 13);
                    
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 7  soy sauce
                      VALUES(6, 7, 4, 12);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 8  salt
                      VALUES(6, 8, 1, 11);  
                      
INSERT INTO recipe_ingredients(recipe_id, ingredient_id, quantity, uom_id)  #id = 9  pepper
                      VALUES(6, 9, 2, 11);


COMMIT;