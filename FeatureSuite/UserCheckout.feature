Feature: User checkout
    In order to checkout and proceed to payment
    As a user
    I have to click 'Proceed to payment'  

    Scenario: 
        Given that an I have a "cart"
        And that I have "products" in it
        When I am ready to pay
        Then I click "Proceed payment"
        And I will redirected to /Product/checkout