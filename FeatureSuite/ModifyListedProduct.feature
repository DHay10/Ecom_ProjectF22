Feature: Modify listed product
    In order to modify a lised product
    As a seller
    I want to able to edit the details of my products for sell

    Scenario: 
        Given that there is a listed "product"
        And I want to modify its "details"
        When I click that "product"
        Then I can click "Modify"
        And my "product" can be updated
