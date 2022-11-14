Feature: Add product to Featured Section
    In order to add a product in the featured section
    As a seller
    I want to be able to add a product in the Featured Section

    Scenario:
        Given that there is a "product"
        And I want to add that "product" to the "Featured Section"
        When I choose that "product"
        Then I can add that "product" to /Product/Featured Section
        And that "product" will be displayed in /Featured Section