Feature: Add or remove quantity of a product in my shopping cart
    In order to modify the quantity of a "product"
    As a user
    I have to click the '+' or '-' button

    Scenario: 
         Given that there is a "product" in my "cart"
         And I am on /Product
         When I want to add another quantity of the "product"
         Then I click "+"
         And another quanity of my "product" will be added to my "cart"