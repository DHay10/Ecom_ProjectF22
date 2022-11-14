Feature: Add products to shopping cart
    In order to add selected products in my cart
    As a user
    I have to click "Add to cart" 

    Scenario: 
         Given that there is a "product"
         And I want to buy it
         When I am on /Product
         Then I click "Add to cart"
         And my "product" will be added to the "cart"