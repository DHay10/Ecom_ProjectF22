Feature: Globalization of web application
    In order to be able to view the web application in another language
    As a user
    I have to choose a different language in the 'Settings' under 'Language Settings'

    Scenario:
        Given that the web application is in English
        And I want it to be in French
        When I navigate in the 'Settings' section
        Then I have the ability to choose another language by clicking 'Change language' under 'Language Settings'
        And my web application will be redirected in my desired language