Feature: View client service request
    In order to view a client service request
    As a seller
    I want to be able to view the client service request

    Scenario:
        Given that there is an "request"
        And I want to see that "request"
        When I am on /Request
        Then I can view the "details" of that "request"