Feature: Leave a review
     In order to leave a review on a product
     As a user
     I have to leave a review in the "Leave a review" field

     Scenario: 
         Given that there is a "product" that has a bad quality
         And I want to leave a "review"
         When I am on /Product
         Then I type my "review"
         And I click "Submit" for my review to be posted on /Product