Feature: Display an advertisement in the Web Application
    In order to display an advertisement about a promotion to my viewers
    As a seller
    I want to implement an advertisement to be displayed for a temporary moment

    Scenario: 
        Given that there is "discount" that customers can get a hold of
        And I want to display it in on my Web Application
        When I am in /Advertisement 
        Then I can create an "advertisement" and its "details"
        And my "advertisement" will be displayed