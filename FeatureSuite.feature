Feature: Add product for sale
    In order to put a product for sale
    As a seller
    I want to be able to put up my product for sale

    Scenario:
        Given I have "product" that I want to sell
        And I want to list that "product"
        When I am in /Product/add product
        Then I can add my "product" and its "details"
        And the "product" will be added

Feature: Modify listed product
    In order to modify a lised product
    As a seller
    I want to able to edit the details of my products for sell

    Scenario: 
        Given that there is a listed "product"
        And I want to modify its "details"
        When I click that "product"
        Then I can click "Modify"
        And my "product" can be updated

Feature: Remove listed product
    In order to remove a listed product
    As a seller
    I want to be able to remove a listed product

    Scenario:
        Given that there is a listed "product"
        And I want to remove that "product"
        When I am in /Product
        Then I can click "Delete"
        And the "product" will be removed

Feature: Track sales of my listed products
    In order to track the sales of my products
    As a seller
    I want to be able to view the data of their sales

    Scenario:
        Given that there is a listed "product"
        And I want to view how many times it has been bought
        When I am on Product/sales
        Then I can view how many times it has been purchased

Feature: View customer order
    In order to view a customer order
    As a seller
    I want to be able to view customer order

    Scenario:
        Given that there is an "order"
        And I want to view that "order"
        When I am on /Order
        Then I can view the "details" of that "order"

Feature: Mark customer order as shipped and add tracking information
    In order to mark a customer order as shipped 
    And add tracking information
    As a seller
    I want to be able to mark the order as shipped and add tracking information

    Scenario:
        Given that there is an "order"
        And I want to mark that "order" as "Shipped"
        When I am in /Order
        Then I can mark that "order" as "shipped"
        And add "tracking information" in Order/tracking

Feature: View client service request
    In order to view a client service request
    As a seller
    I want to be able to view the client service request

    Scenario:
        Given that there is an "request"
        And I want to see that "request"
        When I am on /Request
        Then I can view the "details" of that "request"

Feature: Respond client service request
    In order to respond to a client service requests 
    As a seller
    I want to be able to respond the client service request

    Scenario:
        Given that there is an "request"
        And I want to respond to that "request"
        When I am on that /Request
        Then I can respond to that "request"

Feature: Add a product to the featured Section
    In order to add a product in the featured section
    As a seller
    I want to be able to add a product in the Featured Section

    Scenario:
        Given that there is a "product"
        And I want to add that "product" to the "Featured Section"
        When I choose that "product"
        Then I can add that "product" to /Product/Featured Section
        And that "product" will be displayed in /Featured Section

Feature: Send an email to all registered users
    In order to send an email to all registered users
    As a seller
    I want to be able to send an email to all registered users

    Scenario:
        Given that I want to send an "email" to all "registered users"
        When I am in /Email/send an email
        Then I can compose an "email" 
        And click "Send" to send "email" to "registered users"

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

Feature: Searching in the product catalog
    In order to search for a specific element in the "product catalog"
    As a user
    I have to search in the "Search Bar" for the desired product

    Scenario: 
        Given that I want to search a "product" 
        And I am on /Product/catalog
        When I enter my search in the "Search Bar"
        Then I can see a list of retrieved items that correspond to my search
        And I can navigate through /Product/catalog

Feature: View product description
    In order to see the details of a desired product
    As a user
    I have to navigate to the 'Product Detail' section of the page

    Scenario: 
         Given that there is a "product" that I am intersted in 
         And I want to see the "dimensions" of the "product"
         When I am on /Product
         Then I click on the "Product Detail" section
         And will have a description of the "product"

Feature: Add products to shopping cart
    In order to add selected products in my cart
    As a user
    I have to click "Add to cart" 

    Scenario: 
         Given that there is a "product"
         And I want to buy it
         When I am on /Product
         Then I click "Add to cart"
         And my "product" will be added to the "cart"

Feature: Remove a product from shopping cart
    In order to remove a product from my cart
    As a user
    I have to click "Remove from cart"

    Scenario: 
         Given that there is a "product" in my "cart"
         And I dont want to remove it
         When I am on Product/cart
         Then I click "Remove from cart"
         And my product will be discarded from my "cart"

Feature: Add or remove quantity of a product in my shopping cart
    In order to modify the quantity of a "product"
    As a user
    I have to click the '+' or '-' button

    Scenario: 
         Given that there is a "product" in my "cart"
         And I am on /Product
         When I want to add another quantity of the "product"
         Then I click "+"
         And another quanity of my "product" will be added to my "cart"

Feature: User checkout
    In order to checkout and proceed to payment
    As a user
    I have to click 'Proceed to payment'  

    Scenario: 
        Given that an I have a "cart"
        And that I have "products" in it
        When I am ready to pay
        Then I click "Proceed payment"
        And I will redirected to /Product/checkout

Feature: Add a product to 'Wish List'
    In order to add products saved for future purposes
    As a user
    I have to click 'Add to Wishlist' 

    Scenario: 
         Given that there is a "product"
         And I want to buy it later
         When I am on /Product
         Then I click "Add to Wishlist"
         And I can view the "product" in /Product/Wishlist
 
Feature: Leave a rating
     In order to leave a rating about a product
     As a user
     I have to click on the desired amount of "stars" out of 5

     Scenario: 
         Given that there is a "product" that I like
         And I want to leave a "rating"
         When I am on /Product
         Then I click on the number of "stars"
         And it will correspond out of 5 how much I like the "product"

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
    In order to view the storefront in another currecny
    As a user
    I have to choose a different currency in the "Settings"

    Scenario:
        Given that the "product" are displayed in Dollars($)
        And I want the products to be displayed in Euros(€)
        When I am on /Profile/Settings
        Then I click "Change currency" in /Settings/currency settings
        And my page will be redirected in my desired currency

