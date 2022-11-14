Feature: Add, delete, modify Shipping Address saved
    In order to "add", "delete" or "update" my saved shipping address
    As a user
    I have to go on my profile and update the 'Shipping Information'

    Scenario: 
        Given that I have shipping address
        And I want to "update" it
        When I am in /Profile
        Then I will click "Update" in /Profile/Shipping Information
        And I can "update" my shipping address