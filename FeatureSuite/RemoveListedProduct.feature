Feature: Remove listed product
    In order to remove a listed product
    As a seller
    I want to be able to remove a listed product

    Scenario:
        Given that there is a listed "product"
        And I want to remove that "product"
        When I am in /Product
        Then I can click "Delete"
        And the "product" will be removed