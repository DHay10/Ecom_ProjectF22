Feature: Add product for sale
    In order to put a product for sale
    As a seller
    I want to be able to put up my product for sale

    Scenario:
        Given I have "product" that I want to sell
        And I want to list that "product"
        When I go in "add product" page
        Then I can add my "product" and its "details"
        And the "product" will be added

Feature: Modify listed product
    In order to modify a lised product
    As a seller
    I want to able to edit the details of my products for sell

    Scenario: 
        Given that there is a listed "product"
        And I want to modify its "details"
        When I choose that "product"
        Then I can change its "details"
        And my "product" details will be updated

Feature: Remove listed product
    In order to remove a listed product
    As a seller
    I want to be able to remove a listed product

    Scenario:
        Given that there is a listed "product"
        And I want to remove that "product"
        When I choose that "product"
        Then I can remove the "product"
        And the "product" will be removed

Feature: Track sales of my listed products
    In order to track the sales of my products
    As a seller
    I want to be able to view the data of their sales

    Scenario:
        Given that there is a listed "product"
        And I want to view how many times it has been bought
        When I choose that "product"
        Then I can view how many times it has been purchased

Feature: View customer order
    In order to view a customer order
    As a seller
    I want to be able to view customer order

    Scenario:
        Given that there is an "order"
        And I want to view that "order"
        When I choose that "order"
        Then I can view the details of that "order"

Feature: Mark customer order as shipped and add tracking information
    In order to mark a customer order as shipped 
    And add tracking information
    As a seller
    I want to be able to mark the order as shipped and add tracking information

    Scenario:
        Given that there is an "order"
        And I want to mark that "order" as shipped
        When I choose that "order"
        Then I can mark that "order" as shipped
        And add tracking information

Feature: View client service request
    In order to view a client service request
    As a seller
    I want to be able to view the client service request

    Scenario:
        Given that there is an "request"
        And I want to see that "request"
        When I choose that "request"
        Then I can view the details of that "request"

Feature: Respond client service request
    In order to respond to a client service requests 
    As a seller
    I want to be able to respond the client service request

    Scenario:
        Given that there is an "request"
        And I want to respond to that "request"
        When I choose that "request"
        Then I can respond to that "request"

Feature: Add a product to the featured Section
    In order to add a product in the featured section
    As a seller
    I want to be able to add a product in the Featured Section

    Scenario:
        Given that there is a "product"
        And I want to add that "product" to the featured section
        When I choose that "product"
        Then I can add that "product" to the featured section
        And that "product" will be added to the featured section

Feature: Send an email to all registered users
    In order to send an email to all registered users
    As a seller
    I want to be able to send an email to all registered users

    Scenario:
        Given that I want to send an email to all registered users
        When I access the emailing page
        Then I can write 
        And the customer will have a response to their question 

Feature: Display an advertisement in the Web Application
    In order to display an advertisement about a promotion to my viewers
    As a seller
    I want to implement an advertisement to be displayed for a temporary moment

    Scenario: 
        Given that there is a Black Friday discount that customers can get a hold of
        And I want to display it in a significant way on my Web Application
        When implementing an advertisement
        Then I can precise for which event it is for as well as make it visually pleasing
        And the viwers that will browse the Web Application will notice the advertisement

Feature: Modify personal data
    In order to alter a profile's personal information 
    As a user
    I want to click the edit button to them modify the desired information and then submitting the changes

    Scenario: 
        Given that I have a new address in where I reside
        And I want to update that information in my profile
        When editing my user profile
        Then I can navigate to the address field to change the old address to the new address
        And I will be able to see the updated information once i've submitted my changed

Feature: Searching in the product catalog
    In order to search for a specific element in the product catalog 
    As a user
    I have to search in the search bar for their desired product and enter

    Scenario: 
        Given that I want to search a specific item through the product catalog
        And I want to use the search bar to search
        When putting in my search
        Then I can see a list of retrieved items that correspond to my search
        And I can navigate through the items displayed that corresponds to my needs

Feature: View product description
    In order to see the details of a desired product
    As a user
    I have to navigate to the 'Product Detail' section of the page

    Scenario: 
         Given that there is a product that I am intersted in buying
         And I want to see the dimensions of the product
         When navigating in the page
         Then I click on the 'Product Detail' section
         And a detailed description of mt product will be displayed

Feature: Add products to shopping cart
    In order to add selected products in my cart
    As a user
    I have to click the 'Add to cart' button

    Scenario: 
         Given that there is a product that peeks my attention
         And I want to buy it
         When navugating the product page
         Then I click the 'Add to cart' button
         And my product will be added to the shopping cart for it to be purchased

Feature: Remove a product from shopping cart
    In order to remove a product from my cart
    As a user
    I have to click the 'Remove from cart' button

    Scenario: 
         Given that there is a product that I added to my cart 
         And I dont want it anymore
         When navigating the shopping cart page
         Then I click the 'Remove from cart' button
         And my product will be discarded from my shopping cart

Feature: Add or remove quantity of a product in my shopping cart
    In order to modify the quantity of a specific product
    As a user
    I have to click the '+' or '-' button according to their preference

    Scenario: 
         Given that there is a product in my shopping cart
         And there is already a defined quantity to it
         When I want to add another one of the product
         Then I click the '+' button
         And another quanity of my product will be added to my shopping cart

Feature: User checkout
    In order to checkout and proceed to payment
    As a user
    I have to click the 'Proceed to payment' button 

    Scenario: 
        Given that an I have a shopping cart
        And that I have products in it
        When I am ready to pay
        Then I click the 'Proceed payment' button
        And I will redirected to the payment page

Feature: Add a product to 'Wish List'
    In order to add desired products saved for future purposes
    As a user
    I have to click the 'Add to Wishlist' button

    Scenario: 
         Given that there is a product that I really want
         And I want to buy it
         When I will have the financial ressources for it
         Then I can go back to my Wishlist
         And I can view the products that were saved there
 
Feature: Leave a rating
     In order to leave a rating about a product
     As a user
     I have to click on the desired amount of stars out of 5

     Scenario: 
         Given that there is a purchased product that I liked
         And I want to let the seller know of it
         When I will navigate the product page
         Then I click on the number of stars out of 5 that correspond on how much I like the product
         And my rating if left for the seller

Feature: Leave a review
     In order to leave a review on a product
     As a user
     I have to input their review in the 'Leave a review' text box

     Scenario: 
         Given that there is a purchased product that has a bad quality
         And I want to let the seller know of it
         When I will navigate the product page
         Then I type my complaint in the textbook and click 'Submit'
         And my review will be pasted on the product page 

Feature: Add, delete, modify Shipping Address saved
    In order to add, delete or modify my saved shipping address
    As a user
    I have to go on user profile and update the 'Shipping Information' section

    Scenario: 
        Given that I have another location where I reside in
        And I want to add that address to my shipping information
        When I will navigate through the 'User Profile'
        Then I will click 'Add' in the 'Shipping Information' section under the 'Shipping address' element
        And I can add the secondary address

Feature: Modify the rating and review of a purchased product
    In order to modify a rating or a review from a product I purchased
    As a user
    I have to click 'Modify' under my submitted rating or review

    Scenario: 
        Given that I posted a review for a purchased product
        And I want to modify it
        When I will navigate the product page I will see the 'Modify' option under my posted review
        Then I have to click 'Modify' to modify my review
        And I will click 'Submit' to post my modified review to the public

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

Feature: Change the currency
    In order to view the store in another currecny
    As a user
    I have to choose a different currency in the 'Settings' under 'Currency Settings' 

    Scenario:
        Given that the products from the web application are displayed in Dollars($)
        And I want the prices of the products to be displayed in Euros(€)
        When I navigate in the 'Settings' section
        Then I have the ability to choose another currency by clicking 'Change currency' under 'Currency Settings'
        And my web application will be redirected in my desired language

