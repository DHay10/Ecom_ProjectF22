Feature: Respond client service request
    In order to respond to a client service requests 
    As a seller
    I want to be able to respond the client service request

    Scenario:
        Given that there is an "request"
        And I want to respond to that "request"
        When I am on that /Request
        Then I can respond to that "request"