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