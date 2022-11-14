Feature: Add a product to 'Wish List'
    In order to add products saved for future purposes
    As a user
    I have to click 'Add to Wishlist' 

    Scenario: 
         Given that there is a "product"
         And I want to buy it later
         When I am on /Product
         Then I click "Add to Wishlist"
         And I can view the "product" in /Product/Wishlist