# RecipeApp

RecipeApp is a Symfony back-end API for storing and interacting with food recipes.

----

# Steps to follow

1. Simply run the app using Symfony command
2. First do, `composer install` to install dependencies
3. Use Postman do make API calls
4. Note: You will need to have local database setup to run this app

# REST API Endpoints

1. Get all resources, GET, endpoint: `/api/recipes/all`
2. Get specific recipe, GET endpoint: `/api/recipes/find/{id}`
3. Create a new recipe, POST endpoint: `/api/recipes/add`
   (choose body and select raw and insert json for example)

```{
  "name": "new receipe",
  "photo": "https://images.unsplash.com/photo-1618839851913-052118691168?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
  "instructions": "Bla bla bla",
  "difficulty": "Easy",
  "ingredients": [
      {
          "id": 1,
          "name": "Milk",
          "amount": "50 ml"
      },
      {
          "id": 2,
          "name": "Flour",
          "amount": "300 g"
      }
  ]
}
```

4. Edit a recipe with a name, PUT/PATCH endpoint: `/api/recipes/edit/{id}`
   (choose body, x-www-form-urlencoded and select key i.e. name and value: new value to be edited or updated)
5. Delete a recipe, DELETE endpoint: `/api/recipes/remove/{id}`

# Production deployment

RecipeApp is currently deployed at heroku,
the baseURL is: https://intense-journey-91807.herokuapp.com

# Tech stack

1.  [Symfony](https://symfony.com/)
2.  [PHP](https://www.php.net/)
3.  [MySQL](https://mysql.com)
4.  [phpMyAdmin](https://www.phpmyadmin.net/)
5.  [Postman](https://www.postman.com/)


