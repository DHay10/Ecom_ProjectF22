Feature: Remove a product from shopping cart
    In order to remove a product from my cart
    As a user
    I have to click "Remove from cart"

    Scenario: 
         Given that there is a "product" in my "cart"
         And I dont want to remove it
         When I am on Product/cart
         Then I click "Remove from cart"
         And my product will be discarded from my "cart"
