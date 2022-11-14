Feature: View customer order
    In order to view a customer order
    As a seller
    I want to be able to view customer order

    Scenario:
        Given that there is an "order"
        And I want to view that "order"
        When I am on /Order
        Then I can view the "details" of that "order"
