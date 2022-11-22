Feature: Leave a rating
     In order to leave a rating about a product
     As a user
     I have to click on the desired amount of "stars" out of 5

     Scenario: 
         Given that there is a "product" that I like
         And I want to leave a "rating"
         When I am on /Product
         Then I click on the number of "stars"
         And it will correspond out of 5 how much I like the "product"