Feature: Add product for sale
    In order to put a product for sale
    As a seller
    I want to be able to put up my product for sale

    Scenario:
        Given I have "product" that I want to sell
        And I want to list that "product"
        When I am in /Product/add product
        Then I can add my "product" and its "details"
        And the "product" will be added