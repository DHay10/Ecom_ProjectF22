Feature: Edit the rating and review of a purchased product
    In order to edit a rating or a review from a product I purchased
    As a user
    I have to click "Edit" under my submitted rating or review

    Scenario: 
        Given that I posted a "review" for a "product"
        And I want to modify it
        When I am in /Product i can see my posted "review"
        Then I have to click "Edit"
        And I will click 'Submit' to post my editted review