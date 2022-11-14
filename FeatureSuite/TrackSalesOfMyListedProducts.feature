Feature: Track sales of my listed products
    In order to track the sales of my products
    As a seller
    I want to be able to view the data of their sales

    Scenario:
        Given that there is a listed "product"
        And I want to view how many times it has been bought
        When I am on Product/sales
        Then I can view how many times it has been purchased