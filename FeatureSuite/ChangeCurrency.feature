Feature: Change the currency
    In order to view the storefront in another currecny
    As a user
    I have to choose a different currency in the "Settings"

    Scenario:
        Given that the "product" are displayed in Dollars($)
        And I want the products to be displayed in Euros(€)
        When I am on /Profile/Settings
        Then I click "Change currency" in /Settings/currency settings
        And my page will be redirected in my desired currency