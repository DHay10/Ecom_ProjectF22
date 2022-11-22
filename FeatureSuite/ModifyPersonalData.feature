Feature: Modify personal data
    In order to alter a profile's personal information 
    As a user
    I want to click the "edit" button to modify the desired information and then click "save"

    Scenario: 
        Given that I have a new address that I want to add
        And I want to update my "profile"
        When I am on /Profile
        Then I click "edit" to modify the address field
        And I click "save" to have my new address updated